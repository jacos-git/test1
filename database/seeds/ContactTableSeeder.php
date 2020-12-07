<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 43,
            'opinioncontent' => 'エラー出てアプリが使えない。',
        ];
        DB::table('contact')->insert($param);
        $param = [
            'user_id' => 29,
            'opinioncontent' => '走行距離が正常に表示されない。',
        ];
        DB::table('contact')->insert($param);
        $param = [
            'user_id' => 12,
            'opinioncontent' => 'コミュニティーが作成できない。',
        ];
        DB::table('contact')->insert($param);
        $param = [
            'user_id' => 38,
            'opinioncontent' => '商品がカートに追加されない。',
        ];
        DB::table('contact')->insert($param);

    }
}
