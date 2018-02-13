@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
          
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<section class="login_body">
    <div class="loginhome">
        <div class="text-center login-precise">
            <!-- <form class="form-signin">
              <img src="{{asset('images/logo.png')}}" class="img-responsive">    
              <h1 class="h3 mb-3 font-weight-normal">Login</h1>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" type="email">
              <label for="inputPassword" class="sr-only">Password</label>
              <input id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
              <div class="checkbox mb-3">
                <label>
                  <input value="remember-me" type="checkbox"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              <a href="signup.html" class="creat_loginlink">Create an account</a>
            </form> -->
            
          
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                      <img src="{{asset('images/logo.png')}}" class=""> 
                        {{ csrf_field() }}
                      <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      
                            <div class="col-md-12" style="padding:0px;">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12" style="padding:0px;">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" style="margin: 2px 0px 0px; position: relative; height: auto; float: left;" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                    </form>
                
        </div>
    </div>
</section>
@endsection
