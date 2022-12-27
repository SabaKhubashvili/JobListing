<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Location;
use App\Models\Language;
use App\Models\Type;
use App\Models\TagIcon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JobsController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth')->only(['create']);
    }
    public function index()
    {
        $jobs = Job::all();

        
        return view('jobs', compact(['jobs']));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $error = null;
        $locations = Location::get();
        $languages = Language::get();
        $types = Type::get();

        return view('post_job', compact(['locations','languages','types','error']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if($request->salary < 100){
            $error = 'Please Enter Valid Salary';
            return view('post_job', compact(['locations','languages','types','error']));
        }

        $job = new Job;

        $job->title = $request->title;
        $job->description = $request->description;
        $job->responsibility = $request->responsibility;
        $job->qualifications = $request->qualifications;
        $job->benefits = $request->benefits;
        $job->salary = $request->salary;
        $job->company = $request->job_company;
        $job->location_id = $request->location;
        $job->type_id = $request->type;
        $job->language_id = $request->language;

        

        
        if($path = $request->file('path')){
            $name =  $path->GetClientOriginalName();

            $path->move('images/job',$name);
            
            $job->logo_path  = $name;
        }
        $job->save();


        return redirect()->intended('/jobs');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('single_job',compact(['job']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job= Job::findOrFail($id);

        $job->delete();

        return redirect()->intended('/jobs');
    }
}
