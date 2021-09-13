<?php 
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM php";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
	    $apellido = $row['apellido'];
	    $colonia = $row['colonia'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>ID: </b> <?php echo $id ?><br>
        		    <b>Relleno: </b> <?php echo $apellido ?><br>
        		    <b>Colonia: </b> <?php echo $colonia ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>