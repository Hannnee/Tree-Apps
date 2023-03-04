<?php

namespace Database\Seeders;

use App\Models\Keluarga;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $insert = [];
        $datas  = [
            [
                'nama'          => 'Budi',
                'jenis_kelamin' => 'L',
                'orang_tua'     => null
            ],
            [
                'nama'          => 'Dedi',
                'jenis_kelamin' => 'L',
                'orang_tua'     => 1
            ],
            [
                'nama'          => 'Dodi',
                'jenis_kelamin' => 'L',
                'orang_tua'     => 1
            ],
            [
                'nama'          => 'Dede',
                'jenis_kelamin' => 'L',
                'orang_tua'     => 1
            ],
            [
                'nama'          => 'Dewi',
                'jenis_kelamin' => 'P',
                'orang_tua'     => 1
            ],
            [
                'nama'          => 'Feri',
                'jenis_kelamin' => 'L',
                'orang_tua'     => 2
            ],
            [
                'nama'          => 'Farah',
                'jenis_kelamin' => 'P',
                'orang_tua'     => 2
            ],
            [
                'nama'          => 'Gugus',
                'jenis_kelamin' => 'L',
                'orang_tua'     => 3
            ],
            [
                'nama'          => 'Gandi',
                'jenis_kelamin' => 'L',
                'orang_tua'     => 3
            ],
            [
                'nama'          => 'Hani',
                'jenis_kelamin' => 'P',
                'orang_tua'     => 4
            ],
            [
                'nama'          => 'Hana',
                'jenis_kelamin' => 'P',
                'orang_tua'     => 4
            ],
        ];

        foreach ($datas as $data) {
            $insert[] = [
                'nama'          => $data['nama'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'orang_tua'     => $data['orang_tua'],
                'created_at'    => Carbon::now(),
            ];
        }
        Keluarga::insert($insert);

        User::create([
            'name'  => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(12345678)
        ]);
    }

}
