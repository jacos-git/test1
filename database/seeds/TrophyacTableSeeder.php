<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Trophyac;

class TrophyacTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Trophyac::class, 50)->create();
    }
}
