<?php

    $paragrafo = $_GET['textarea'];
    $censored = $_GET['censored'];

    $length = strlen($paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>  

<div class="container">
    <p>
        <?php echo $paragrafo; ?>

        <br>
        <br>
        <br>

        <h5>
            Numero di caratteri digitati: <?php echo $length; ?>
        </h5>

    </p>

    <h3>
        <?php echo $censored; ?>
    </h3>
</div>

</body>
</html>