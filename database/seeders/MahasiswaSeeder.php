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
        $data=[[
            'Nim'=>'2141720121',
            'Nama'=>'Yofandra',
            'Kelas'=>'2G',
            'Jurusan'=>'Teknologi Informasi',
            'No_Handphone'=>'082140950530'
        ],
        [
            'Nim'=>'2141720122',
            'Nama'=>'Momo',
            'Kelas'=>'2G',
            'Jurusan'=>'Teknologi Informasi',
            'No_Handphone'=>'082140950092'
        ],
        [
            'Nim'=>'2141720123',
            'Nama'=>'Hye In',
            'Kelas'=>'2G',
            'Jurusan'=>'Teknologi Informasi',
            'No_Handphone'=>'082140950912'
        ]
        ];
        DB::table('mahasiswa')->insert($data);
    }
}
