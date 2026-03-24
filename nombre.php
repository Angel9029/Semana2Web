<?php 
    $result = "No se hizo el factorial todavia.";
    $nameStr = "";
    $lastnameStr = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pages.css">
    <title>Document</title>
</head>

<body>
    <div class="pages">
        <a href="./index.php" class="site"><span>Home</span></a>
        <a href="./suma.php" class="site"><span>Suma</span></a>
        <a href="./factorial.php" class="site"><span>Factorial</span></a>
        <a href="./nombre.php" class="site"><span>Nombre</span></a>
    </div>
    <h1>Nombre completo</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input class="input" type="text" name="name" id="name" value="<?php echo $nameStr ?>">
        <input class="input" type="text" name="lastname" id="lastname" value="<?php echo $lastnameStr ?>">
        <input class="btn" type="submit" value="Nombre completo">
    </form>
    <div class="result-container">
        <p>Nombre completo: <span class="result">
            <?php 
            if( $_SERVER["REQUEST_METHOD"] == "POST"){
                    $nameStr = htmlspecialchars($_POST["name"]);
                    $lastnameStr = htmlspecialchars($_POST["lastname"]);
                    $result = $nameStr . " " . $lastnameStr ."";
                    }
            ?>
            <?php echo $result; ?>
        </span>
    </p>
    </div>
</body>

</html>