<?php

use App\Karyawan;
use Illuminate\Database\Seeder;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawans = [
            [
                'nik' => 'KAR 001',
                'name' => 'Mandra Asolole',
                'gender' => 'Laki - Laki',
                'address' => 'Testing',
                'phone_number' => '123456',
                'birthday' => '1996-10-28',
                'religion' => 'Islam',
                'status' => 'Karyawan Kontrak',
                'dateIn' => '2017-07-15',
                'dateOut' => null,
            ],
            [
                'nik' => 'KAR 002',
                'name' => 'Maymunah',
                'gender' => 'Perumpuan',
                'address' => 'Testing',
                'phone_number' => '123456',
                'birthday' => '1999-11-22',
                'religion' => 'Islam',
                'status' => 'Karyawan Kontrak',
                'dateIn' => '2018-11-15',
                'dateOut' => null,
            ],
            [
                'nik' => 'KAR 003',
                'name' => 'Sabeni',
                'gender' => 'Laki - Laki',
                'address' => 'Testing',
                'phone_number' => '123456',
                'birthday' => '1998-10-28',
                'religion' => 'Islam',
                'status' => 'Karyawan Kontrak',
                'dateIn' => '2013-07-15',
                'dateOut' => null,
            ],
            [
                'nik' => 'KAR 004',
                'name' => 'Jali',
                'gender' => 'Laki - Laki',
                'address' => 'Testing',
                'phone_number' => '123456',
                'birthday' => '2000-10-28',
                'religion' => 'Islam',
                'status' => 'Karyawan Kontrak',
                'dateIn' => '2016-07-15',
                'dateOut' => null,
            ],
            [
                'nik' => 'KAR 005',
                'name' => 'Mumun',
                'gender' => 'Laki - Laki',
                'address' => 'Testing',
                'phone_number' => '123456',
                'birthday' => '1999-01-10',
                'religion' => 'Islam',
                'status' => 'Karyawan Kontrak',
                'dateIn' => '2017-07-15',
                'dateOut' => null,
            ],
        ];

        foreach($karyawans as $karyawan){
            Karyawan::create($karyawan);
        }
    }
}
