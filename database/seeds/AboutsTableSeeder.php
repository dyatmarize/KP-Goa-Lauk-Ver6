<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'judul'          => 'Some Words About Us',
            'deskripsi'      => 'Goa Lauk kaya akan ornamen. Menurut cerita penduduk, 
                                dahulunya di goa ini terdapat banyak ikan, sehingga 
                                masyarakat menyebutnya goa ini dengan Goa Lauk',
        ]);
    }
}
