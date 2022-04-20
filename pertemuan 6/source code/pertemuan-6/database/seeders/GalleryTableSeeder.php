<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            "name" => "Gambar PHP",
            "description" => "Ini merupakan Gambar PHP",
            "url" => "https://www.php.net"
        ]);
        DB::table('galleries')->insert([
            "name" => "Gambar Boostrap",
            "description" => "Ini merupakan Gambar Boostrap",
            "url" => "https://www.getboostrap.com"
        ]);
        DB::table('galleries')->insert([
            "name" => "Gambar Javascript",
            "description" => "Ini merupakan Gambar Javascript",
            "url" => "https://www.javascript.com"
        ]);
    }
}
