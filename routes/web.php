<?php

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\IndexController@main')->name('main');

Auth::routes();


Route::resource('/jobs','App\Http\Controllers\JobsController');

Route::get('/contact',function(){  
    return view('contact');

});

Route::get('/jobs/filter/',function($location,$type,$language){


    $location = $_GET['location'];
    $type = $_GET['type'];
    $language = $_GET['language'];

    $location_tag =  Tag::find($location)->id;

    $tags = Tag::all();

   
    $tags = Tag::findMany([$location, $type, $language]);

    foreach($tags->jobs as $job){

        dd($job);

    }




    
     
    // return view('jobs',compact(['jobs']));
 
})->name('filter');