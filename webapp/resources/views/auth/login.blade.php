@extends('layouts.auth')

@section('content')

<div class="auth-back">
  <div class="auth-wrapper">
    <div class="auth-form">
      <div class="auth-heading">
        <h3>Iniciar sesión</h3>
        <p>ingresa tus credenciales para acceder</p>
        <i class="ion-ios-locked-outline"></i>
      </div>
      <div class="auth-body">
      <form class="col s12" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        
        <div class="form-group">
          <input placeholder="Email" id="email" type="email" class="validate form-control" name="email" required autofocus autocomplete="off">
          @if ($errors->has('email'))
            <p class="text-primary">{{ $errors->first('email') }}</p>
          @endif
        </div>
        <div class="form-group">
          <input placeholder="Contraseña" id="password" type="password" class="validate form-control" name="password" required autocomplete="off">
          @if ($errors->has('password'))
            <p class="text-primary">{{ $errors->first('password') }}</p>
          @endif
        </div>   
        <div class="form-group">
          <input type="checkbox" id="remember" name="remember" /> Recuerdame
        </div>   

        <div class="form-group">
          <a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
        </div>
        <div class="form-group">
          <button class="btn btn-block btn-primary" type="submit" name="action">Ingresar</button>
        </div>
        <div class="form-group text-center">
          <a href="{{ route('register') }}">Aún no tienes una cuenta? Registrate</a>
        </div>
      </form>
    </div>
    
    </div>
  </div>
  <div class="auth-footer">
    All Right reserved &copy 2015-2019
  </div>
</div>
@endsection
