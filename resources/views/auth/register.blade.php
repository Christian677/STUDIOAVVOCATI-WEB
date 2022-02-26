<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="{{ asset('css/access.css') }}" rel="stylesheet">
</head>
<body>

    <div class="bg-img container overflow-hidden mt-7">

        <div class="content overflow-hidden">
          <header>Registrati</header>
          <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Custom it --}}
            @if($errors->any())
            <span class="error-message" role="alert">
            <strong>Invalid field</strong>
            </span>
           @enderror

            <div class="field">
              <span class="fa fa-user"></span>
              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" 
                  required autocomplete="name" autofocus placeholder="Nome">
              </div>
            </div>

            <div class="field space">
                <span class="fa fa-user"></span>
                <div class="col-md-6">
                    <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" 
                    required autocomplete="surname" autofocus placeholder="Cognome">
                </div>
            </div>

            <div class="field space">
                <span class="fa fa-user"></span>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" 
                    required autocomplete="email" autofocus placeholder="Email">
                </div>
            </div>

            <div class="field space">
                <span class="fa fa-user"></span>
                <div class="col-md-6">
                    <input id="birthdate" type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}" 
                    required autocomplete="birthdate" autofocus placeholder="Data di nascita">
                </div>
            </div>

            <div class="field space">
                <span class="fa fa-user"></span>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password"
                    placeholder="Password">
                </div>
            </div>

            <div class="field space">
                <span class="fa fa-user"></span>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                    placeholder="Conferma password">
                </div>
            </div>
            
            <div class="field space">
              <button type="submit" class="btn btn-primary">
                {{ __('Registrati') }}
              </button>
            </div>

          </form>
          
  
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

    </body>
</html>
