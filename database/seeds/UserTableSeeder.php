<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();      
    }
}
