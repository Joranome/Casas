<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		.card{
			cursor: pointer;
		}
		.card:hover{
			background-color: #33C;
		}
		img{
			border-radius: 5px;
		}
		a,a:hover{
			color: black;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<br>
		<div class="row">
			<div class="col-2 d-none d-md-block d-lg-block d-xl-block">
				<img src="https://www.websmultimedia.com/style/img/trabajos/logotipo-areco.jpg" width="100px">
			</div>
			<div class="col-3">
				<h3 style="color:#33C;"><u>Empresa</u></h3>
			</div>
			<div class="col-7 col-md-5 col-lg-5 col-xl-5">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">Buscar:&nbsp;&nbsp;</span>
						<input type="text" class="form-control"  style="border-radius: 10px;">
					</div>
				</div>
			</div>
			<div class="col-2">
				<button>Contacto</button>
			</div>
		</div>
		<div class="row">
		<?php
			$conexion=mysqli_connect("localhost","root","","casasroberto") or die("Problemas con la conexión");
			$registros=mysqli_query($conexion,"Select * from casas") or die("Problemas en el select: ".mysqli_error($conexion));
			while ($reg=mysqli_fetch_array($registros)) {
		?>
		<div class="col-6 col-md-4 col-lg-3 col-ex-3">
			<div class="card">
				<a href="info.php?id=<?php echo $reg['id']; ?>">
					<div class="card-body">
						<center>
							<img src="<?php echo $reg['Img']; ?>" height="100px" class="img-fluid">
							<h3><?php echo $reg['Colonia']; ?> #<?php echo $reg['NumCasa']; ?> <?php echo $reg['Calle']; ?> CP <?php echo $reg['CodPostal']; ?> <?php echo $reg['Ciudad']; ?></h3>
							<b>$<?php echo $reg['Precio']; ?></b>
						</center>
					</div>
				</a>
			</div><?php
				}
			?>
		</div>


	</div>
	</div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>