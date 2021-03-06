<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(MonthTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(PartnerTableSeeder::class);
        $this->call(ZipCodeTableSeeder::class);
        $this->call(ServiceDayTableSeeder::class);
        $this->call(ServiceTimeTableSeeder::class);

        Model::reguard();
    }
}
