<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 15)->create();      
    }
}
