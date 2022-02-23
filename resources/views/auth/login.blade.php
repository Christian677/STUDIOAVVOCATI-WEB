<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/access.css') }}" rel="stylesheet">
</head>
<body>

    <div class="bg-img container overflow-hidden mt-7">

        <div class="content overflow-hidden">
          <header>Login</header>
          <form method="POST" action="{{ route('login') }}">

            @csrf

            <div class="field">
              <span class="fa fa-user"></span>
              <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email o numero di telefono" >
              @error('email')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
              @enderror
            </div>

            <div class="field space">
              <span class="fa fa-lock"></span>
              <input id="password" type="password" class="pass-key form-control @error('password') is-invalid @enderror" name="password" required 
              autocomplete="current-password" placeholder="Password">
              @error('password')
                 <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                 </span>
              @enderror
              <span class="show">SHOW</span>
            </div>

            <div class="pass">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Password dimenticata?
                    </a>
                @endif
            </div>

            <div class="field">
              <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
              </button>
            </div>

          </form>
          
          <div class="login">Registrati con</div>
          <div class="links">
            <div class="facebook">
              <a href="#"><i class="fab fa-facebook-f"><span>Facebook</span></i></a>
            </div>
            <div class="instagram">
              <a href="#"><i class="fab fa-instagram"><span>Instagram</span></i></a>
            </div>
          </div>
          <div class="signup">Non hai un account?
            <a href="#">Registrati ora</a>
          </div>
        </div>
  
      <script>
        const pass_field = document.querySelector('.pass-key');
        const showBtn = document.querySelector('.show');
        showBtn.addEventListener('click', function(){
         if(pass_field.type === "password"){
           pass_field.type = "text";
           showBtn.textContent = "HIDE";
           showBtn.style.color = "#3498db";
         }else{
           pass_field.type = "password";
           showBtn.textContent = "SHOW";
           showBtn.style.color = "#222";
         }
        });
      </script>

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
    
</body>
</html>

