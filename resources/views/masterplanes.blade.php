<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo')</title>
		<!-- Icono -->
        <link href="icono.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/css.css">
    </head>
	<body class="grey lighten-2">
	<div class="container">
        <div class="row">
            <div class="col s4">
                <div  class="card">
                </div>
            </div>
            <div class="col s4">
                <div  class="card">
                    <div class="card-image">
                        <img src="logo1.jpg">
                    </div>
                </div>
            </div>
            <div class="col s4">
                <div  class="card">
                </div>
            </div>
        </div>
    </div>
		@yield('contenido')
	<footer align='center' >Copyrigh - SimpleCode  Derechos Reservados  &copy;</footer>
	</body>
</html>