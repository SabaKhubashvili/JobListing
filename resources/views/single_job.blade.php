@extends('layouts.app')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<style>
    .logo_container #logo_white{
        display: none;
    }
    .logo_container #logo_black{
        display: inline;
    }
    .navbar .navbar-nav .nav-item a{
        color: black;
    }
</style>
@section('header')
    
@endsection

@section('content')
    

  
  <div class=" px-6 md:px-16" style="margin: 250px 0">
    <div class="flex flex-wrap justify-between max-w-6xl mx-auto">
      <!--     Job Post   -->
      <div class="job-post w-full md:w-8/12">
        <div class="job-meta mb-4">
          <span class="text-xs text-gray-500">
            Posted less than a minute ago
          </span>

          <h1 class="job-title text-2xl">
            Senior Mobile Developer for Flutter / Dart
          </h1>

          @foreach ($job->tags as $tag)
              
          
          <i class="{{$tag->icons->icon}}" style="margin-right: 10px"></i><span class="job-type text-white p-1 text-xs mr-4" style="background-color: #00D363; border-radius:5px; ">{{$tag->name}}</span>
            
          @endforeach
        </div>
        
        <!--     
          Admin Controls
          This will be visible for small and extra small devices,
          and invisible for medium devices and above.
        -->
        @if($errors->any())
            <h4>{{$errors->first()}}</h4>
        @endif
        <div class="admin-controls block md:hidden text-sm mb-4 border-t border-b py-2">
          <h5 class="text-gray-700 mb-2">Admin controls</h5>
          <div class="controls mb-2">
            <a href="#" class="border border-2 text-teal-500 hover:text-white rounded border-teal-500 hover:bg-teal-500 p-1 mr-1">View</a>
          <a href="#" class="border border-2 text-teal-500 hover:text-white rounded border-teal-500 hover:bg-teal-500 p-1 mr-1">Edit</a>
          <a href="#" class="border border-2 text-teal-500 hover:text-white rounded border-teal-500 hover:bg-teal-500 p-1">Delete</a>
          </div>
        </div>
        
        <div class="job-description mb-4">
          <h3 class="text-xl">Description</h3>
          <p class="mb-2">
            &#9679 {{$job->description}}
        </p>
        </div>

        <div class="job-responsibility mb-4">
          <h3 class="text-xl">Responsibility</h3>
          <p class="mb-2">
            &#9679 {{$job->responsibility}}
           </p>
        </div>

        <div class="job-qualifications mb-4">
          <h3 class="text-xl">Qualifications</h3>
          <p class="mb-2">
            &#9679 {{$job->qualifications}}
          </p>
        </div>

        <div class="job-benefits mb-4">
          <h3 class="text-xl">Benefits</h3>
          <p class="mb-2">
            &#9679 {{$job->benefits}}
          </p>
        </div>
        
        <a href="#" class=" text-white text-center hover:no-underline block rounded-full py-2 my-5" style="background-color:#00D363;">Apply for this job</a>
      </div> <!-- end job-post -->
      
      <div class="w-full hidden md:block md:w-3/12">
        <div class="employer-info mb-4 text-center ">
          <img class="h-40 w-40 inline-block" src="{{asset($job->logo_path)}}" alt="">
          <a href="#" class="text-sm hover:no-underline "><h3 class="employer-name text-center" style="margin-top: 20px;color:black;">{{$job->company }}</h3></a>
        </div>
        
        <a href="#" class="hover:no-underline text-white text-center block rounded-full py-2 mb-4" style="background-color:#00D363;">Apply for this job</a>
        
        <div class="admin-controls text-center text-sm">
          <h5 class="text-gray-700 mb-2">Admin controls</h5>
          <div class="controls">
          <a href="#" class="border border-2 text-teal-500 hover:text-white rounded border-teal-500 hover:bg-teal-500 p-1 mr-1">View</a>
          <a href="#" class="border border-2 text-teal-500 hover:text-white rounded border-teal-500 hover:bg-teal-500 p-1 mr-1">Edit</a>

          {!! Form::model($job,['route'=>['jobs.destroy',$job->id], 'method'=>'DELETE']) !!}

            {!! Form::submit('Delete',['class'=>'border border-2 text-teal-500 hover:text-white rounded border-teal-500 hover:bg-teal-500 p-1']) !!}
          
            {!! Form::close() !!}
        </div>
        </div>
      </div> <!-- end w-3/12 -->
    </div>
</div>

@endsection

@section('footer')
    
@endsection
