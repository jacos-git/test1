<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserTableSeeder::class);
        //$this->call(AdministratorTableSeeder::class);
        //$this->call(CompanyTableSeeder::class);
        //$this->call(CommunityTableSeeder::class);
        //$this->call(ChatTableSeeder::class);
        //$this->call(ContactTableSeeder::class);
        //$this->call(InfomationTableSeeder::class);
        //$this->call(EventTableSeeder::class);
        //$this->call(TrophyTableSeeder::class);
        //$this->call(TrophyacTableSeeder::class);
        //$this->call(SiteTableSeeder::class);
        //$this->call(ContactcoTableSeeder::class);
        //$this->call(GradesTableSeeder::class);
        //$this->call(GoodsTableSeeder::class);
        $this->call(OrderTableSeeder::class);
    }
}
