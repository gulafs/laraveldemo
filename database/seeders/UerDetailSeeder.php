<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\UserDetail;


class UserDetailSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker= Faker::create();
        for($i=0;$i<10;$i++){
            DB::table('userDrtail')->insert([
                'name' =>$faker->namw,
                'mobile' => $faker->unique()->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('pass123'),
                'city' => $faker->city,
                'salary' => $faker->randomFloat(2, 1000, 10000),
                'joining_date' => $faker->date,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
