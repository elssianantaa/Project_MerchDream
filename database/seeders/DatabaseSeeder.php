<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\kategori;
use App\Models\Level;
use App\Models\produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Level::create([
            'nm_level' => 'admin'
        ]);

        Level::create([
            'nm_level' => 'user'
        ]);

        User::create([
            'name' => 'Elsi',
            'email' => 'elssi@gmail.com',
            'levels_id' => 1,
            'password' => bcrypt('1234'),
            'foto' => ''
        ]);

        User::create([
            'name' => 'Sofia',
            'email' => 'sofia@gmail.com',
            'levels_id' => 2,
            'password' => bcrypt('1234'),
            'foto' => ''
        ]);

        kategori::create([
            'nm_kategori' => 'album'
        ]);

        kategori::create([
            'nm_kategori' => 'lightstick'
        ]);

        kategori::create([
            'nm_kategori' => 'photocard'
        ]);

        kategori::create([
            'nm_kategori' => 'poster'
        ]);

        produk::create([
            'produk' => 'NCT DREAM album HOT SAUCE',
            'foto' => '-',
            'desk' => 'READY STOCK ALBUM NCT DREAM ~HOT SAUCE JEWEL VER OFFICIAL',
            'stok' => '20',
            'harga' => '170000',
            'kategoris_id' => 1
        ]);

        produk::create([
            'produk' => 'ENHYPEN OFFICIAL LIGHTSTICK',
            'foto' => '-',
            'desk' => 'READY STOCK ENHYPEN OFFICIAL LIGHTSTICK',
            'stok' => '20',
            'harga' => '800000',
            'kategoris_id' => 2
        ]);

        // User::create([
        //     'name' => 'Silvia',
        //     'email' => 'silvia@gmail.com',
        //     'password' => bcrypt('1234'),
        //     'konfirmasi' => bcrypt('12345')
        // ]);
    }

}
