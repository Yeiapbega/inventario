@extends('main')
@section('title', 'Login')

@section('content')
{{-- {{ date_default_timezone_set ( 'America/Bogota' ) }} --}}
<container-auth class="z-depth-1-2">	
	{{-- <img src="{{ asset('src/box_2.png') }}" class="img-fluid w-25"> --}}
	<h4 class="relaway"><b>ADMY</b> 📦 Login</h4>
	<errors class="quick" style="display: none;zoom: .75;">
		<div class="card py-2 px-3 bg-danger text-white mb-2 mt-2">
			<h5 class="mb-1 card-title relaway"><i class="fa fa-exclamation-triangle"></i> Errores</h5>
			<div class="card-body px-1 py-1">
				
			</div>
		</div>
	</errors>
	<hr>
	asd
	<div class="auth-input mx-2">
		<div class="form-group d-flex mb-2">
			<i class="fa fa-user i-auth box-color-light"></i>			
			<input type="number" name="dni" class="form-auth-input pl-3 form-control" placeholder=" Identificacion">	
		</div>
		<div class="form-group d-flex mb-3">
			<i class="fa fa-key i-auth box-color-light"></i>
			<input type="password" name="pass" class="form-auth-input pl-3 form-control" placeholder=" Contraseña">
		</div>
		<div class="col-lg-12 text-center px-0">
			<button type="submit" class="btn box-color btn-block text-white relaway hoverable" name="submitAuth">Ingresar <i class="fa fa-paper-plane"></i></button>
		</div>	
	</div>
</container-auth>
@endsection

@section('scriptShow')
{{-- <script type="text/javascript" src="{{ asset('js/sweetAlert.js') }}"></script> --}}
<script type="text/javascript">
	$("body").attr("id", "body");
	$("body").addClass("my-0 mx-0");
	particlesJS.load('body','{{ asset('js/particles.cfg.json') }}');	
</script>
@endsection