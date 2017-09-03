<?php

use Illuminate\Database\Seeder;

class bella extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users_pengajuan_barang')->insert([
            'nama' => 'bella',
            'nik' => '12345678910',
            'email' => 'bella@gmail.com',
            'no_hp' => '08976543212',
            'bagian' => 'input data',
            'jabatan' => 'tata usaha',
            'password' => encrypt('bella'),
            'img_url' => 'users.png',
        ]);

        DB::table('users_pengajuan_barang')->insert([
            'nama' => 'stevani',
            'nik' => '12345678911',
            'email' => 'stevani@gmail.com',
            'no_hp' => '087232123213',
            'bagian' => 'input data',
            'jabatan' => 'tata usaha',
            'password' => encrypt('stevani'),
            'img_url' => 'users.png',
        ]);

        DB::table('users_pengajuan_barang')->insert([
            'nama' => 'alexandra',
            'nik' => '12345678912',
            'email' => 'alexandra@gmail.com',
            'no_hp' => '08765625351625',
            'bagian' => 'kepala cabang',
            'jabatan' => 'kepala cabang',
            'password' => encrypt('alexandra'),
            'img_url' => 'users.png',
        ]);

        DB::table('users_pengajuan_barang')->insert([
            'nama' => 'theresa',
            'nik' => '12345678913',
            'email' => 'theresa@gmail.com',
            'no_hp' => '0897233313124',
            'bagian' => 'kepala cabang',
            'jabatan' => 'kepala cabang',
            'password' => encrypt('alexandra'),
            'img_url' => 'users.png',
        ]);

        DB::table('users_pengajuan_barang')->insert([
            'nama' => 'bianca',
            'nik' => '12345678914',
            'email' => 'bianca@gmail.com',
            'no_hp' => '0812222132432',
            'bagian' => 'cek data',
            'jabatan' => 'koordinasi lapangan',
            'password' => encrypt('bianca'),
            'img_url' => 'users.png',
        ]);

        DB::table('users_pengajuan_barang')->insert([
            'nama' => 'florencia',
            'nik' => '12345678915',
            'email' => 'florencia@gmail.com',
            'no_hp' => '088726355261',
            'bagian' => 'cek data',
            'jabatan' => 'koordinasi lapangan',
            'password' => encrypt('florencia'),
            'img_url' => 'users.png',
        ]);

        DB::table('users_pengajuan_barang')->insert([
            'nama' => 'chintia',
            'nik' => '12345678916',
            'email' => 'chintia@gmail.com',
            'no_hp' => '0627361526348',
            'bagian' => 'rekap data',
            'jabatan' => 'gudang',
            'password' => encrypt('chintia'),
            'img_url' => 'users.png',
        ]);

        DB::table('users_pengajuan_barang')->insert([
            'nama' => 'yuanita',
            'nik' => '12345678917',
            'email' => 'yuanita@gmail.com',
            'no_hp' => '0332345432123',
            'bagian' => 'rekap data',
            'jabatan' => 'gudang',
            'password' => encrypt('yuanita'),
            'img_url' => 'users.png',
        ]);
    }
}
