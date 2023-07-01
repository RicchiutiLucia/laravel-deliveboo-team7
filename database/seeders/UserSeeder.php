<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::statement("SET foreign_key_checks = 0;");
        User::truncate();



        for ($i = 0; $i < 20; $i++) {
            $newuser = new User();
            $newuser->name = $faker->firstName();
            $newuser->email = $faker->email();
            $newuser->password = bcrypt('gruppo7');
            // $newuser->role = 'owner';
            $newuser->save();
        }

        // $newuser = new User();
        // $newuser->name = $faker->firstName();
        // $newuser->email = 'admin@admin.com';
        // $newuser->password = bcrypt('carlo');
        // $newuser->role = 'admin';
        // $newuser->save();


        DB::statement("SET foreign_key_checks = 1;");
    }
}
