<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mahasiswa_MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nilai = [
            [
                'mahasiswa_id' => 2141720121,
                'matakuliah_id' => 1,
                'nilai' => 92,
            ],
            [
                'mahasiswa_id' => 2141720121,
                'matakuliah_id' => 2,
                'nilai' => 93,
            ],
            [
                'mahasiswa_id' => 2141720121,
                'matakuliah_id' => 3,
                'nilai' => 94,
            ],
            [
                'mahasiswa_id' => 2141720121,
                'matakuliah_id' => 4,
                'nilai' => 90,
            ],
        ];
        DB::table('mahasiswa_matakuliah2')->insert($nilai);
    }
}
