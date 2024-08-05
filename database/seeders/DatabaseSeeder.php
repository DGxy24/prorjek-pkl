<?php

namespace Database\Seeders;

use App\Models\Bagian;
use App\Models\permasalahan;
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
        'nama_bagian' => 'TU & KEU'
       ]);
       Bagian::create([
        'nama_bagian' => 'Kepegawaian'
       ]);


       //Menambah data permasalahan
       permasalahan::create([
        'jenis_masalah' => 'Permasalahan Jaringan'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Permasalahan SIPP'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Permasalahan Ruang Sidang Online'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Permasalahan E-Berpadu'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Permasalahan E-Court'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Permasalahan Pelaporan'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Permasalahan Perkusi'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Permasalahan EIS'
       ]);
       permasalahan::create([
        'jenis_masalah' => 'Permasalahan Sinkronisasi'
       ]);
    }
}
