@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/Style.css')}}">

@section('header')

@endsection

@section('content')

<div class="bradcam_area bradcam_bg_1" style="background-image: url({{asset('images/background/bradcam.png')}}); background-size:cover; bakcground-repeat:no-repeat; width:100%;height:300px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">        
                <div class="bradcam_text d-flex">
                    <h3 class="">{{count('App\Models\Job'::all())}} Jobs Avaiable</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- job_listing_area_start  -->
<div class="job_listing_area plus_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="job_filter white-bg">
                    <div class="form_inner white-bg">
                        <h3>Filter</h3>

                        {!! Form::open(['route'=>['filter','location','language','type'],'method'=>'GET']) !!}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="location" id="location" name="location">
                                            @foreach ('App\Models\Location'::all() as $tag)
                                            <option value="{{$tag->id}}" <?php if(isset($_GET['location']) ) { if( $_GET['location'] == $tag->id ){ echo 'selected'; }};  ?> >{{$tag->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="language" id="language" name="language">
                                            @foreach ('App\Models\language'::all() as $tag)
                                            {{$tag->id}}
                                            <option value="{{$tag->id}}" <?php if(isset($_GET['language']) ) { if( $_GET['language'] == $tag->id ){ echo 'selected'; }};  ?> >{{$tag->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="type" id="type" name="type">
                                            @foreach ('App\Models\type'::all() as $tag)
                                            <option value="{{$tag->id}}" <?php if(isset($_GET['type']) ) { if( $_GET['type'] == $tag->id ){ echo 'selected'; }};  ?> >{{$tag->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        

                    </div>
                    <div class="range-slider">
                        <span class="output outputOne"></span>
                        <span class="output outputTwo"></span>
                        <span class="full-range"></span>
                        <span class="incl-range"></span>
                        <input name="rangeOne" min="0" value="<?php if(isset($_GET['rangeOne'])) {  echo $_GET['rangeOne'] ; }else { echo '10'; }; ?>" max="5000" step="1" type="range">
                        <input name="rangeTwo" value="<?php if(isset($_GET['rangeOne'])) {  echo $_GET['rangeTwo'] ; }else { echo '5000'; }; ?>" min="0" max="5000" step="1" type="range">
                    </div>
                    <div class="submit_btn">
                       {!! Form::submit('Submit',['class'=>'w-100 button', 'id'=>'submit']) !!}
                    </div>
                    <div class="reset_btn w-100 my-4">
                        <a href="{{route('jobs.index')}}">Reset</a>

                    </div>
                    {!! Form::close() !!}

                    
                </div>
            </div>
            <div class="col-lg-9">
                <div class="recent_joblist_wrap">
                    <div class="recent_joblist white-bg ">
                        <div class="row align-items-center">
                            <div class="col-md-6 py-3">
                                <h4>Job Listing</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="job_lists m-0">
                    <div class="row">

                        @if(count($jobs) <= 0)
                            <img src="{{asset('images/background/no-vacancies.png')}}" class="no-vacancies" alt='NoVacancies'> 
                        @else
                        @foreach ($jobs as $job)
                            
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="single_jobs white-bg d-flex justify-content-between">
                                <div class="jobs_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="{{asset($job->logo_path)}}" alt="">
                                    </div>
                                    <div class="jobs_conetent">
                                        <a href="{{route('jobs.show',$job->id)}}"><h4>{{$job->title}}</h4></a>
                                        <div class="links_locat d-flex align-items-center">
                                            
                                            
                                                
                                            
                                            <div class="location py-1">
                                            
                                                <p><i class="fas fa-search-location"></i>{{$job->location->name}}</p>
                                            </div>
                                            <div class="location">
                                            
                                                <p><i class="fa fa-code" aria-hidden="true"></i>{{$job->language->name}}</p> 

                                            </div>
                                            <div class="location">
                                            
                                                <p><i class="fas fa-clock"></i>{{$job->type->name}}</p> 

                                            </div>
                                            
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs_right">
                                    <div class="apply_now">
                                        <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                        <a href="{{route('jobs.show',$job->id)}}" class="primary-btn">Apply Now</a>
                                    </div>
                                    <div class="date">
                                        <p>{{$job->created_at->format('jS F Y')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination_wrap">
                                <ul>
                                    <li><a href="#"> <i class="ti-angle-left"></i> </a></li>
                                    <li><a href="#"><span>01</span></a></li>
                                    <li><a href="#"><span>02</span></a></li>
                                    <li><a href="#"> <i class="ti-angle-right"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer')
    <script>
    var rangeOne = document.querySelector('input[name="rangeOne"]'),
    rangeTwo = document.querySelector('input[name="rangeTwo"]'),
    outputOne = document.querySelector('.outputOne'),
    outputTwo = document.querySelector('.outputTwo'),
    inclRange = document.querySelector('.incl-range'),
    
    updateView = function () {
      if (this.getAttribute('name') === 'rangeOne') {
        outputOne.innerHTML = '$' + this.value;
        outputOne.style.left = this.value / this.getAttribute('max') * 100 + '%';
      } else {
        outputTwo.style.left = this.value / this.getAttribute('max') * 100 + '%';
        outputTwo.innerHTML = '$' + this.value;
      }
      if (parseInt(rangeOne.value) > parseInt(rangeTwo.value)) {
        inclRange.style.width = (rangeOne.value - rangeTwo.value) / this.getAttribute('max') * 100 + '%';
        inclRange.style.left = rangeTwo.value / this.getAttribute('max') * 100 + '%';
      } else {
        inclRange.style.width = (rangeTwo.value - rangeOne.value) / this.getAttribute('max') * 100 + '%';
        inclRange.style.left = rangeOne.value / this.getAttribute('max') * 100 + '%';
      }
    };

  document.addEventListener('DOMContentLoaded', function () {
    updateView.call(rangeOne);
    updateView.call(rangeTwo);
    $('input[type="range"]').on('mouseup', function() {
      this.blur();
    }).on('mousedown input', function () {
      updateView.call(this);
    });
  });

  // Select

    </script>

<script type="text/javascript">

    
    })
    


  </script>
  
@endsection