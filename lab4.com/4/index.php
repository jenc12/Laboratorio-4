<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrimage.pngink-to-fit=no">
    <link href="../styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 11</title>
    <style>
        h2 {
            color: white;

        }
    </style>
    <script>
        function submitform() {
            document.CreateForm.submit();
        }
    </script>
</head>

<body>

    <?php
    if (!isset($_GET["c"])) {

    ?>

        <div class="login-box">
            <h2>Problema 4</h2>
            <form action="index.php" method="post" name="CreateForm">
                <div class="user-box">
                    <input type="password" name="c" required="">
                    <label>Escriba la Contraseña a cifrar</label>
                </div>
                <a href="#">
                    <input type="submit" value="Submit" style="background:none; border-width:0px; color:White; text-decoration:none;">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <a href="index.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Reset
                </a>
                
            <?php
        } else {
            require_once("poo.php");
            $obj = new trabajo();
            $obj->setContra($_GET["c"]);
            $ran = rand();
            $obj->setsalt($ran);
            
            ?>
            <div class="container">
            
            <h2>Cifrado de Texto</h2>
            
            <table class="table table-light table-striped">
                <tr>
                    <th style="text-align: center;">Contraseña a cifrar</th>
                    <th style="text-align: center;"><?php echo $_GET["c"] ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">SALT</th>
                    <th style="text-align: center;"><?php echo $ran  ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">base64_encode</th>
                    <th style="text-align: center;"><?php echo $obj->base64()  ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">Md5</th>
                    <th style="text-align: center;"><?php echo $obj->md5() ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">Sha1</th>
                    <th style="text-align: center;"><?php echo $obj->Sha1() ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">Crc32</th>
                    <th style="text-align: center;"><?php echo $obj->Crc32() ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">Crypt</th>
                    <th style="text-align: center;"><?php echo $obj->Crypt() ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">Hash-sha224</th>
                    <th style="text-align: center;"><?php echo $obj->sha224() ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">Hash-sha512</th>
                    <th style="text-align: center;"><?php echo $obj->sha512() ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">Hash-whirlpool</th>
                    <th style="text-align: center;"><?php echo $obj->whirlpool() ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">Hash-snefru</th>
                    <th style="text-align: center;"><?php echo $obj->snefru() ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">Hash- haval128,3</th>
                    <th style="text-align: center;"><?php echo $obj->haval1283() ?></th>
                </tr>
                <tr>
                    <th style="text-align: center;">Hash- haval128,5</th>
                    <th style="text-align: center;"><?php echo $obj->haval1285() ?></th>
                </tr>

            </table>
            </div>
            <?php
        }
        if ($_POST) {
            $c=$_POST["c"];
            header("Location: index.php?c=".$c);
        }

            ?>

            </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>