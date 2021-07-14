<?php
if(isset($_POST['valor_c'])){

$c = $_POST['valor_c'];

$x = $b*$c/$a;

echo '<h1>La placa de video va a costar '. number_format($x, 2, '.', ''). ' pesos.</h1>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Goles</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center" id="form_jugadores">
			<h1 class="text-center">Jugadores</h1>

			<div class="card col-md-7">
	<div class="card-body">
	<div class="mb-3 row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Jugador 1</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="jugador1_name" name="jugador1" >
				</div>
			</div>
			<div class="mb-3 row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Jugador 2</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="jugador2_name" name="jugador2">
				</div>
			</div>
			<div class="d-grid gap-2 d-block">
			<button type="button" class="btn btn-success"id="boton_jugar">JUGAR</button>
			</div>
	</div>
			</div>
		</div>

<div class="row justify-content-center mt-4" id="content" style="display: none;">
	<div class="card col-md-4">
		<div class="card-header text-center bg-success">
		<input type="text" disabled readonly class="form-control-plaintext text-center text-light" id="jugador1_nombre">
		</div>
		<div class="card-body text-center">
			<h1><input type="number" disabled readonly class="form-control-plaintext text-center" id="jugador1_resultado" value="0"></h1>
		</div>
		<div class="card-footer text-center bg-success">
			<a class="btn btn-outline-light" id="jugador1_gol">GOL!</a>
		</div>
	</div>
	<div class="card col-md-4">
		<div class="card-header text-center bg-success">
		<input type="text" disabled readonly class="form-control-plaintext text-center text-light" id="jugador2_nombre">
		</div>
		<div class="card-body text-center">
			<h1><input type="number" disabled readonly class="form-control-plaintext text-center" id="jugador2_resultado" value="0"></h1>
		</div>
		<div class="card-footer text-center bg-success">
			<a class="btn btn-outline-light" id="jugador2_gol">GOL!</a>
		</div>
	</div>
</div>
<img src="maradroga.gif" class="img-responsive mt-3 w-25 h-25 mx-auto" id="img-festejo" style="display: none;" alt="">
</div>
<script>


document.getElementById("boton_jugar").addEventListener("click", function( event ) {

	const jugador1 = document.getElementById('jugador1_name').value.toUpperCase() ;
	const jugador2 = document.getElementById('jugador2_name').value.toUpperCase() ;

	if(jugador1 == "" || jugador2 == "" ) {
		alert('Debe completar el formulario con los nombres')
		return false;
	}

	document.getElementById("form_jugadores").style.display = "none";
	document.getElementById("content").style.display = "flex";
    
	document.getElementById('jugador1_nombre').value = jugador1;
	document.getElementById('jugador2_nombre').value = jugador2;
  });

const butjug1 = document.getElementById('jugador1_gol');
const butjug2 = document.getElementById('jugador2_gol');

butjug1.addEventListener("click", function( event ) {
	document.getElementById("jugador1_resultado").value ++;
	let imagen = document.getElementById("img-festejo");
	imagen.style.display = "block";

	setTimeout(function(){
		imagen.style.display = "none";
	}, 2000)
  });
  butjug2.addEventListener("click", function( event ) {
	document.getElementById("jugador2_resultado").value ++;

	let imagen = document.getElementById("img-festejo");
	imagen.style.display = "block";

	setTimeout(function(){
		imagen.style.display = "none";
	}, 2000)
  });

</script>
</body>
</html>
