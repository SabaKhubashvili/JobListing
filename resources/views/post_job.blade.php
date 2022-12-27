@extends('layouts.app')

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/Style.css')}}">
@section('header')
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
@endsection

@section('content')
  
            <div class="max-w-xl mx-auto full_create my-5 py-5">
              {!! Form::open(['route'=>'jobs.store','method'=>'POST', 'files'=>true]) !!}
                <h1 class="text-2xl mb-2">Post New Job</h1>

                @if($error !== null)
                  <div class="" style="color: red; font-size:20px; margin:10px 0;">{{$error}}</div>
                
                @endif
                
                <div class="job-info border-b-2 py-2 mb-5">
                  <!--    Title      -->
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="jtitle">Title</label>
                    <input class="appearance-none block w-full  text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" required type="text" id="title" name="title" placeholder="Frontend Developer" autofocus>
                  </div>
    
                  <div class="md:flex md:justify-between">
                    <!--      Job Type      -->
                    <div class="w-full md:w-3/12 mb-4 md:mb-0">
                        <label class="block text-gray-700 text-sm mb-2" for="type">
                          Job Type
                        </label>
                        <div class="relative">
                          <select class="block appearance-none w-full  border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500" id="job-type" name="type">
                            @foreach ($types as $type)
                            
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                          </select>
        
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                    </div>
        
                    <!--     Location       -->
                    <div class="w-full md:w-8/12 mb-4 md:mb-0">
                      <label for="location" class="block text-gray-700 text-sm mb-2">Location</label>
                      <select class="block appearance-none w-full  border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500" id="job-type" name="location">
                        @foreach ($locations as $location)

                        <option value="{{$location->id}}">{{$location->name}}</option>                  
                        @endforeach
                      </select>
                    </div>
                  </div> <!-- end group -->

                  <div class="w-full md:w-8/12 mb-4 md:mb-0">
                    <label for="Language" class="block text-gray-700 text-sm mb-2">Language</label>
                    <select class="block appearance-none w-full  border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500" id="language" name="language">
                      @foreach ($languages as $language)

                      <option value="{{$language->id}}">{{$language->name}}</option>

                      @endforeach
                    </select>
                  </div>
                  <!--    Description      -->
                  <div>
                    <label for="description" class="block text-gray-700 text-sm mb-2">Description</label>
                    <textarea name="description" required class="w-100" id="description" cols="" rows=""></textarea>
                  </div>

                  <div>
                    <label for="responsibility" class="block text-gray-700 text-sm mb-2 mt-4">Responsibility</label>
                    <textarea name="responsibility" required class="w-100" id="responsibility" cols="" rows=""></textarea>
                  </div>

                  <div>
                    <label for="qualifications" class="block text-gray-700 text-sm mb-2 mt-4">Qualifications</label>
                    <textarea name="qualifications" required class="w-100" id="qualifications" cols="" rows=""></textarea>
                  </div>


                  <div>
                    <label for="benefits" class="block text-gray-700 text-sm mb-2 mt-4">Benefits</label>
                    <textarea name="benefits" required class="w-100 mb-3" id="benefits" cols="" rows=""></textarea>
                  </div>
                  
                  <div>
                    <label class="block text-gray-700 text-sm mb-2" for="title">Salary</label>
                    <input required class="appearance-none block w-full  text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" type="number" id="job-salary" name="salary" placeholder="Enter Salary" min="1" autofocus>
                  </div>
        
                  <div class="flex flex-wrap -mx-3">
                    <!--     Company       -->
                    <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                      <label for="company" class="block text-gray-700 text-sm mb-2">Company</label>
                      {!! Form::text('job_company',null,['required','class'=>'appearance-none block w-full  text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500', 'placeholder'=>'company']) !!}
                    </div>
        
                    <!--      Company Website      -->
                    <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                      <label for="company" class="block text-gray-700 text-sm mb-2">Company Website (optional)</label>
                      <input type="text" class="appearance-none block w-full  text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" id="company-website" name="company-website" placeholder="https://www.djangoproject.com/">
                    </div>
                  </div> <!-- end group -->
        
                  <!--      Company Website      -->
                  <div class="mb-4 md:mb-0">
                    <label for="company-logo" class="block text-gray-700 text-sm mb-2">Logo Image</label>
                    <input type="file" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-3 mb-3 leading-tight focus:outline-none focus: focus:border-gray-500" id="company-logo" name="path">
                  </div>
                </div> <!-- end job-info -->
                
                <!--     Submit     -->
                <div>
                  <button class=" text-white py-2 px-3 rounded post_job" type="submit">Create job</button>
                </div>
              {!! Form::close() !!}
            </div>
       
@endsection


@section('footer')
    
@endsection