

{{-- Invocamos el layout   --}}
@extends('base.layout')

{{-- Title --}}
{{-- @section('titleContent', 'AppCajero') --}}

{{-- CUERPO DEL HOME --}}
@section('bodyContent')

<div class="container mt-5">
  <div class="row justify-content-md-center">
	<div class="card w-50 bg-warning">
		<div class="card-header">
			<div class="row">
				<div class="col-10">
					<h3 class="card-title">Alerta !</h3>
				</div>
				<div class="col-2">
	    			<a href="{{ route('home') }}" value="1" class="btn btn-small btn-danger">Salir</a>
				</div>
			</div>
		</div>

	  <div class="card-body">
		  {{-- Panel de numeros --}}
		    <div class="card">
		    	<div class="card-body">
		    			<h4 class="text-danger" >Su tarjeta ha sido bloqueada !</h4>
		    			<p> Excedió cantidad de intentos al ingresar su pin, comuniquese con el banco para mas información.</p>
				  <!-- /.row -->
		    	</div>
		    </div>
	  </div>{{-- CARD Padre --}}
	</div>
  </div>
</div>


@endsection