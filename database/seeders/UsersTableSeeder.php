<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'admin',
            'lastname'  => 'admin',
            'username'  => 'admin',
            'phone'     => '0900000000',
            'email'     => 'admin@admin.com',
            'role'      => 'admin',
            'password' => Hash::make('password'),
            'isApproved'=> 1,
        ]);
        DB::table('users')->insert([
            'firstname' => 'client',
            'lastname'  => 'client',
            'username'  => 'client',
            'phone'     => '0910000000',
            'email'     => 'client@mail.com',
            'role'      => 'client',
            'password' => Hash::make('password'),
            'isApproved'=> 1,
        ]);
        DB::table('users')->insert([
            'firstname' => 'Leader',
            'lastname'  => 'Leader',
            'username'  => 'Leader',
            'phone'     => '0911000000',
            'email'     => 'Leader@mail.com',
            'role'      => 'Leader',
            'password' => Hash::make('password'),
            'isApproved'=> 1,
        ]);
        DB::table('users')->insert([
            'firstname' => 'Driver',
            'lastname'  => 'Driver',
            'username'  => 'Driver',
            'phone'     => '0912000000',
            'email'     => 'Driver@mail.com',
            'role'      => 'driver',
            'password' => Hash::make('password'),
            'isApproved'=> 1,
        ]);
        DB::table('users')->insert([
            'firstname' => 'maintenancehead',
            'lastname'  => 'maintenanceHead',
            'username'  => 'maintenancehead',
            'phone'     => '0913000000',
            'email'     => 'maintenanceHead@mail.com',
            'role'      => 'maintenanceHead',
            'password' => Hash::make('password'),
            'isApproved'=> 1,
        ]);
        DB::table('users')->insert([
            'firstname' => 'Alemayehu',
            'lastname'  => 'Wedaj',
            'username'  => 'Alemayehu',
            'phone'     => '0914000000',
            'email'     => 'Alemayehu@mail.com',
            'role'      => 'driver',
            'password' => Hash::make('password'),
            'isApproved'=> 1,
        ]);
        DB::table('users')->insert([
            'firstname' => 'Tariku',
            'lastname'  => 'T/tsadik',
            'username'  => 'Tariku',
            'phone'     => '0915000000',
            'email'     => 'tariku@mail.com',
            'role'      => 'driver',
            'password' => Hash::make('password'),
            'isApproved'=> 1,
        ]);
        
    }
}
