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

    <header>
        <img class="logo" src="./assets/img/logo.svg" alt="">
    </header>

    <main>
        <h1>Crea il tuo account</h1>
        <div class="register">

            <form action="assets/db/register.php" method="post" id="account-register">
                <label for="firstName">Inserisci il nome</label>
                <input type="text" id="firstName" placeholder="Mario" name="firstName" />

                <label for="lastName">Inserisci il cognome</label>
                <input type="text" id="lastName" placeholder="Rossi" name="lastName" />

                <label for="email">Inserisci l'email</label>
                <input type="email" id="email" placeholder="email@example.com" name="email" />

                <label for="password">Inserisci la password</label>
                <div class="psw_box">
                    <input type="password" id="password" placeholder="Scegli una password" id="password" name="password" />
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>

                </div>
                <input type="submit" value="REGISTRATI" />
                <a class="log-register" href="index.php">Hai già un account? <strong>Accedi</strong></a>
            </form>

        </div>
    </main>

    <script src="assets/js/script.js"></script>
</body>

</html>