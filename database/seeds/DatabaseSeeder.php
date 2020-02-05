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
       for($a = 0;$a<100;$a++){
       DB::table('students')->insert([
        'Firstname'=>$faker->firstName,
        'Lastname'=>$faker->lastName,
        'Age'=>$faker->numberBetween($min = 15, $max = 25)
       ]) ;
       }
    }
}
