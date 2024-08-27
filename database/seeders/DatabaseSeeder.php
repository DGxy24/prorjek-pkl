<?php

namespace Database\Seeders;

use App\Models\Bagian;
use App\Models\permasalahan;
use App\Models\status;
use App\Models\tiket;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       
        //Menambah data nama bagian
       Bagian::create([
        'nama_bagian' => 'PHI'
       ]);
       Bagian::create([
        'nama_bagian' => 'Tipikor'
       ]);
       Bagian::create([
        'nama_bagian' => 'Perdata'
       ]);
       Bagian::create([
        'nama_bagian' => 'Pidana'
       ]);
       Bagian::create([
        'nama_bagian' => 'Perikanan'
       ]);
       Bagian::create([
        'nama_bagian' => 'Niaga'
       ]);
       Bagian::create([
        'nama_bagian' => 'Hukum'
       ]);
       Bagian::create([
        'nama_bagian' => 'TU dan KEU'
       ]);
       Bagian::create([
        'nama_bagian' => 'Kepegawaian'
       ]);


       //Menambah data permasalahan
       permasalahan::create([
        'jenis_masalah' => 'Jaringan'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'SIPP'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Ruang Sidang Online'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'E-Berpadu'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'E-Court'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Pelaporan'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Perkusi'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'EIS'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Sinkronisasi'
       ]);


        //Membuat akun Admin default
        User::create([
            'name'=>'Admin',
            'username' => 'admin',
            'bagian_id'=> '2',
            'email' => 'admin@admin.com',
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
            'level' => 1
        ]);
            //membuat akun user Default
        User::create([
            'name'=>'Doly Boan Tua Gurning',
            'username' => 'user',
            'bagian_id'=> '2',
            'email' => 'user@user.com',
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
            'level' => 0
        ]);
        
        tiket::create([
            'user_id' => '2',
            'bagian_id' => '2',
            'permasalahan_id' => '2',
            'penjelasan' => 'Tes',
            'tindakan' => 'Tes',
        ]);
        tiket::create([
            'user_id' => '2',
            'bagian_id' => '2',
            'permasalahan_id' => '1',
            'penjelasan' => 'Tes',
            'tindakan' => 'Tes',
        ]);    tiket::create([
            'user_id' => '2',
            'bagian_id' => '2',
            'permasalahan_id' => '3',
            'penjelasan' => 'satu',
            'tindakan' => 'dua',
        ]);    tiket::create([
            'user_id' => '2',
            'bagian_id' => '2',
            'permasalahan_id' => '4',
            'penjelasan' => 'tiga',
            'tindakan' => 'tiga',
        ]);
        tiket::create([
            'user_id' => '2',
            'bagian_id' => '3',
            'permasalahan_id' => '8',
            'penjelasan' => 'empat',
            'tindakan' => 'empat',
        ]);
   
        //Untuk tiket, Proses ada 4 
        //Proses 0 = baru dikirim, Proses 1 = Tiket di tolak, Proses 2 = Tiket Diterima
        // Proses 3 = Tiket selesai

        // Untuk Status ada 3
        //Status 0 = Default,baru dibuat, Status 1 = Tiket sudah selesai, Status 2 = Tiket belum selesi dari user
    }
}
