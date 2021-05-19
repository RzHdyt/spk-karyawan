<?php

use App\Penilaian;
use Illuminate\Database\Seeder;

class PenilaianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penilaians = [
            // karyawan 1
            [
                'nilai' => 76,
                'nilai_inisial' => 4,
                'karyawan_id' => 1,
                'kriteria_id' => 1,
            ],
            [
                'nilai' => 18,
                'nilai_inisial' => 3,
                'karyawan_id' => 1,
                'kriteria_id' => 2,
            ],
            [
                'nilai' => 9,
                'nilai_inisial' => 3,
                'karyawan_id' => 1,
                'kriteria_id' => 3,
            ],
            [
                'nilai' => 10,
                'nilai_inisial' => 5,
                'karyawan_id' => 1,
                'kriteria_id' => 4,
            ],
            [
                'nilai' => 23,
                'nilai_inisial' => 5,
                'karyawan_id' => 1,
                'kriteria_id' => 5,
            ],

            // karyawan 2
            [
                'nilai' => 88,
                'nilai_inisial' => 5,
                'karyawan_id' => 2,
                'kriteria_id' => 1,
            ],
            [
                'nilai' => 21,
                'nilai_inisial' => 4,
                'karyawan_id' => 2,
                'kriteria_id' => 2,
            ],
            [
                'nilai' => 11,
                'nilai_inisial' => 3,
                'karyawan_id' => 2,
                'kriteria_id' => 3,
            ],
            [
                'nilai' => 7,
                'nilai_inisial' => 4,
                'karyawan_id' => 2,
                'kriteria_id' => 4,
            ],
            [
                'nilai' => 29,
                'nilai_inisial' => 5,
                'karyawan_id' => 2,
                'kriteria_id' => 5,
            ],

            // karyawan 3
            [
                'nilai' => 54,
                'nilai_inisial' => 3,
                'karyawan_id' => 3,
                'kriteria_id' => 1,
            ],
            [
                'nilai' => 27,
                'nilai_inisial' => 5,
                'karyawan_id' => 3,
                'kriteria_id' => 2,
            ],
            [
                'nilai' => 10,
                'nilai_inisial' => 3,
                'karyawan_id' => 3,
                'kriteria_id' => 3,
            ],
            [
                'nilai' => 8,
                'nilai_inisial' => 5,
                'karyawan_id' => 3,
                'kriteria_id' => 4,
            ],
            [
                'nilai' => 12,
                'nilai_inisial' => 2,
                'karyawan_id' => 3,
                'kriteria_id' => 5,
            ],

            // karyawan 4
            [
                'nilai' => 91,
                'nilai_inisial' => 5,
                'karyawan_id' => 4,
                'kriteria_id' => 1,
            ],
            [
                'nilai' => 14,
                'nilai_inisial' => 3,
                'karyawan_id' => 4,
                'kriteria_id' => 2,
            ],
            [
                'nilai' => 14,
                'nilai_inisial' => 4,
                'karyawan_id' => 4,
                'kriteria_id' => 3,
            ],
            [
                'nilai' => 7,
                'nilai_inisial' => 4,
                'karyawan_id' => 4,
                'kriteria_id' => 4,
            ],
            [
                'nilai' => 17,
                'nilai_inisial' => 4,
                'karyawan_id' => 4,
                'kriteria_id' => 5,
            ],

            // karyawan 5
            [
                'nilai' => 75,
                'nilai_inisial' => 4,
                'karyawan_id' => 5,
                'kriteria_id' => 1,
            ],
            [
                'nilai' => 28,
                'nilai_inisial' => 5,
                'karyawan_id' => 5,
                'kriteria_id' => 2,
            ],
            [
                'nilai' => 15,
                'nilai_inisial' => 4,
                'karyawan_id' => 5,
                'kriteria_id' => 3,
            ],
            [
                'nilai' => 9,
                'nilai_inisial' => 5,
                'karyawan_id' => 5,
                'kriteria_id' => 4,
            ],
            [
                'nilai' => 13,
                'nilai_inisial' => 3,
                'karyawan_id' => 5,
                'kriteria_id' => 5,
            ],

        ];
        foreach ($penilaians as $penilaian) {
            Penilaian::create($penilaian);
        }
    }
}
