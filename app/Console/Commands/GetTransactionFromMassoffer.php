<?php

namespace App\Console\Commands;


use App\Model\TransactionDetail;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Shorty;
use App\Model\Account;
use App\Model\Transaction;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;


class GetTransactionFromMassoffer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:trans';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get transactions all from massoffer';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//        &date_from=20160829&date_to=20170209
        try {
            $date_from = Carbon::now()->subYears(2)->format('Ydm');
            $date_to = Carbon::now()->addDay()->format('Ydm');
            $page = 1;

            $client = new GuzzleClient();

            while(true) {
                $link_api = 'http://api.masoffer.com/v1/transactions?pub_id=huyjuku&token=63wovU3ura8ZBwS2g3KXxA%3D%3D&limit=1&page='.$page.'&date_from=' . $date_from . '&date_to=' . $date_to;
                $response = $client->request('GET', $link_api);

                $response = json_decode($response->getBody(), true);
                if ($response['status']) {
                    $data = $response['data'];
                    if ($data['totalPage']) {
                        if(isset($data['item'])) {

                            $items = $data['item'];
                            $page = $page+1;
                            foreach ($items as $item) {
                                $account_id = ($item['aff_sub1']) ? $item['aff_sub1'] : 0;
                                $transaction_id = $item['transaction_id'];
                                $offer_id = $item['offer_id'];
                                $conversion_count = $item['conversion_count'];
                                $order_value = $item['conversion_sale_amount'];
                                $publisher_payout = $item['conversion_publisher_payout'];
                                $status = $item['conversion_status_code'];
                                $transaction = Transaction::where('transaction_id',$transaction_id)->where('account_id',$account_id)->first();
                                if(empty($transaction)) {
                                    $transaction = Transaction::create(['transaction_id' => $transaction_id,'account_id' => $account_id]);
                                }
                                $transaction->update([
                                    'offer_id' => $offer_id,
                                    'conversion_count' => $conversion_count,
                                    'order_value' => $order_value,
                                    'publisher_payout' => $publisher_payout,
                                    'status' => $status
                                ]);

                                $link_detail = 'http://api.masoffer.com/v1/transaction/'.$offer_id.'/'.$transaction_id.'/detail?pub_id=huyjuku&token=63wovU3ura8ZBwS2g3KXxA%3D%3D';
                                $resDetail =$client->request('GET', $link_detail);
                                $resDetail = json_decode($resDetail->getBody(), true);
                                if ($resDetail['status']) {
                                    $details = $resDetail['data'];
                                    foreach ($details as $detail) {
                                        $transactionDetail = TransactionDetail::where('transaction_id',$transaction_id)->where('product_name',$detail['product_name'])->first();
                                        if(empty($transactionDetail)) {
                                            $transactionDetail = TransactionDetail::create($detail);
                                        } else {
                                            $transactionDetail->update($detail);
                                        }
                                    }
                                }

                            }
                        } else {
                            break;
                        }

                    }else {
                        break;
                    }
                }

            }




        } catch (\Exception $ex) {
            dd($ex->getMessage());
        }


    }
}
