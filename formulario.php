<?php
session_start();
$nombre = "";
$email = "";
$edad = "";
$pais = "";
$Correcnom = "/^[a-zA-Z][a-zA-Z0-9_-]{4,10}$/";
$Correcemail = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
$Correcedad = "/^[0-9]{2}$/";
$mensaje = "";


    
    

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $pais = $_POST["pais"];
        if($pais == ""){
            $mensaje = "introduzca pais";
        }

        if(isset($_POST["nombre"])){
            $nombre = $_POST["nombre"];
            
        }
        if(preg_match($Correcnom,$nombre)){
            $_SESSION["nombre"] = $nombre;
        }else{
            $mensaje = "error al introducir nombre";
        }
        
        if(isset($_POST["email"])){
            $email = $_POST["email"];
            
        }
        if(preg_match($Correcemail,$email)){
            $_SESSION["email"] = $email;
        }else{
            $mensaje = "error al introducir email";
        }

        if(isset($_POST["edad"])){
            $edad = $_POST["edad"];
            
        }
        if(preg_match($Correcedad,$edad)){
            $_SESSION["edad"] = $edad;
        }else{
            $mensaje = "error al introducir edad";
        }

        
            $pais = $_POST["pais"];
            $_SESSION["pais"] = $pais;
        



        if ($mensaje == ""){
            header("location: informacion.php");
            exit();
        }
        
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./formulario.php" method="post">
        <select name="pais" id="pais">
                <option value="">elija pais</option>
                <option value="españa">España</option>
                <option value="italia">Italia</option>
                <option value="francia">Francia</option>
                <option value="mexico">mexico</option>
        </select>
        <input type="submit" value="elegir pais"><br>

        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="nombre..."><br>
        
        <label for="email">email:</label>
        <input type="text" name="email" id="email" placeholder="email..."><br>

        <label for="edad">edad</label>
        <input type="text" name="edad" id="edad" placeholder="edad..."><br>

        

    <button type="submit">enviar</button>
        
    </form>

    <p><?php echo $mensaje ?></p>
    <?php
     
    ?>
</body>
</html>