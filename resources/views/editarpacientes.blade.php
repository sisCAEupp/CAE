@extends('masterpacientes')
@section('titulo', 'Pacientes')
@section('entrada', 'Editar Paciente Nombre')

@section('contenido')
<form name="inicio" method="post" action="verificar.php">
	<div class="container" align="center">
		<div class="row"><div class="col s4 m6">
			<div class="card">
				<div class="card-content">
					<div class="card-title grey-text-accent-4" class="input-field col s12">Nuevo Paciente</div>
					<div class="input-field col s14">
						<input placeholder="Nombres" id="first_name" type="text" class="validate">
						<input placeholder="Apellidos" id="last_name" type="text" class="validate">
						<input placeholder="Dirección" id="direction" type="text" class="validate">
						<input placeholder="Telefono" id="number" type="tel" class="validate">
						<input placeholder="Correo" id="email" type="email" class="validate">
					</div>
					<div class="row">
						<div class="input-field col s4">
       						<button class="btn waves-effect light-green darken-2" type="submit" name="action">Guardar</button>
       					</div>
       				</div>
				</div>
			</div>
		</div>
		<div class="col s4 m4">
			<div  class="card">
				<div class="card-content">
					<div class="card-title grey-text-accent-4" class="input-field col s12">Datos Inbody</div>
					<div class="input-field col">
						<input placeholder="Altura" id="height" type="number" step="any" class="validate">
						<input placeholder="Peso" id="weight" type="number" step="any" class="validate">
						<input placeholder="Masa Muscular" id="MM" type="number" step="any" class="validate">
						<input placeholder="Porcentaje Grasa Corporal" id="PGC" type="number" step="any" class="validate">
						<input placeholder="Indice de Masa Corporal" id="IMC" type="number" step="any" class="validate">
						<input placeholder="Tasa Metabólica Básica" id="TMB" type="number" class="validate">
						<input placeholder="Relación Cintura-Cadera" id="RCC" type="number" step="any" class="validate">
						<input placeholder="Nivel de Grasa Viscesal" id="NVG" type="number" class="validate">	
       					<button class="btn waves-effect light-green darken-2" type="submit" name="action">Guardar</button>
					</div>
					<div class="row">
						<div class="input-field col s4">
       					</div>
       				</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection