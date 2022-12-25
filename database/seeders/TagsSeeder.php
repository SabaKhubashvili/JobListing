<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class tagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
        	'name' => 'PHP',
            'is_language'=>1,
            'icon_id'=>3,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Laravel',
            'is_language'=>1,
            'icon_id'=>3,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Javascript',
            'is_language'=>1,
            'icon_id'=>3,
        ]);
        DB::table('tags')->insert([
        	'name' => 'React',
            'is_language'=>1,
            'icon_id'=>3,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Vue',
            'is_language'=>1,
            'icon_id'=>3,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Python',
            'is_language'=>1,
            'icon_id'=>3,
        ]);
        DB::table('tags')->insert([
        	'name' => 'C#',
            'is_language'=>1,
            'icon_id'=>3,
        ]);
        DB::table('tags')->insert([
        	'name' => 'C++',
            'is_language'=>1,
            'icon_id'=>3,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Tbilisi',
            'is_location'=>1,
            'icon_id'=>1,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Batumi',
            'is_location'=>1,
            'icon_id'=>1,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Qutaisi',
            'is_location'=>1,
            'icon_id'=>1,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Dusheti',
            'is_location'=>1,
            'icon_id'=>1,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Sachxere',
            'is_location'=>1,
            'icon_id'=>1,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Full-Time',
            'is_type'=>1,
            'icon_id'=>2,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Part-Time',
            'is_type'=>1,
            'icon_id'=>2,
        ]);
        DB::table('tags')->insert([
        	'name' => 'Freelance',
            'is_type'=>1,
            'icon_id'=>2,
        ]);
    }
}
