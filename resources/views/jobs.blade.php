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
                    <h3 class="">4536+ Jobs Available</h3>
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
                                            @foreach ('App\Models\Tag'::whereIsLocation(1)->get() as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="language" name="language">
                                            @foreach ('App\Models\Tag'::whereIsLanguage(1)->get() as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="type" name="type">
                                            @foreach ('App\Models\Tag'::whereIsType(1)->get() as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
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
                        <input name="rangeOne" value="10" min="0" max="5000" step="1" type="range">
                        <input name="rangeTwo" value="5000" min="0" max="5000" step="1" type="range">
                    </div>
                    <div class="reset_btn">
                       {!! Form::submit('Submit',['class'=>'w-100 button', 'id'=>'submit']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-lg-9">
                <div class="recent_joblist_wrap">
                    <div class="recent_joblist white-bg ">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4>Job Listing</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="serch_cat d-flex justify-content-end">
                                    <select class="recent">
                                        <option data-display="Most Recent">Most Recent</option>
                                        <option value="1">Marketer</option>
                                        <option value="2">Wordpress </option>
                                        <option value="4">Designer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="job_lists m-0">
                    <div class="row">
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
                                            
                                            @foreach ($job->tags as $tag)
                                                
                                            
                                            <div class="location">
                                                <p><i class="{{$tag->icons->icon}}"></i>{{$tag->name}}</p>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs_right">
                                    <div class="apply_now">
                                        <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                        <a href="{{route('jobs.show',$job->id)}}" class="primary-btn">Apply Now</a>
                                    </div>
                                    <div class="date">
                                        <p>Date line: 31 Jan 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
@endsection