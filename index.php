<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <header>
        <h1>
            PHP Badwords
        </h1>
    </header>

    <main>
        <div class="container">

            <form action="./about.php" method="GET">

                <label for="textarea">
                    Scrivi un testo
                </label>

                <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>

                <label for="censored">
                    Scrivi la parola che vuoi nascondere
                </label>
                <input type="text" name="censored" id="censored">

                <button>
                    INVIA
                </button>
            </form>
        </div>
    </main>
</body>
</html>