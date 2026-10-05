<?php

namespace Database\Seeders;

use App\Models\mahasiswa;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mahasiswas = [
            [
                'nim'=>'1234567',
                'nama'=>'adam',
                'prodi'=>'sistem informasi',
                'kampus'=>'universitas pamulang',
                'email'=>'adamburhan4@gmail.com',
                'status'=>'aktif',
            ],
        ];
        foreach ($mahasiswas as $mahasiswa){
            mahasiswa::create($mahasiswa);
        }
    }
}
