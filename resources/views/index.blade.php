@extends('layouts.app')
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

@section('header')
@endsection

@section('content')
    

    <body>
      
    <div class="hero">
        <div class="hero__bg">
          <picture>
            <img src="{{asset('images/background/office.jpg')}}">
          </picture>
        </div>
      
        <div class="hero__cnt">
          <i class="fa-solid fa-suitcase"></i>
          <h1>JOBSLIST</h1>
          <p style="font-size: 15px; padding-top:5px; font-weight:300;">Getting job was never this easy</p>
        </div>
      </div>







      <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title my-5 text-center">
                        <h3>Popular Categories</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6 ">
                    <div class="single_catagory">
                        <a href="jobs.html"><img src="{{asset('images/job-logo/php.png')}}" alt="" srcset=""></a>
                        <p> <span>50</span> Available positions</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><img src="{{asset('images/job-logo/Laravel.png')}}" alt="" srcset=""></a>
                        <p> <span>50</span> Available positions</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><img src="{{asset('images/job-logo/javascript.png')}}" alt="" srcset=""></a>
                        <p> <span>50</span> Available positions</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><img src="{{asset('images/job-logo/Python.png')}}" class="small" alt="" srcset=""></a>
                        <p> <span>50</span> Available positions</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><img src="{{asset('images/job-logo/vue.png')}}" alt="" srcset=""></a>
                        <p> <span>50</span> Available positions</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><img src="{{asset('images/job-logo/C1.png')}}" class="small" alt="" srcset=""></a>
                        <p> <span>50</span> Available positions</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><img src="{{asset('images/job-logo/C2.png')}}" class="small" alt="" srcset=""></a>
                        <p> <span>50</span> Available positions</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><img src="{{asset('images/job-logo/React.png')}}" alt="" srcset=""></a>
                        <p> <span>50</span> Available positions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- end featured-section -->

        <div class="vacancies">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="job-headline mt-5 mb-3 d-flex justify-content-between align-items-baseline">
                  <h3>Recent Vacancies</h3>
                  <a href="#" class="text-decoration-none">Browse All Jobs &rarr;</a>
                </div>
                <div class="job-listing-container">
                  <ul class="joblists">
                    @foreach ($recent_jobs as $job)
                        
                    
                    <a href="" class="job-listing text-dark d-flex"> 
                      <div class="job-listing-details d-flex align-items-center flex-wrap">
                        <div class="job-listing-logo mx-3">
                          <img src="{{asset($job->logo_path)}}" alt="PT Phincon" loading="lazy" />
                        </div>
                        <div class="job-listing-desc">
                          <h4 class="job-listing-company text-secondary">
                            {{$job->company}}
                          </h4>
                          <h3 class="job-listing-title">{{$job->title}}</h3>
                          <span class="badge btn-secondary">
                            Salary Undisclosed
                          </span>
                          <span class="badge btn-secondary">
                            Deadline 31 Dec 2021
                          </span>
                          <div class="job-listing-footer">
                            <ul class="job-info d-flex text-secondary mt-2 flex-wrap">
                              <li class="d-flex" style="flex-direction: row">

                                @foreach ($job->tags as $tag)
                                
                                <p class="mr-4"><i class="{{$tag->icons->icon}}" style="margin-right:6px;"></i>{{$tag->name}}</p>
                                
                                @endforeach

                              </li>
                            </ul>
                          </div>
                        </div>
                        <a href="{{route('jobs.show',$job->id)}}" class="btn text-nowrap apply-button">
                          Apply Now
                      </a>
                      </div>
                    </a>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection
      
        @section('footer')
            
        @endsection