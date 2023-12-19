{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{{ asset('/') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Katniss">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/katniss/img/katniss-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/katniss">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>Katniss Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="resources/server/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="resources/server/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="resources/server/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="resources/server/css/katniss.css">
  </head>

  <body> --}}
@extends('client.layout.master')

@section('title', 'Profile')


@section('body')

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="resources/server/css/katniss_copy.css" type="text/css">

    <!-- ##### MAIN PANEL ##### -->
    <section class="container stylization maincont">
      <ul class="b-crumbs">
        <li>
            <a href="{{ route('index') }}">
                Home
            </a>
        </li>
        <li>
            <span>Profile</span>
        </li>
      </ul>
      <h1 class="main-ttl"><span>Profile</span></h1>
      
      <div class="row">
        <div class="col-md-4 col-lg-3">
          <label class="content-left-label">Your Profile Photo</label>
          <figure class="edit-profile-photo">
            <img src="resources/img/user/avatar-client-1.jpg" class="img-fluid" alt="">
            <figcaption>
              <button>Edit Photo</button>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-center"><button class="mg-t-20 mg-b-30">Save changes</button></div>
        </div><!-- col-3 -->
        <div class="col-md-8 col-lg-9">
          <label class="content-left-label">Login Information</label>
          <div class="card bg-gray-200 bd-0">
            <div class="edit-profile-form">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Name: </label>
                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                  <input class="form-control" placeholder="Enter username" type="text" name="name" value="{{ $user->name }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Email: </label>
                <div class="col-sm-8 col-xl-6 mg-t-10">
                  <input class="form-control" placeholder="Enter username" type="email" name="email" value="{{ $user->email }}">
                </div>
              </div>
              <div class="form-group row mg-b-0">
                <label class="col-sm-3 form-control-label">Password:</label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <a href="#"><span id="change_password">Change Password</span></a>
                </div>
              </div>
            </div><!-- wd-60p -->
          </div><!-- card -->

          <hr class="invisible">

          <label class="content-left-label">Personal Information</label>
          <div class="card bg-gray-200 bd-0">
            <div class="edit-profile-form">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Phone number:</label>
                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                  <input class="form-control" placeholder="Phone number" name="phone_number" type="text" value="{{ $user->phone_number }}">
                </div>
              </div><!-- form-group -->
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Gender:</label>
                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                  <input class="form-control" placeholder="Enter lastname" type="text" name="gender" value="{{ ($user->gender <= 0) ? 'Other' : (($user->gender >= 2) ? 'Female' : 'Male') }}">
                </div>
              </div><!-- form-group -->
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Created at:</label>
                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                  <input class="form-control" placeholder="Enter location" type="text" readonly value="{{ $user->created_at }}">
                </div>
              </div><!-- form-group -->
              <div class="form-group row mg-b-0">
                <label class="col-sm-3 form-control-label">About You:</label>
                <div class="col-sm-9 col-xl-8 mg-t-10 mg-sm-t-0">
                  <textarea class="form-control" placeholder="Enter some description of yourself" rows="3" name="description" value="{{ $user->description }}"></textarea>
                </div>
              </div><!-- form-group -->
            </div><!-- wd-60p -->
          </div><!-- card -->

          {{-- <hr class="invisible">

          <label class="content-left-label">Notifications</label>
          <div class="card pd-40 bg-gray-200 bd-0">
            <div>
              <label class="ckbox">
                <input type="checkbox"><span>Email me when someone mentions me...</span>
              </label>
            </div>
            <div>
              <label class="ckbox">
                <input type="checkbox"><span>Email me when someone follows me...</span>
              </label>
            </div>
          </div><!-- card --> --}}

        </div><!-- col-9 -->
      </div><!-- row -->
    </section>

@endsection