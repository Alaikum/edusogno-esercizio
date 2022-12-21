<?php
session_start();

if (!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true) {
    header("location: login.html");
    exit;
}
?>

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

    <?php

    include_once __DIR__ . '/assets/db/User.php';

    $result = User::all();


    ?>
    <h1>Ciao <?= $_SESSION['nome'] ?> ecco i tuoi eventi.</h1>";

    <?php

    $events = $result;


    if (count($events) > 0) {
        for ($i = 0; $i < count($result); $i++) {

            foreach ($events[$i] as $event) {
                echo ($event);
            }
        }
    } else {
        echo '<h3>Non ci sono eventi</h3>';
    }

    ?>

    <script src="assets/js/script.js"></script>
</body>

</html>