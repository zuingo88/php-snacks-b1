<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zuingo88 - pappa</title>
    <style>
        body {
            background-color: black;
            padding: 30px;
            display: flex;
            flex-wrap: wrap;
        }

        .square {
            margin: 30px;
            padding: 20px;
            text-align: center;
            background-color: lightgrey;
            border: solid 2px white;
            border-radius: 10px;
        }

        h2.red {
            color: crimson;
        }

        h3 {
            color: white;
        }
    </style>
</head>

<body>

    <div class="square">

        <?php
        //Passare come parametri GET name, mail e age
        //verificare che name sia più lungo di 3 caratteri,
        //che mail contenga un punto e una chiocciola
        //e che age sia un numero.
        //Se tutto è ok stampare "Accesso riuscito",
        //altrimenti "Accesso negato"

        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        if (strlen($name) < 3 || strpos($mail, '.') === false || strpos($mail, '@') === false || is_numeric($age) === false) {

            echo '<h2 class="red">OPS!<br>Accesso Negato</h2>'
                . '<h3>Riprova</h3>';
        } elseif ($age < 18) {

            echo '<h2 class="red">OPS!<br>Non sei ancora maggiorenne</h2>';
        } else {

            echo '<h3>Accesso Riuscito</h3>'
                . '<h2>Bentornato' . ' ' . $name . '!</h2>';
        }

        ?>

    </div>
</body>

</html>