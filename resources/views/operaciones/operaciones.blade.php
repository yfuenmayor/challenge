{{-- Invocamos el layout   --}}
@extends('base.layout')

{{-- Title --}}
{{-- @section('titleContent', 'AppCajero') --}}

{{-- CUERPO DEL HOME --}}
@section('bodyContent')

<div class="container mt-5">
  <div class="row justify-content-md-center">
	<div class="card w-50 bg-dark">
		<div class="card-header">
			<div class="row">
				<div class="col-10">
					{{-- <h5 class="card-title">Tarjeta: {{ $tarjeta->numeroT }}</h5> --}}
					<h5 class="card-title">OPERACIONES</h5>
				</div>
				<div class="col-2">
	    			<a href="{{ route('home') }}" value="1" class="btn btn-sm btn-danger">Salir</a>
				</div>
			</div>
		</div>

		  <div class="card-body">
		  		<div class="row">
				       <div class="col-sm-6">
		  					<a href="{{ route('balance', $tarjeta->cuenta_id) }}" class="btn btn-block btn-lg btn-primary">Balance</a>
				       </div>
				       <!-- /.col-sm-6 -->
				       <div class="col-sm-6">
		  					<a href="{{ route('retiro', $tarjeta->id) }}" class="btn btn-block btn-lg btn-success">Retiro</a>
				       </div>
				       <!-- /.col-sm-6 -->
				  </div>
		  </div>
	  </div>{{-- CARD Padre --}}
	</form>
	</div>
  </div>
</div>


@endsection