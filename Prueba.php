<?php
include("Conexion.php");
$con=conectar();
$sql="select * from caracteristicas";
$query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="conteiner mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="Agregar.php" method="POST">
                    <input type="text" class="form.control mb-3" name="ID_ANIMAL" placeholder="Id Animal"><br>
                    <input type="text" class="form.control mb-3" name="NOMBRE" placeholder="Nombre "><br>
                    <input type="text" class="form.control mb-3" name="COLOR" placeholder="Color"><br>
					<input type="text" class="form.control mb-3" name="RAZA" placeholder="Raza"><br>
                    <input type="submit" class="btn btn-primary btn-block" name="" value="Agregar"> 
                </form>
            </div>
        </div>
    </div>

	<div class="col-md-8">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID_ANIMAL</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">COLOR</th>
	  <th scope="col">RAZA</th>
    </tr>
  </thead>
  <tbody>
      <?php

      while($row=mysqli_fetch_array($query)) {
        ?>

        <tr>
            <td><?php echo $row['ID_ANIMAL']?></td>
            <td><?php echo $row['NOMBRE']?></td>
            <td><?php echo $row['COLOR']?></td>
			<td><?php echo $row['RAZA']?></td>

            <td><a href="Actualiza.php?id=<?php echo $row['ID_ANIMAL']?>" class="btn btn-info">Actualizar</a></td>
            <td><a href="Eliminar.php?id=<?php echo $row['ID_ANIMAL']?>" class="btn btn-danger">Eliminar</a></td>
        </tr>
      <?php 
      }
      ?>
    
  </tbody>
</table>
    
</body>
</html>