<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'full_name' => 'pradipta Admin',
                'username' => 'adminUser',
                'email' => 'admin@mail.com',
                'password' => Hash::make('12345'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'full_name' => 'pradipta Vendor',
                'username' => 'VendorUser',
                'email' => 'vendor@mail.com',
                'password' => Hash::make('123456'),
                'role' => 'vendor',
                'status' => 'active',
            ],
            [
                'full_name' => 'pradipta Customer',
                'username' => 'customerUser',
                'email' => 'customer@mail.com',
                'password' => Hash::make('1234567'),
                'role' => 'customer',
                'status' => 'active',
            ]
            ]);
    }
}
