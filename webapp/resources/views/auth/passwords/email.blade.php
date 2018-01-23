@extends('layouts.auth')

@section('content')
<div class="auth-back">
  <div class="auth-wrapper">
    <div class="auth-form">
      <div class="auth-heading">
        <h3>Creación de nueva contraseña</h3>
        <p>ingresa tu email para resetear tu contraseña</p>
        <i class="ion-ios-email-outline"></i>
      </div>
      <div class="auth-body">
      <form method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="form-group">
          <input placeholder="Email" id="email" type="email" class="form-control" name="email" required autofocus autocomplete="off">
          @if ($errors->has('email'))
            <p class="text-primary">{{ $errors->first('email') }}</p>
          @endif
        </div>
       
        <div class="form-group">
          <button class="btn btn-block btn-primary" type="submit" name="action">Enviar email de recuperación</button>
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
