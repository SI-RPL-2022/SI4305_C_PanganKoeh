<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'no' => '123',
                'alamat' => 'admin',
                'role' => 'ADM',
                'password' => bcrypt('123'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\User::insert([
            [
                'name' => 'Barajati Syakurnia',
                'email' => 'barajatisyakurnia@gmail.com',
                'no' => '1233',
                'alamat' => 'user',
                'role' => 'USER',
                'password' => bcrypt('user123'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
