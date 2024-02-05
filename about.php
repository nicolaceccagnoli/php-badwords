<?php

    // Intercetto i parametri da stampare in pagina
    $paragrafo = $_GET['textarea'];
    $censored = $_GET['censored'];

    // Utilizzo una funzione per contare il numero di caratteri digitati dall'utente nella textarea
    $length = strlen($paragrafo);

    // Utilizzo una funzione per sostituire il valore digitato dall'utente nell'input
    $replaced = str_replace($censored, '****',  $paragrafo);
    $replacedLength = strlen($replaced);

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
        <?php echo $replaced; ?>
    </h3>

    <h5>
        Numero di caratteri con censura: <?php echo $replacedLength; ?>
    </h5>

</div>

</body>
</html>