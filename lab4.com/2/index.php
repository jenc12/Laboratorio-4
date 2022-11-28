<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema2</title>
</head>
<body>
    <h1>Problema 2</h1>
    <br> 
    <form action="index.php" method="post">
    <p>Introduzca la cantidad de niños: <input type="text" name="boy"></p>
    <br>
    <p>Introduzca la cantidad de niñas: <input type="text" name="girl"></p>
    <br>
    <input type="submit">
    <?php
        if ($_POST){
            require_once("porcentaje.php");
            $obj = new Porcentaje();
            $obj->setBoy($_POST["boy"]);
            $obj->setGirl($_POST["girl"]);
            echo $obj->calcular();
        }
    ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>