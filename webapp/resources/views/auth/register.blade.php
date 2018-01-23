@extends('layouts.auth')

@section('content')

<div class="auth-back">
  <div class="auth-wrapper">
    <div class="auth-form">
      <div class="auth-heading">
        <h3>Crear nueva cuenta</h3>
        <p>ingresa tus datos para registrarte</p>
        <i class="ion-ios-personadd-outline"></i>
      </div>
      <div class="auth-body">
      <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        
        <div class="form-group">
            <input placeholder="Nombre" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <p class="text-primary">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="form-group">
          <input placeholder="Email" id="email" type="email" class="form-control" name="email" required autofocus autocomplete="off">
          @if ($errors->has('email'))
            <p class="text-primary">{{ $errors->first('email') }}</p>
          @endif
        </div>
        <div class="form-group">
          <input placeholder="Contraseña" id="password" type="password" class="form-control" name="password" required autocomplete="off">
          @if ($errors->has('password'))
            <p class="text-primary">{{ $errors->first('password') }}</p>
          @endif
        </div>   
        <div class="form-group">
        <input placeholder="Confirmar contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div> 
        <div class="form-group">
          <button class="btn btn-block btn-primary" type="submit" name="action">Crear cuenta</button>
        </div>
        <div class="form-group text-center">
          <a href="{{ route('login') }}">Ya tienes una cuenta? Ingresar</a>
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
