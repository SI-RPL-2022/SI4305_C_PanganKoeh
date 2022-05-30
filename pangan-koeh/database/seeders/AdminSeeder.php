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

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '10',
                'harga' => '12350',
                'tanggal' => '2022-04-01',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '10',
                'harga' => '12350',
                'tanggal' => '2022-04-04',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '10',
                'harga' => '12350',
                'tanggal' => '2022-04-05',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '10',
                'harga' => '12350',
                'tanggal' => '2022-04-06',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '10',
                'harga' => '12350',
                'tanggal' => '2022-04-07',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '10',
                'harga' => '12350',
                'tanggal' => '2022-04-08',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '10',
                'harga' => '12350',
                'tanggal' => '2022-04-11',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '10',
                'harga' => '12350',
                'tanggal' => '2022-04-12',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '10',
                'harga' => '12350',
                'tanggal' => '2022-04-13',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '10',
                'harga' => '12350',
                'tanggal' => '2022-04-14',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '5',
                'harga' => '39500',
                'tanggal' => '2022-04-01',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '5',
                'harga' => '41000',
                'tanggal' => '2022-04-04',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '5',
                'harga' => '41000',
                'tanggal' => '2022-04-05',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '5',
                'harga' => '40000',
                'tanggal' => '2022-04-06',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '5',
                'harga' => '39500',
                'tanggal' => '2022-04-07',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '5',
                'harga' => '39500',
                'tanggal' => '2022-04-08',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '5',
                'harga' => '38500',
                'tanggal' => '2022-04-11',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '5',
                'harga' => '38000',
                'tanggal' => '2022-04-12',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '5',
                'harga' => '38000',
                'tanggal' => '2022-04-13',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '5',
                'harga' => '38000',
                'tanggal' => '2022-04-14',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '6',
                'harga' => '155000',
                'tanggal' => '2022-04-01',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '6',
                'harga' => '155000',
                'tanggal' => '2022-04-04',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '6',
                'harga' => '155000',
                'tanggal' => '2022-04-05',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '6',
                'harga' => '155000',
                'tanggal' => '2022-04-06',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '6',
                'harga' => '155000',
                'tanggal' => '2022-04-07',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '6',
                'harga' => '155000',
                'tanggal' => '2022-04-08',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '6',
                'harga' => '155000',
                'tanggal' => '2022-04-11',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '6',
                'harga' => '155000',
                'tanggal' => '2022-04-12',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '6',
                'harga' => '155000',
                'tanggal' => '2022-04-13',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '6',
                'harga' => '155000',
                'tanggal' => '2022-04-14',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '9',
                'harga' => '25750',
                'tanggal' => '2022-04-01',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '9',
                'harga' => '26500',
                'tanggal' => '2022-04-04',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '9',
                'harga' => '26000',
                'tanggal' => '2022-04-05',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '9',
                'harga' => '26000',
                'tanggal' => '2022-04-06',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '9',
                'harga' => '26000',
                'tanggal' => '2022-04-07',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '9',
                'harga' => '26000',
                'tanggal' => '2022-04-08',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '9',
                'harga' => '26000',
                'tanggal' => '2022-04-11',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '9',
                'harga' => '26000',
                'tanggal' => '2022-04-12',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '9',
                'harga' => '25750',
                'tanggal' => '2022-04-13',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '9',
                'harga' => '25750',
                'tanggal' => '2022-04-14',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '1',
                'harga' => '37500',
                'tanggal' => '2022-04-01',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '1',
                'harga' => '37500',
                'tanggal' => '2022-04-04',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '1',
                'harga' => '40000',
                'tanggal' => '2022-04-05',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '1',
                'harga' => '41500',
                'tanggal' => '2022-04-06',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '1',
                'harga' => '41500',
                'tanggal' => '2022-04-07',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '1',
                'harga' => '41500',
                'tanggal' => '2022-04-08',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '1',
                'harga' => '40000',
                'tanggal' => '2022-04-11',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '1',
                'harga' => '40000',
                'tanggal' => '2022-04-12',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '1',
                'harga' => '40000',
                'tanggal' => '2022-04-13',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '1',
                'harga' => '40000',
                'tanggal' => '2022-04-14',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '2',
                'harga' => '33500',
                'tanggal' => '2022-04-01',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '2',
                'harga' => '33500',
                'tanggal' => '2022-04-04',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '2',
                'harga' => '33500',
                'tanggal' => '2022-04-05',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '2',
                'harga' => '33500',
                'tanggal' => '2022-04-06',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '2',
                'harga' => '33500',
                'tanggal' => '2022-04-07',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '2',
                'harga' => '33500',
                'tanggal' => '2022-04-08',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '2',
                'harga' => '33500',
                'tanggal' => '2022-04-11',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '2',
                'harga' => '33500',
                'tanggal' => '2022-04-12',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '2',
                'harga' => '33500',
                'tanggal' => '2022-04-13',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '2',
                'harga' => '33500',
                'tanggal' => '2022-04-14',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '3',
                'harga' => '65000',
                'tanggal' => '2022-04-01',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '3',
                'harga' => '70000',
                'tanggal' => '2022-04-04',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '3',
                'harga' => '70000',
                'tanggal' => '2022-04-05',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '3',
                'harga' => '70000',
                'tanggal' => '2022-04-06',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '3',
                'harga' => '70000',
                'tanggal' => '2022-04-07',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);

        \App\Models\Price::insert([
            [
                'id_pasar' => '1',
                'id_komoditas' => '3',
                'harga' => '70000',
                'tanggal' => '2022-04-08',
                'kontributor' => 'Cindy',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
