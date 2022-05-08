<?php

include("Conexion.php");
$con=conectar();
$ID=$_GET['id'];     
$sql="SELECT * from caracteristicas where ID_ANIMAL='".$ID."'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="conteiner mt-5">
        <form action="Actu.php" method="POST">
            <input type="hidden" class="form.control mb-3" name="ID_ANIMAL" value="<?php echo $row['ID_ANIMAL']?>">
            <input type="text" class="form.control mb-3" name="NOMBRE" value="<?php echo $row['NOMBRE']?>">
            <input type="text" class="form.control mb-3" name="COLOR" value="<?php echo $row['COLOR']?>">
            <input type="text" class="form.control mb-3" name="RAZA" value="<?php echo $row['RAZA']?>">
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar"> 
        </form>

    </div>
    
</body>
</html>