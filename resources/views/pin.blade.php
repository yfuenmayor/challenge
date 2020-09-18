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
					<h5 class="card-title">Tarjeta: {{ $tarjeta->numero }}</h5>
				</div>
				<div class="col-2">
	    			<a href="{{ route('home') }}" value="1" class="btn btn-sm btn-danger">Salir</a>
				</div>
			</div>
		</div>

	  <div class="card-body">
	  	<form method="POST" action="{{ route('validacionpin') }}">
	    	@csrf {{--  token --}}
		  <div class="form-group has-success">
		    <label for="Pin"><span class="text-white">Ingrese el pin de 4 digitos</span><small class="text-danger"> Despues de 4 intentos fallidos su tarjeta sera bloqueada</small></label>
		    <input type="hidden" name="Id" value="{{$tarjeta->id}}">
		    <input type="hidden" name="Contador" id="Contador" value="{{$tarjeta->contador}}">
		    <input type="password" class="form-control text-center" name="Pin" id="Digitos" aria-describedby="PinHelp" maxlength="4" value="{{ old('Pin') }}" placeholder="xxxx" readonly required>

		  </div>
		  {{-- Panel de numeros --}}
		    <div class="card">
		    	<div class="card-body">
		    		<div class="row">
				       <div class="col-sm-4">
		  					<button type="button" value="1" class="btn pin btn-block btn-info">1</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="2" class="btn pin btn-block btn-info">2</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="3" class="btn pin btn-block btn-info">3</button>
				       </div>
				       <!-- /.col-sm-4 -->
				  </div>
				  <div class="row mt-2">
				       <div class="col-sm-4">
		  					<button type="button" value="4" class="btn pin btn-block btn-info">4</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="5" class="btn pin btn-block btn-info">5</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="6" class="btn pin btn-block btn-info">6</button>
				       </div>
				       <!-- /.col-sm-4 -->
				  </div>
				  <div class="row mt-2">
				       <div class="col-sm-4">
		  					<button type="button" value="7" class="btn pin btn-block btn-info">7</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="8" class="btn pin btn-block btn-info">8</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="9" class="btn pin btn-block btn-info">9</button>
				       </div>
				       <!-- /.col-sm-4 -->
				  </div>
				  <div class="row mt-2">
				       <div class="col-sm-4">
		  					<button type="button" class="btn btn-block btn-warning" id="clear">Limpiar</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="0" class="btn pin btn-block btn-info">0</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="submit" id="send" class="btn btn-block btn-success" disabled>Validar</button>
				       </div>
				       <!-- /.col-sm-4 -->
				  </div>
				  <!-- /.row -->
		    	</div>
		    </div>
	  </div>{{-- CARD Padre --}}
	</form>
	</div>
  </div>
</div>


@endsection