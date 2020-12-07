<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Community;

class CommunityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'community_id'=>1000,
            'leader_id'=>3,
            'community_name'=>'誰でも大歓迎',
            'level'=>'初級',
        ];
        DB::table('community')->insert($param);
        $param=[
            'community_id'=>1001,
            'leader_id'=>6,
            'community_name'=>'初心者大歓迎',
            'level'=>'初級',
        ];
        DB::table('community')->insert($param);
        $param=[
            'community_id'=>1002,
            'leader_id'=>4,
            'community_name'=>'本格的に走りたい人大歓迎',
            'level'=>'上級',
        ];
        DB::table('community')->insert($param);
        $param=[
            'community_id'=>1003,
            'leader_id'=>9,
            'community_name'=>'それなりに走りたい人大歓迎',
            'level'=>'中級',
        ];
        DB::table('community')->insert($param);
        $param=[
            'community_id'=>1004,
            'leader_id'=>8,
            'community_name'=>'誰でも歓迎',
            'level'=>'中級',
        ];
        DB::table('community')->insert($param);
        $param=[
            'community_id'=>1005,
            'leader_id'=>1,
            'community_name'=>'そこそこ走りたい人歓迎',
            'level'=>'中級',
        ];
        DB::table('community')->insert($param);
        $param=[
            'community_id'=>1006,
            'leader_id'=>5,
            'community_name'=>'中級者大歓迎',
            'level'=>'中級',
        ];
        DB::table('community')->insert($param);

        //factory(Community::class, 10)->create();      

    }
}
