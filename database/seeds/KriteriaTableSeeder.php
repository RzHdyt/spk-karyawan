<?php

use App\Kriteria;
use Illuminate\Database\Seeder;

class KriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kriterias = [
            [
                'name' => 'Kehadiran',
                'weight' => 25,
            ],
            [
                'name' => 'Kedisiplinan',
                'weight' => 25,
            ],
            [
                'name' => 'Kerjasama',
                'weight' => 20,
            ],
            [
                'name' => 'Kreativitas',
                'weight' => 15,
            ],
            [
                'name' => 'Sikap',
                'weight' => 15,
            ],
        ];

        foreach ($kriterias as $kriteria) {
            Kriteria::create($kriteria);
        }
    }
}
