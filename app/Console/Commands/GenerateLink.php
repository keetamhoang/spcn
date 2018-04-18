<?php

namespace App\Console\Commands;

use App\Model\Account;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Shorty;
class GenerateLink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gen:link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'gen link';

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
        $url = 'http://www.lazada.vn/may-in-laser-canon-lbp2900-trang-hang-phan-phoi-chinh-thuc-2182137.html?spm=a2o4n.home.sku-feed-slider-with-banner_459590.17.fMjDG9';
        $link = 'http://go.masoffer.net/v1/6xvnn10vT8gsWgwjaJdtfg?url='.$url.'&utm_source=3Dmasofferr&aff_sub1=123';
//        http://go.masoffer.net/v1/6xvnn10vT8gsWgwjaJdtfg?url=http%3A%2F%2Fwww.lazada.vn%2Fmay-in-laser-canon-lbp2900-trang-hang-phan-phoi-chinh-thuc-2182137.html%3Fspm%3Da2o4n.home.sku-feed-slider-with-banner_459590.17.fMjDG9%26utm_source%3Dmasoffer&aff_sub1=123&aff_sub2=&aff_sub3=&aff_sub4=

       $link =  Shorty::shorten($link);
        $str = preg_replace('#^https?://#', '', rtrim($link,'/'));

       dd($str);
    }
}
