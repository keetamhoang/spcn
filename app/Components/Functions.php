<?php

namespace App\Components;

use App\Model\Brand;
use Goutte\Client;
use App\Model\DiscountCategory;

use Shorty;
use Symfony\Component\DomCrawler\Crawler;

class Functions
{

    public static function genLink($url)
    {
        $link = 'http://go.masoffer.net/v1/9b-LDizFn8doJoxVrxbrRg?url=' . $url . '&utm_source=masofferr&aff_sub1=' . auth()->user()->id;
        $link = Shorty::shorten($link);
        $str = preg_replace('#^https?://#', '', rtrim($link, '/'));
        return $str;
    }

    public static function getIdFromLazadaLink($link)
    {
        $htmlPos = strpos($link, '.html');
        $newLink = substr($link, 0, $htmlPos);
        $dashPos = strrpos($newLink, '-');
        return substr($newLink, $dashPos + 1, $htmlPos - $dashPos);
    }

    public static function getIdFromTikiLink($link)
    {
        $htmlPos = strpos($link, '.html');
        $newLink = substr($link, 0, $htmlPos);
        $dashPos = strrpos($newLink, '-');
        return substr($newLink, $dashPos + 1, $htmlPos - $dashPos);
    }

    public static function getIdFromAdayroi($link)
    {
        $client = new Client();
        $crawler = $client->request('GET', $link);
        $id = $crawler->filter('.vine-comments')->first()->attr('data-product');
        return $id;
    }

    public static function convertSlug($string)
    {
        $string = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẵ|ẳ)/", 'a', $string);
        $string = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $string);
        $string = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $string);
        $string = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $string);
        $string = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $string);
        $string = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $string);
        $string = preg_replace("/(đ)/", 'd', $string);
        $string = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $string);
        $string = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $string);
        $string = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $string);
        $string = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $string);
        $string = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $string);
        $string = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $string);
        $string = preg_replace("/(Đ)/", 'D', $string);
        $string = strtolower(trim($string));
        $string = preg_replace('/[^%a-zA-Z0-9]/', ' ', $string);
        $string = preg_replace('/\s+/', '-', $string);
        $string = preg_replace('|-+|', '-', $string);
        $parsed = trim($string, '-');

        return $parsed;
    }

    public static function getCkBuyBrandId($id)
    {
        $discounts = DiscountCategory::where('brand_id', $id)->get();
        return $discounts;
    }

    public static function getProductInfo($link)
    {

        $client = new Client();
        $crawler = $client->request('GET', $link);

        $firstCategory = '';
        $price = '';
        $image = '';
        $name = '';
        $id = '';
        $source = '';
        $sku = '';

        if (str_contains($link, 'lazada.vn')) {
            $firstCategory = $crawler->filter('.breadcrumb__item')->first()->text();
            $price = $crawler->filter('#product_price')->text();
            $image = $crawler->filter('#productZoom')->attr('data-zoom-image');
            $name = $crawler->filter('#prod_title')->text();
            $id = Functions::getIdFromLazadaLink($link);
            $sku = $crawler->filter('#selectedSku')->attr('value');
            $source = 'lazada';
        } else if (str_contains($link, 'tiki.vn')) {
            $crawler = new Crawler(file_get_contents($link));
            $firstCategory = $crawler->filter('body > div.breadcrumb-wrap > div > ul > li:nth-child(2) > a > span')->first()->text();
            $price = $crawler->filter('#p-specialprice')->attr('data-value');

            if ($crawler->filter('#product-magiczoom')->count()) {

                $image = $crawler->filter('#product-magiczoom')->attr('src');

                if (empty($image)) {
                    if ($crawler->filter('#product-magiczoom > img')->count()) {

                        $image = $crawler->filter('#product-magiczoom > img')->attr('src');

                        if (empty($image)) {
                            $image = '';
                        }
                    }
                }
            } else {
                $image = '';
            }
            $sku = $crawler->filter('#product_sku')->attr('value');

            $name = $crawler->filter('#product-name')->text();
            $id = Functions::getIdFromTikiLink($link);
            $source = 'tiki';
        } else if (str_contains($link, 'adayroi.com')) {
            $firstCategory = $crawler->filter('#spcatroot > a > span')->first()->text();
            $price = $crawler->filterXPath('//*[@id="item_prices"]/div[1]/text()')->text();
            $image = $crawler->filter('#product_gallery > div.stage > img')->attr('src');
            $name = $crawler->filter('#product_info > div:nth-child(1) > h1')->text();

            $id = Functions::getIdFromAdayroi($link);
            $source = 'adayroi';
        }

        $price = self::filterInputNumber($price);

        $price = rtrim($price, 'đ');

        return [
            'category_name' => trim($firstCategory),
            'category_slug' => self::convertSlug(trim($firstCategory)),
            'price' => trim($price),
            'image' => trim($image),
            'name' => trim($name),
            'root_id' => trim($id),
            'source' => $source,
            'sku' => $sku
        ];
    }

    public static function filterInputNumber($num)
    {
        $num = trim($num);
        $num = str_replace('.', '', $num);
        $num = preg_replace('/\s+/', '', $num);
        return $num;
    }

    public static function getDiscountByCategory($brand, $category)
    {
        $brand = Brand::where('slug', $brand)->first();

        if (empty($brand)) {
            return config('const.DEFAULT_CK');
        }

        $discountCategories = DiscountCategory::where('slug', $category)->where('brand_id', $brand->id)->first();

        if (empty($discountCategories)) {
            return ['discount' => config('const.DEFAULT_CK'), 'category_id' => 0];
        }

        return [
            'discount' => $discountCategories->discount,
            'category_id' => $discountCategories->id
        ];
    }

    public static function saveAndCropImage($path, $folder = 'products', $old = null) {
        $path = str_replace(' ', '%20', $path);
        $image = \Image::make($path);

        $width = $image->width();
        $height = $image->height();

        if ($width > $height) {
            $x = $width / 2 - ($height / 2);
            $y = 0;
            $image->crop($height, $height, $x, $y);
        } else if ($width < $height) {
            $x = 0;
            $y = $height / 2 - ($width / 2);
            $image->crop($width, $width, $x, $y);
        } else {
            $x = 0;
            $y = 0;
            $image->crop($width, $width, $x, $y);
        }

        $savePath = '/files/'. $folder;

        if (!is_dir(public_path($savePath))) {
            mkdir(public_path($savePath));
        }

        $pathInfo = pathinfo($path);

        $filename = md5(time()) . basename($path);

        $extension = $pathInfo['extension'];

        $filename = str_slug($filename);

        $filename .= '.'. $extension;

        $filename = '/files/'.$folder. '/' . $filename;

        $image->save(public_path($filename));

        if ($old) {
            @unlink(public_path($old));
        }

        return $filename;
    }

    public static function detectPhoneNumber($string) {
        preg_match('/\+?[0-9][0-9()\-.\s+]{7,20}[0-9]/', $string, $matches);
        $phone = preg_replace('/[^0-9]/', '', $matches);

        if (count($phone) > 0) {
            $phone = $phone[0];

            if ($phone[0] == 8 and $phone[1] == 4) {
                $phone = preg_replace('/84/', '0', $phone, 1);
            } elseif ($phone[0] != 0) {
                $phone = '0' . $phone;
            }

            if (strlen($phone) >= 10 && strlen($phone) <= 11) {
                return $phone;
            }
        }

        return '';
    }
}