<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class languageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
        	'name' => 'PHP',
            
            'icon_id'=>3,
        ]);
        DB::table('languages')->insert([
        	'name' => 'Laravel',
            
            'icon_id'=>3,
        ]);
        DB::table('languages')->insert([
        	'name' => 'Javascript',
            
            'icon_id'=>3,
        ]);
        DB::table('languages')->insert([
        	'name' => 'React',
            
            'icon_id'=>3,
        ]);
        DB::table('languages')->insert([
        	'name' => 'Vue',
            
            'icon_id'=>3,
        ]);
        DB::table('languages')->insert([
        	'name' => 'Python',
            
            'icon_id'=>3,
        ]);
        DB::table('languages')->insert([
        	'name' => 'C#',
            
            'icon_id'=>3,
        ]);
        DB::table('languages')->insert([
        	'name' => 'C++',
            
            'icon_id'=>3,
        ]);
    }
}
