@extends('layouts.auth')

@section('main-content')
<link rel="stylesheet" href="css/login.css">
<div class="main">
    
    
    <div class="container">
<div class="middle">
      <div id="login">

        <form action="{{ route('login') }}" method="POST">
            @csrf
          <fieldset class="clearfix">
            <p><span class="fa fa-user"></span><input id="email" type="email" Placeholder="Email" required @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></p>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            <p><span class="fa fa-lock"></span><input type="password" id="password" Placeholder="Contraseña" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"></p>
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

             <div>
                @if (Route::has('password.request'))
                    <span style="width:48%; text-align:left;  display: inline-block;">
                        <a class="text" href="{{ route('password.request') }}">
                                            {{ __('Olvido su Contraseña?') }}
                        </a>
                    </span>
                                @endif                
                    <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Entrar"></span>
                            </div>

          </fieldset>
        <div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo">
        <img src ="img/LIQIT.png" class="" style="width: 200px; margin-bottom:0px"><br>  
          <div class="clearfix"></div>
      </div>
      </div>
    </div>

</div>
@endsection
