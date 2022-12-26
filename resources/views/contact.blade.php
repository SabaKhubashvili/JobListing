@extends('layouts.app')


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
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection


@section('content')
    
<div class="contact_container">  
    <form id="contact" action="" method="post">
      <h3>Quick Contact</h3>
      <h4>Contact us today, and get reply with in 24 hours!</h4>
      <fieldset>
        <input placeholder="Your name" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Your Email Address" type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </fieldset>
    </form>
   
    
  </div>

@endsection





@section('footer')
    
@endsection