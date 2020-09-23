@extends('admin.layoutLogin')

@section('content')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
          
          <div class="login-logo">
            <img style="float:left; width: 15%;" src="{{ asset('adminlte/img/op2.png') }}" class="brand-image img-circle elevation-2" alt="User Image">
                Iniciar Sesión
              </div>
      <p class="login-box-msg">Ingresa tus Credenciales</p>

      <form action="{{ route('login') }}" method="post">
	  @csrf
        <div class="input-group mb-3">
		  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingrese Correo Electronico" autofocus>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
		   @error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
        </div>
        <div class="input-group mb-3">
		  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Ingrese Contraseña" autocomplete="current-password">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
		  @error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		  @enderror
		  
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
			  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

				<label class="form-check-label" for="remember">
					Recordar Contraseña
				</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary">
				{{ __('Login') }}
			</button>
			 <!-- @if (Route::has('password.request'))
				<a class="btn btn-link" href="{{ route('password.request') }}">
					{{ __('Forgot Your Password?') }}
				</a>
			@endif -->
          </div>
          <!-- /.col -->
        </div>
      </form>

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection
