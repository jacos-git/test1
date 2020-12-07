<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Infomation;

class InfomationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'info_name' => '今月のイベントについて',
            'content' => '今月のイベントは～～です。',
        ];
        DB::table('infomation')->insert($param);

        $param = [
            'info_name' => 'メンテナンスのお知らせ',
            'content' => '〇月〇日(〇)にメンテナンスを実施致します。',
        ];
        DB::table('infomation')->insert($param);

        $param = [
            'info_name' => 'ver1.05 アップデートについて',
            'content' => '〇月〇日(〇)のver1.05のアップデートについての詳細は以下の通りです。',
        ];
        DB::table('infomation')->insert($param);
    }
}
