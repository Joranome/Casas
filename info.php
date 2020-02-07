<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<br>
	<div class="row">
		<div class="col-2 d-none d-md-block d-lg-block d-xl-block">
				<img src="img/logo3.png" width="100px">
			</div>
			<div class="col-3">
				<h3 style="color:#77A;"><u>Empresa</u></h3>
			</div>
			<div class="col-7 col-md-5 col-lg-5 col-xl-5">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">Buscar:&nbsp;&nbsp;</span>
						<input type="text" class="form-control" style="border-radius: 10px;font-size: 10px;">
					</div>
				</div>
			</div>
			<div class="col-2">
				<a href="contacto.php">Contacto</a>
			</div>
	</div><br>
	<div class="row">
		<?php
		$conexion=mysqli_connect("localhost","root","","casasroberto") or die("Problemas con la conexión");
			$registros=mysqli_query($conexion,"Select * from casas where id=".$_GET['id']) or die("Problemas en el select: ".mysqli_error($conexion));
			$timg=0;
			while ($reg=mysqli_fetch_array($registros)) {
				$timg++;
		?>
		<script type="text/javascript">
			var img=["<?php echo $reg['Img']; ?>"];
		</script>
		<div class="col-12">
			<h3><?php echo $reg['Colonia']; ?> #<?php echo $reg['NumCasa']; ?> <?php echo $reg['Calle']; ?> CP <?php echo $reg['CodPostal']; ?> <?php echo $reg['Ciudad']; ?></h3>
		</div>
		<?php
		}
		?>
	</div>
	
	<div class="row">
		<script type="text/javascript">
		<?php
			$registros=mysqli_query($conexion,"Select * from imagenes where id_casa=".$_GET['id']) or die("Problemas en el select: ".mysqli_error($conexion));
			while ($xd=mysqli_fetch_array($registros)) {
				$timg++;?>
				img.push("<?php echo $xd['img']; ?>");
				<?php
			}?>

			</script>
				<?php
			$registros=mysqli_query($conexion,"Select * from casas where id=".$_GET['id']) or die("Problemas en el select: ".mysqli_error($conexion));
			while ($reg=mysqli_fetch_array($registros)) {
		?>
		<div class="col-12 col-md-6 col-lg-6 col-xl-6">
			<img style="border-radius: 5px;" src="" width="100%" id="IMG"><br><?php
				for($i=0;$i<$timg;$i++){?>
					<button onclick="cambiar(<?php echo $i; ?>)"><?php echo $i+1; ?></button>
					<?php
				}
			?>
		</div>
		<script type="text/javascript">
		var indeximg=0;
		document.getElementById("IMG").src=img[indeximg];
		var myvar=window.setInterval(cambiarA, 1000);
		function cambiar(a){
			document.getElementById("IMG").src=img[a];
			window.clearInterval(myvar);
			window.setTimeout(esperar,2000);
		}
		function esperar(){
			myvar=window.setInterval(cambiarA, 1000);

		}
		function cambiarA(){
			if(indeximg<(img.length-1)){
				indeximg=indeximg+1;
			}else{
				indeximg=0;
			}
			document.getElementById("IMG").src=img[indeximg];
		}
	</script>
		<div class="d-none d-md-none d-xl-block d-lg-block col-3" style="font-size: 20px;"><br>
			<b>Recamaras: </b><u><?php echo $reg['Recamaras']; ?></u><br><br>
			<b>Baños: </b><u><?php echo $reg['Banos']; ?></u><br><br>
			<b>Garage: </b><u><?php echo $reg['Garajes']; ?></u><br><br>
			<b>Plantas: </b><u><?php echo $reg['Plantas']; ?></u><br><br>
		</div>
		<div class="d-none d-md-none d-xl-block d-lg-block col-3" style="font-size: 20px;"><br>
			<b>Area Construida: </b><u><?php echo $reg['AreaConstruida']; ?></u><br><br>
			<b>Area Total: </b><u><?php echo $reg['AreaTotal']; ?></u><br><br>
			<b>Edad: </b><u><?php echo $reg['Edad']; ?></u><br><br>
		</div>

		<div class="d-none d-lg-none d-xl-none d-md-block col-3" style="font-size: 15px;"><br>
			<b>Recamaras: </b><u>Ejemplo</u><br><br>
			<b>Baños: </b><u>Ejemplo</u><br><br>
			<b>Garage: </b><u>Ejemplo</u><br><br>
			<b>Plantas: </b><u>Ejemplo</u><br><br>
		</div>
		<div class="d-none d-lg-none d-xl-none d-md-block col-3" style="font-size: 15px;"><br>
			<b>Area Construida: </b><u>Ejemplo</u><br><br>
			<b>Area Total: </b><u>Ejemplo</u><br><br>
			<b>Edad: </b><u>Ejemplo</u><br><br>
		</div>

		<div class="d-lg-none d-xl-none d-md-none col-6" style="font-size: 20px;"><br>
			<b>Recamaras: </b><u>Ejemplo</u><br><br>
			<b>Baños: </b><u>Ejemplo</u><br><br>
			<b>Garage: </b><u>Ejemplo</u><br><br>
			<b>Plantas: </b><u>Ejemplo</u><br><br>
		</div>
		<div class="d-lg-none d-xl-none d-md-none col-6" style="font-size: 20px;"><br>
			<b>Area Construida: </b><u>Ejemplo</u><br><br>
			<b>Area Total: </b><u>Ejemplo</u><br><br>
			<b>Edad: </b><u>Ejemplo</u><br><br>
		</div>
		<?php
			}
		?>
	</div>
</div>
<a href="index.php">Menu Principal</a>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>