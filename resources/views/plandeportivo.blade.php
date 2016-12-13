@extends('masterplanes')
@section('titulo', 'Plan Deportivo')

@section('contenido')
<form>
	<div class="container" align="center">
		<div class="row">
			<div class="col s4 m6">
				<div  class="card">
					<div class="card-content">
						<div class="card-title grey-text-accent-4" class="input-field col s12">Horarios</div>
						<div class="row">
							<p>Dia 1</p>
						</div>
						<div class="row">
							<p>Dia 2</p>
						</div>
						<div class="row">
							<p>Dia 3</p>
						</div>
						<div class="row">
       						<button class="btn waves-effect light-green darken-2" type="submit" name="action">Entrar</button>
       					</div>
					</div>
				</div>
			</div>
			<div class="col s3">
				<div  class="card">
				</div>
			</div>
			<div class="col s4 m6">
				<div  class="card">
					<div class="card-content">
						<div class="card-title grey-text-accent-4" class="input-field col s12">Nombre paciente</div>
						<div class="input-field col s14">
							<input type="text" name="day1" placeholder="Ejercicios" class="input-field">
						</div>
						<div class="input-field col s14">
							<input type="text" name="day2" placeholder="Ejercicios" class="input-field">
						</div>
						<div class="input-field col s14">
							<input type="text" name="day3" placeholder="Ejercicios" class="input-field">
						</div>
						<div class="row">
       					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" align="center">
		<div class="col s3">
			<div  class="card">
			</div>
		</div>
		<div class="col s4 m6">
			<div class="input-field col s4">
       			<button class="btn waves-effect light-green darken-2" type="submit" name="action">Guardar e Imprimir</button>
       		</div>
		</div>
	</div>
	<div class="container" align="center">
		<div class="col s3">
			<div  class="card">
			</div>
		</div>
		<div class="col s4 m6">
			<div  class="card">
				<div class="card-content">
					<div class="input-field col s4">
						<input placeholder="Comentarios" id="coment" type="text" class="validate">
					</div>
				</div>
       		</div>
		</div>
	</div>
	<div class="container" align="center">
		<div class="col s3">
			<div  class="card">
			</div>
		</div>
		<div class="col s4 m6">
			<div class="card">
				<div class="card-content">
					<div col s4">
						<pre>"ENTRENA, INSISTE, PERSISTE Y RESISTE!!!"</pre>
						<pre>Nutriolgo: Nombre Nutriologo                           Ced.Prof. 1234567  Tel. 7711234567</pre> 
					</div>
				</div>
       		</div>
		</div>
	</div>
</form>
@endsection