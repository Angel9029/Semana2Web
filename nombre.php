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
    <title>Document</title>
</head>

<body>
    <h1>Nombre completo</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" id="name" value="<?php echo $nameStr ?>">
        <input type="text" name="lastname" id="lastname" value="<?php echo $lastnameStr ?>">
        <input type="submit" value="Nombre completo">
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