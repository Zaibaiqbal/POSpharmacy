<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/final.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
  
  <title>Login</title>
</head>
<body style="background-color: #d3d3d3;">
  <div class="sidebar">
    <div class=" col-md-11 side-in">      
      <form class="form" method="post" action="{{route('login')}}">

      {{ csrf_field() }}
          <h2 >Login</h2><br>
           
            <div class="form-group row">
              <label for="email" class="col-md-8 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

             <div class="form-group row">
               <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-12">
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                      @error('password')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                         </span>
                                @enderror
                            </div>
                        </div>

             <div class="form-group row">
                   <div class="col-md-8 offset-md-2">
                      <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Remember Me') }}
                             </label>
                                </div>
                            </div>
                        </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-2">
                        <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link ml-0" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
/                                @endif
                            </div>
                        </div>
      </form>
    </div>
  </div>
<div>


</div>
</body>
<script src="js/icon/fontawesome.js"></script>
</html>