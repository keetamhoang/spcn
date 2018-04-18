<?php

namespace App\Console\Commands;

use App\Components\Functions;
use Illuminate\Console\Command;

class GetPromotions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:promotion';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
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
        //
        $url = 'http://api.masoffer.com/promotions';

        $json = file_get_contents($url);

        $promotions = json_decode($json, true);

        if(!empty($promotions['data']['promotions'])) {

            foreach ($promotions['data']['promotions'] as $promotion) {

                if (empty($promotion['expired_date'])) {
                    $expiredDate = 0;
                } else {
                    $expiredDate = $promotion['expired_date'];
                }

                if (empty($promotion['started_date'])) {
                    $startedDate = 0;
                } else {
                    $startedDate = $promotion['started_date'];
                }

                $category = $promotion['category_name'];

                $category = Functions::convertSlug($category);

                \DB::table('promotion_categories')->updateOrInsert([
                    'slug' => $category
                ], [
                    'name' => $promotion['category_name'],
                    'slug' => $category

                ]);

                $categoryItem = \DB::table('promotion_categories')->where('slug', $category)->first();

                if($categoryItem)
                {
                    $categoryId = $categoryItem->id;
                } else {
                    $categoryId = 0;
                }

                \DB::table('promotions')->updateOrInsert([
                    'promotion_id' => $promotion['id']
                ], [
                    'title' => $promotion['title'],
                    'thumbnail' => $promotion['thumbnail'],
                    'coupon_code' => $promotion['coupon_code'],
                    'category_name' => $promotion['category_name'],
                    'content' => $promotion['content'],
                    'description' => $promotion['description'],
                    'condition' => $promotion['condition'],
                    'offer_id' => $promotion['offer_id'],
                    'expired_date' => $expiredDate,
                    'started_date' => $startedDate,
                    'promotion_id' => $promotion['id'],
                    'category_id' => $categoryId,
                    'category_slug' => $category,
                    'aff_url' => $promotion['aff_url'],
                    'original_url' => $promotion['original_url'],
                ]);
            }
        }
    }
}
