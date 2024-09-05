<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Category;
use App\Models\Level;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Level::create([
            'nama_level' => 'admin'
        ]);
        Level::create([
            'nama_level' => 'user'
        ]);

        Categorie::create([
            'nama_categorie' => 'best'
        ]);
        Categorie::create([
            'nama_categorie' => 'paket'
        ]);
        Categorie::create([
            'nama_categorie' => 'seprai'
        ]);
        Categorie::create([
            'nama_categorie' => 'anak'
        ]);
        Categorie::create([
            'nama_categorie' => 'kasur'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'alamat' => 'Tasikmalaya',
            'nohp' => '084523134784',
            'levels_id' => 1
        ]);

        User::create([
            'name' => 'ipa',
            'email' => 'ipa@gmail.com',
            'password' => bcrypt('ipa123'),
            'alamat' => 'Tasikmalaya',
            'nohp' => '089768564234',
            'levels_id' => 2
            
        ]);
        User::create([
            'name' => 'rivana',
            'email' => 'rivana@gmail.com',
            'password' => bcrypt('rivana123'),
            'alamat' => 'Salawu',
            'nohp' => '083194541571',
            'levels_id' => 2
        ]);

        Produk::create([
            'nama' => 'seblak',
            'categories_id' => 2,
            'jumlah' => '3',
            'harga' => 10000,
            'gambar' => ''
        ]);


    }
}
