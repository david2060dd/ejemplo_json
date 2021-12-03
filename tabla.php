<?php
$servername = "localhost";
$username = "phpuser";
$password = "shampopo64";
$dbname = "myDB";

$Req=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password );
$Req->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$Qfunct = "SELECT * FROM Myguests";
$respuesta = $Req->prepare($Qfunct);
$respuesta->execute();

$objeto = array();

while ($row = $respuesta->fetch(PDO::FETCH_ASSOC)){
    
$users ['Usuarios registrados'][] = $row;

}
echo json_encode($users);
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
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
<body>
    <br>
<a class="btn btn-primary" href="index.html" role="button" class="btn btn-light">index</a>

</body>


  </html>
