<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            background: purple;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            text-align: center;
        }        
    </style>
    <!-- tag php -->
    <?php
        // variabile nome
        $name = strlen($_GET['name']);

        // variabile email
        $mailC = strpos($_GET['mail'], '@');
        $mailP = strpos($_GET['mail'], '.');

        // variabile etá
        $age = $_GET['age'];

        // validitá di get
        $nome = false;
        $email = false;
        $eta = false;
    ?>
</head>
<body>
    <h1>
        <?php
            // condizione validitá per il nome
            if ($name > 3) {
                $nome = true;
            } else {
                $nome = false;
            }
            // var_dump($nome);

            // condizione validitá per email
            if ($mailC === false || $mailP === false) {
                $email = false;
            } else {
                $email = true;
            }
            // var_dump($email);

            //condizione validitá per etá


            // condizione di stampa per accesso
            if ($nome === true && $email === true) {
                echo 'Accesso riuscito';
            } else {
                echo 'Accesso negato';
            }

        ?>
    </h1>
</body>
</html>

<!-- 
GOAL: 
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:

1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.

Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" 