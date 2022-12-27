<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('locations')->insert([
        	'name' => 'Tbilisi',
            
            'icon_id'=>1,
        ]);
        DB::table('locations')->insert([
        	'name' => 'Batumi',
            
            'icon_id'=>1,
        ]);
        DB::table('locations')->insert([
        	'name' => 'Qutaisi',
            
            'icon_id'=>1,
        ]);
        DB::table('locations')->insert([
        	'name' => 'Dusheti',
            
            'icon_id'=>1,
        ]);
        DB::table('locations')->insert([
        	'name' => 'Sachxere',
            
            'icon_id'=>1,
        ]);
    }
}
