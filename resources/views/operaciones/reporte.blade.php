

{{-- Invocamos el layout   --}}
@extends('base.layout')

{{-- Title --}}
{{-- @section('titleContent', 'AppCajero') --}}

<?php $id = $data['tarjeta']->id; ?>

{{-- CUERPO DEL HOME --}}
@section('bodyContent')

<div class="container mt-5">
  <div class="row justify-content-md-center">
	<div class="card w-25 bg-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-8">
					<h3 class="card-title">Reporte</h3>
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
		    		<div class="row">
			    		<div class="mt-1">
			    			<p>Fecha: {{ date('d/m/Y',strtotime($data['operacion']->created_at)) }} </p>
			    			<p>Hora: {{ date('h:i:s A',strtotime($data['operacion']->created_at)) }} </p>
			    			<p>Tarjeta: {{ $data['tarjeta']->numero }} </p>
			    			<p>Monto: {{ $data['operacion']->monto }} </p>
			    			<p>Balance: {{ $data['operacion']->saldo->saldo }} </p>
			    		</div>
		    		</div>
				  <!-- /.row -->
		    	</div>
		    </div>
		    <div class="mt-2 col-6">
		    	<a href="{{ route('operaciones', $id) }}" value="1" class="btn btn-small btn-block btn-info">Atras</a>
		    </div>
	  </div>{{-- CARD Padre --}}
	</div>
  </div>
</div>


@endsection