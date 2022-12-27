<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
        	'name' => 'Full-Time',
            
            'icon_id'=>2,
        ]);
        DB::table('types')->insert([
        	'name' => 'Part-Time',
            
            'icon_id'=>2,
        ]);
        DB::table('types')->insert([
        	'name' => 'Freelance',
            
            'icon_id'=>2,
        ]);
    }
}
