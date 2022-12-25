<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  
    public function main(){
        $recent_jobs = Job::latest()->take(4)->get();

        return view('index',compact(['recent_jobs']));
    }
}
