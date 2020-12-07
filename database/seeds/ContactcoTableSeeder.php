<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Contactco;

class ContactcoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'company_id' => 3,
            'opinioncontent' => 'ログインができない。',
        ];
        DB::table('contactco')->insert($param);
        $param = [
            'company_id' => 7,
            'opinioncontent' => 'グッズが正常に表示されない。',
        ];
        DB::table('contactco')->insert($param);
        $param = [
            'company_id' => 13,
            'opinioncontent' => 'グッズが登録できない。',
        ];
        DB::table('contactco')->insert($param);

    }
}
