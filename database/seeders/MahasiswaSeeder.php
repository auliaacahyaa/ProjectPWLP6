<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'Nim'=> '2141720092',
            'Nama'=> 'Aulia Cahya',
            'Kelas'=> '2G',
            'Jurusan'=> 'Teknologi Informasi',
            'No_Handphone'=> '089607900718'
        ]);
    }
}
