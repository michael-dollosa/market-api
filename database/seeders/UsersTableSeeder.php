<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate all users first
        User::truncate();

        //create users
        User::create([
                'first_name' => 'Test User 1',
                'last_name' => 'Doe',
                'email_address' => 'test1@test.com',
                'mobile_number' => '123456789',
                'address' => 'Test 1 Address',
                'status' => 'Verified',
                'password' => 'test12345'
            ]);
        User::create([
                'first_name' => 'Test User 2',
                'last_name' => 'Doe',
                'email_address' => 'test2@test.com',
                'mobile_number' => '123456789',
                'address' => 'Test 2 Address',
                'status' => 'Verified',
                'password' => 'test12345'
            ]);
        User::create([
                'first_name' => 'Test User 3',
                'last_name' => 'Doe',
                'email_address' => 'test3@test.com',
                'mobile_number' => '123456789',
                'address' => 'Test 3 Address',
                'status' => 'Verified',
                'password' => 'test12345'
            ]);
    }
}
