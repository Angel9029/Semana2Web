<?php 
    $result = "No se hizo la suma todavia.";
    $num1 = "";
    $num2 = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Suma</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="num" id="num" value="<?php echo $num1 ?>">
        <input type="number" name="num2" id="num2" value="<?php echo $num2 ?>">
        <input type="submit" value="Sumar">
    </form>
    <div class="result-container">
        <p>Resultado: <span class="result">
            <?php 
            if( $_SERVER["REQUEST_METHOD"] == "POST"){
                    $num1Str = htmlspecialchars($_POST["num"]);
                    $num2Str = htmlspecialchars($_POST["num2"]);
                    $num1 = floatval($num1Str);
                    $num2 = floatval($num2Str);

                    $result = $num1 + $num2;
                    }
            ?>
            <?php echo $result; ?>
        </span>
    </p>
    </div>
</body>

</html>