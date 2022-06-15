<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
       for($i=1; $i<=40; $i++) {
        DB::table('admin')->insert([
            'name'=>$faker->Name,
            'email'=>$faker->Email,
            'password'=>$faker->Password,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);

       }
    }
}
