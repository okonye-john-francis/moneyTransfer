<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $faker = Faker::create('App\moneyTransfer');
        for ($i=1; $i < 400 ; $i++) { 
        	DB::table('users')->insert([
            'fname'=>$faker->firstName,
            'lname'=>$faker->lastName,
            'email'=>$faker->email,
            'phonenumber'=>$faker->e164PhoneNumber,
            'country'=>$faker->country,
            'is_active'=>$faker->numberBetween($min = 1, $max = 1),
            'password'=>$faker->password,
            'created_by'=>null,
            'remember_token'=>$faker->password,
            'created_at'=>$faker->dateTimeThisYear($max = 'now', $timezone = null),
            'updated_at'=>$faker->dateTimeThisYear($max = 'now', $timezone = null),

        	]);
        }


    }
}
