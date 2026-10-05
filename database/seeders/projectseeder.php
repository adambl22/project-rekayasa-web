<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class projectseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = [
            [
                'title' => 'sistem informasiakademik',
                'description' => 'aplikasi berbasis web untuk pengelolaan data mehasiswa, jadwal kuliah dan nilai perkuliahan',
                'teknologi' => 'laravel & bootstrap',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],[
                'title' => 'e-commers seo optimalation',
                'description' => 'aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'php & google search console',
                'image' => 'project2.jpg',
                'status' => 'in progres',
            ],[
                'title' => 'redesain cover dan brending',
                'description' => 'perancangan element grafis personal branding dan desain sampul buku rekayasa web',
                'teknologi' => 'figma & canva',
                'image' => 'project3.jpg',
                'status' => 'selesai',
            ],[
                'title' => 'sample 4',
                'description' => 'aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'php & google search console',
                'image' => 'project4.jpg',
                'status' => 'in progres',
            ],[
                'title' => 'sample 5',
                'description' => 'aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'php & google search console',
                'image' => 'project5.jpg',
                'status' => 'in progres',
            ],[
                'title' => 'sample 6',
                'description' => 'aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'php & google search console',
                'image' => 'project6.jpg',
                'status' => 'in progres',
            ],[
                'title' => 'sample 7',
                'description' => 'aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'php & google search console',
                'image' => 'project7.jpg',
                'status' => 'in progres',
            ],[
                'title' => 'sample 8',
                'description' => 'aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'php & google search console',
                'image' => 'project8.jpg',
                'status' => 'in progres',
            ]
        ];

        foreach ($projects as $project) {
            project::create($project);
        }

    }
}
