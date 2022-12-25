<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_icons')->insert([
        	'icon' => 'fa-solid fa-location-dot',
        ]);
        DB::table('tag_icons')->insert([
        	'icon' => 'fa-regular fa-clock',
        ]);
        DB::table('tag_icons')->insert([
        	'icon' => 'fa-solid fa-code',
        ]);
    }
}
