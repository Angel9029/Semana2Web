<?php 
    $result = "No se hizo el factorial todavia.";
    $num1 = "";
    $num2 = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pages.css">
    <title>Document</title>
</head>

<body>
    <div class="pages">
        <a href="./index.php" class="site"><span>Home</span></a>
        <a href="./suma.php" class="site"><span>Suma</span></a>
        <a href="./factorial.php" class="site"><span>Factorial</span></a>
        <a href="./nombre.php" class="site"><span>Nombre</span></a>
    </div>
    <h1>Factorial</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input class="input" type="number" name="num" id="num" value="<?php echo $num1 ?>">
        <input type="submit" value="Factorizar">
    </form>
    <div class="result-container">
        <p>Resultado: <span class="result">
            <?php 
            if( $_SERVER["REQUEST_METHOD"] == "POST"){
                    $num1Str = htmlspecialchars($_POST["num"]);
                    $num1 = floatval($num1Str);
                    $result = 1;
                        for($i = 1; $i <= $num1; $i++) {
                            $result = $i * $result;
                        }
                    }
            ?>
            <?php echo $result; ?>
        </span>
    </p>
    </div>
</body>

</html>