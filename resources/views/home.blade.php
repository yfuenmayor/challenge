{{-- Invocamos el layout   --}}
@extends('base.layout')

{{-- Title --}}
{{-- @section('titleContent', 'AppCajero') --}}

{{-- CUERPO DEL HOME --}}
@section('bodyContent')

<div class="container mt-5">
  <div class="row justify-content-md-center">
	<div class="card w-50 bg-dark">
		<div class="card-header text-center">
	    	<h5 class="card-title">Bienvenido</h5>
		</div>

	  <div class="card-body">
	    <form method="POST" action="{{ route('login') }}">
	    	@csrf {{--  token --}}
		  <div class="form-group has-success">
		    <label for="Tarjeta"><span class="text-white">Ingrese el número de tarjeta de 16 digitos desde el teclado numerico</span></label>
		    <input type="text" class="form-control @if($errors->any()) is-invalid @endif text-center" name="Tarjeta" id="Digitos" aria-describedby="TarjetaHelp" maxlength="19" placeholder="xxxx - xxxx - xxxx - xxxx" value="{{ old('Tarjeta') }}" readonly required>

		  </div>
		  {{-- Panel de numeros --}}
		    <div class="card">
		    	<div class="card-body">
		    		<div class="row">
				       <div class="col-sm-4">
		  					<button type="button" value="1" class="btn num btn-block btn-info">1</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="2" class="btn num btn-block btn-info">2</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="3" class="btn num btn-block btn-info">3</button>
				       </div>
				       <!-- /.col-sm-4 -->
				  </div>
				  <div class="row mt-2">
				       <div class="col-sm-4">
		  					<button type="button" value="4" class="btn num btn-block btn-info">4</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="5" class="btn num btn-block btn-info">5</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="6" class="btn num btn-block btn-info">6</button>
				       </div>
				       <!-- /.col-sm-4 -->
				  </div>
				  <div class="row mt-2">
				       <div class="col-sm-4">
		  					<button type="button" value="7" class="btn num btn-block btn-info">7</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="8" class="btn num btn-block btn-info">8</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="9" class="btn num btn-block btn-info">9</button>
				       </div>
				       <!-- /.col-sm-4 -->
				  </div>
				  <div class="row mt-2">
				       <div class="col-sm-4">
		  					<button type="button" class="btn btn-block btn-warning" id="clear">Limpiar</button>
				       </div>
				       <!-- /.col-sm-4 -->
				       <div class="col-sm-4">
		  					<button type="button" value="0" class="btn num btn-block btn-info">0</button>
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

		</form>

	  </div>{{-- CARD Padre --}}
	</div>
  </div>
</div>


@endsection