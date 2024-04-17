<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'nama'      => 'Keputusan Wali Kota 12B',
            'link'      => 'ini link pdf',

            'nama'      => 'Keputusan Wali Kota 15B',
            'link'      => 'ini link pdf',
        ]);
    }
}
