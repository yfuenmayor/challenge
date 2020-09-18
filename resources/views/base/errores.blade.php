

{{-- Invocamos el layout   --}}
@extends('base.layout')

{{-- Title --}}
{{-- @section('titleContent', 'AppCajero') --}}

{{-- CUERPO DEL HOME --}}
@section('bodyContent')

<div class="container mt-5">
  <div class="row justify-content-md-center">
	<div class="card w-50 bg-danger">
		<div class="card-header">
			<div class="row">
				<div class="col-10">
					<h3 class="card-title">Error !</h3>
				</div>
				<div class="col-2">
	    			<a href="{{ route('home') }}" value="1" class="btn btn-small btn-dark">Salir</a>
				</div>
			</div>
		</div>

	  <div class="card-body">
		  {{-- Panel de numeros --}}
		    <div class="card">
		    	<div class="card-body">
		    		@if(isset($tarjeta))
		    			<h4 class="text-danger" >Su tarjeta esta bloqueada !</h4>
					@else
		    			<h4 class="text-danger">La Tarjeta ingresada no existe !</h4>
					@endif
				  <!-- /.row -->
		    	</div>
		    </div>
	  </div>{{-- CARD Padre --}}
	</div>
  </div>
</div>


@endsection