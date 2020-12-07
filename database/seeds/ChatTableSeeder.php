<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Chat;

class ChatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'comment' => 'こんにちは',
            'user_id' => 20,
            'community_id' => 1003,
            'sendtime' => '2020.10.9',
           ];
           DB::table('chat')->insert($param);
    
           $param = [
            'comment' => 'おはよう',
            'user_id' => 4,
            'community_id' => 1002,
            'sendtime' => '2020.8.8',
           ];
           DB::table('chat')->insert($param);
    
           $param = [
            'comment' => 'こんばんは',
            'user_id' => 13,
            'community_id' => 1004,
            'sendtime' => '2020.5.6',
           ];
           DB::table('chat')->insert($param);
    
    }
}
