<?php
$servername = "localhost";
$username = "phpuser";
$password = "shampopo64";
$dbname = "myDB";
$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$correo = $_POST['mail'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('$nombre', '$apellido', '$correo')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>

<!doctype html> 
<html lang="es">
<head>
        
        
        <meta charset="UTF-8">
        <meta name ="title" content="Ejemplo-json">
        <meta name ="description" content="Ejemplo-json">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
<body>
  <br>
<a class="btn btn-primary" href="index.html" role="button" class="btn btn-light">index</a>
<a class="btn btn-primary" href="tabla.php" role="button" class="btn btn-light">tablas</a>
</body>


  </html>