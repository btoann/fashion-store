@extends('client.layout.auth')

@section('title', 'Sign up')


@section('body')


<div class="signpanel-wrapper">
  <div class="signbox signup">
    <div class="signbox-header">
      <h4>All Store</h4>
      <p class="mg-b-0">Sign up to become a new member</p>
    </div><!-- signbox-header -->
    <form action="{{ route('register') }}" method="post">
      @csrf
      <div class="signbox-body">
        @if (Session::has('registration_fail'))
          <div class="alert alert-danger">{{ Session::get('registration_fail') }}</div>
          @php
              Session::pull('registration_fail');
          @endphp
        @endif
        <div class="form-group">
          <label class="form-control-label">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Type email address" value="{{ old('email') }}">
          <span class="text-danger">@error('email') {{ "* " . $message }} @enderror</span>
        </div><!-- form-group -->

        <div class="form-group">
          <label class="form-control-label">Phone number</label>
          <input type="text" name="phone_number" class="form-control" placeholder="Type your phone number" value="{{ old('phone_number') }}">
          <span class="text-danger">@error('phone_number') {{ "* " . $message }} @enderror</span>
        </div><!-- form-group -->
  
        <div class="form-group">
          <label class="form-control-label">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Type your name" value="{{ old('name') }}">
          <span class="text-danger">@error('name') {{ "* " . $message }} @enderror</span>
        </div><!-- form-group -->
  
        <div class="row row-xs">
          <div class="col-sm">
            <div class="form-group">
              <label class="form-control-label">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Type password">
              <span class="text-danger">@error('password') {{ "* " . $message }} @enderror</span>
            </div><!-- form-group -->
          </div><!-- col -->
          <div class="col-sm">
            <div class="form-group">
              <label class="form-control-label">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
              <span class="text-danger">@error('password_confirmation') {{ "* " . $message }} @enderror</span>
            </div><!-- form-group -->
          </div><!-- col -->
        </div><!-- row -->
  
        <div class="form-group mg-b-20 tx-12">By clicking Sign Up button below you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a></div>
  
        <button type="submit" class="btn btn-dark btn-block" type="submit">Sign Up</button>
        <div class="tx-center bd pd-10 mg-t-40">Already a member? <a href="{{ route('signin') }}">Sign In</a></div>
      </div><!-- signbox-body --></form>
  </div><!-- signbox -->
</div><!-- signpanel-wrapper -->


@endsection