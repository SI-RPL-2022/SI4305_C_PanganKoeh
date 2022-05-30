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
        \App\Models\Market::insert([
            [
                'name' => 'Pasar Kosambi',
                'kecamatan' => 'Sumur Bandung',
                'alamat' => 'Jl. A. Yani No.221-223, Kb. Pisang, Kota Bandung, Jawa Barat 40112',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Market::insert([
            [
                'name' => 'Pasar Kiaracondong',
                'kecamatan' => 'Kiaracondong',
                'alamat' => 'Jl. Jend. Ibrahim Adjie, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40281',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Bawang Merah',
                'id_pasar' => '1',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Bawang Merah',
                'id_pasar' => '2',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Bawang Putih',
                'id_pasar' => '1',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Bawang Putih',
                'id_pasar' => '2',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Cabai Merah',
                'id_pasar' => '1',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Cabai Merah',
                'id_pasar' => '2',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Cabai Rawit',
                'id_pasar' => '1',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Cabai Rawit',
                'id_pasar' => '2',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Daging Ayam',
                'id_pasar' => '1',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Daging Ayam',
                'id_pasar' => '2',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Daging Sapi',
                'id_pasar' => '1',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Daging Sapi',
                'id_pasar' => '2',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Gula Pasir',
                'id_pasar' => '1',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Gula Pasir',
                'id_pasar' => '2',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Minyak Goreng',
                'id_pasar' => '1',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Minyak Goreng',
                'id_pasar' => '2',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Telur Ayam',
                'id_pasar' => '1',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Telur Ayam',
                'id_pasar' => '2',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Beras',
                'id_pasar' => '1',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
        \App\Models\Pangan::insert([
            [
                'name' => 'Beras',
                'id_pasar' => '2',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
