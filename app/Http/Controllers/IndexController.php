<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Language;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  
    public function main(){
        $recent_jobs = Job::latest()->take(4)->get();

        $jobs = Job::all();
        
        $languages = Language::all();

        return view('index',compact(['recent_jobs','jobs','languages']));
    }
}
