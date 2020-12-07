<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Grades;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Grades::class, 100)->create();      
    }
}
