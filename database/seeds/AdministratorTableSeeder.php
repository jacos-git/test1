<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Administrator;

class AdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Administrator::class, 30)->create();      
    }
}
