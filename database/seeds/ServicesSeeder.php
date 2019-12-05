<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'icon' => "icon-style",
                'title' => "Fast Cleaning",
                'content' => "Membersihkan bagian terluar dari tas saja"
            ]
        ]);
        DB::table('services')->insert([
            [
                'icon' => "icon-style",
                'title' => "Deep Cleaning",
                'content' => "Membersihkan semua bagian tas, termasuk penghilangan noda tertentu yang sulit dihilangkan."
            ]
        ]);
        DB::table('services')->insert([
            [
                'icon' => "icon-style",
                'title' => "Repair",
                'content' => "Memperbaiki tas anda yang rusak"
            ]
        ]);
        DB::table('services')->insert([
            [
                'icon' => "icon-style",
                'title' => "Repaint",
                'content' => "Memperkuat warna yang pudar atau bahkan perwarnaan ulang"
            ]
        ]);
    }
}
