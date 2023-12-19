@extends('client.layout.auth')

@section('title', 'Sign in')


@section('body')


<div class="signpanel-wrapper">
  <div class="signbox">
    <div class="signbox-header">
      <h4>All Store</h4>
      <p class="mg-b-0">Sign in as a member</p>
    </div><!-- signbox-header -->
    <form action="{{ route('login') }}" method="post">
      @csrf
      <div class="signbox-body">
        @if (Session::has('login_warning'))
          <div class="alert alert-warning">{{ Session::get('login_warning') }}</div>
          @php
              Session::pull('login_warning');
          @endphp
        @endif
        @if (Session::has('access_fail'))
          <div class="alert alert-warning">{{ Session::get('access_fail') }}</div>
          @php
              Session::pull('access_fail');
          @endphp
        @endif
        @if (Session::has('logout_success'))
          <div class="alert alert-warning">{{ Session::get('logout_success') }}</div>
          @php
              Session::pull('logout_success');
          @endphp
        @endif
        @if (Session::has('registration_success'))
          <div class="alert alert-success">{{ Session::get('registration_success') }}</div>
          @php
              Session::pull('registration_success');
          @endphp
        @endif
        @if (Session::has('login_fail'))
          <div class="alert alert-danger">{{ Session::get('login_fail') }}</div>
          @php
              Session::pull('login_fail');
          @endphp
        @endif
        <div class="form-group">
          <label class="form-control-label">Email</label>
          <input type="email" name="email" placeholder="Enter your email" class="form-control" value="{{ old('email') }}">
          <span class="text-danger">@error('email') {{ "* " . $message }} @enderror</span>
        </div><!-- form-group -->
        <div class="form-group">
          <label class="form-control-label">Password</label>
          <input type="password" name="password" placeholder="Enter your password" class="form-control">
          <span class="text-danger">@error('password') {{ "* " . $message }} @enderror</span>
        </div><!-- form-group -->
        <div class="form-group">
          <a href="">Forgot password?</a>
        </div><!-- form-group -->
        <button class="btn btn-dark btn-block" type="submit">Sign In</button>
        <div class="tx-center bd pd-10 mg-t-40">Not yet a member? <a href="{{ route('signup') }}">Create an account</a></div>
      </div><!-- signbox-body -->
    </form>
  </div><!-- signbox -->
</div><!-- signpanel-wrapper -->


@endsection