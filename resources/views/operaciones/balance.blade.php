{{-- Invocamos el layout   --}}
@extends('base.layout')

{{-- Title --}}
{{-- @section('titleContent', 'AppCajero') --}}

<?php $id = $data['tarjeta']->id ?>

{{-- CUERPO DEL HOME --}}
@section('bodyContent')

<div class="container mt-5">
  <div class="row justify-content-md-center">
	<div class="card w-50 border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-10">
					<h5 class="card-title">Balance</h5>
				</div>
				<div class="col-2">
	    			<a href="{{ route('home') }}" value="1" class="btn btn-sm btn-danger">Salir</a>
				</div>
			</div>
		</div>

		  <div class="card-body">
			  	<div class="row">
			  		<ul>
			  			<li>Tarjeta Nro: {{ $data['tarjeta']->numero }} Vence: {{ $data['tarjeta']->numero }}</li>
			  			<li>Ultima operacion: {{$data['operacion']->tipo->nombre}} por ${{ $data['operacion']->monto }}</li>
			  			<li>Saldo disponible: {{ $data['saldo']->saldo }}</li>
			  		</ul>
			  	</div>
		  		<div class="row">
				       <div class="col-sm-4">
		  					<a href="{{ route('operaciones', $id) }}" class="btn btn-block btn-primary">Atras</a>
				       </div>
				  </div>
		  </div>
	  </div>{{-- CARD Padre --}}
	</form>
	</div>
  </div>
</div>


@endsection