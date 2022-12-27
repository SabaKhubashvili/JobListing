<?php

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
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

Route::get('/jobs/filter/{location}/{language}/{type}',function(){
    $location = $_GET['location'];
    $type = $_GET['type'];
    $language = $_GET['language'];
    $salaryOne = $_GET['rangeOne'];
    $salaryTwo = $_GET['rangeTwo'];

    

    $selected = $location;

    $jobs = Job::whereLocationId($location)->whereTypeId($type)->whereLanguageId($language)->where('salary', '>' , $salaryOne)->where('salary', '<', $salaryTwo)->get();

    
     
    return view('jobs',compact(['jobs','selected']));
 
})->name('filter');

Route::get('job/filter/{language}', function($language){


    $jobs = Job::whereLanguageId($language)->get();

    return view('jobs',compact(['jobs']));



})->name('LanguageFilter');

Route::get('job/filter', function(){



})->name('recent.filter');