<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Site;

class SiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "site_name" => "Google",
            "site_ig" => "Google_logo.png",
            "site_url" => "https://www.google.com/",
        ];
        DB::table("site")->insert($param);

        $param = [
            "site_name" => "Youtube",
            "site_ig" => "youtube_logo.jpg",
            "site_url" => "http://youtube.com/",
        ];
        DB::table("site")->insert($param);
            
        $param = [
            "site_name" => "Amazon",
            "site_ig" => "amazon_logo.jpg",
            "site_url" => "https://www.amazon.co.jp/",
        ];
        DB::table("site")->insert($param);

    }
}
