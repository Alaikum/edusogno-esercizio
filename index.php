<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../edusogno-esercizio/assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>

    <?php

    include_once __DIR__ . '/assets/db/User.php';





    ?>
    <main>
        <header>
            <img class="logo" src="./assets/img/logo.svg" alt="">
        </header>

        <h1>Hai già un account?</h1>
        <div class="register">

            <form class="account" action="assets/db/login.php" method="post" id="login">
                <label for="email">Inserisci l'email</label>
                <input type="email" id="email" placeholder="name@example.com" name="email" required />

                <label for="password">Inserisci la password</label>
                <div class="psw_box">
                    <input type="password" id="password" placeholder="Scrivila qui" name="password" required />

                </div>
                <input type="submit" value="ACCEDI" />
                <a class="log-register" href="registration.php">Non hai ancora un profilo? <strong>Registrati</strong></a>
            </form>

        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>