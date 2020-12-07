<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Goods;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Goods::class, 150)->create();
    }
}
