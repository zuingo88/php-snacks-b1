<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zuingo88 - php-snacks-b1</title>
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

        h2 {
            color: crimson;
        }
    </style>
</head>

<body>
    <?php
    //Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array
    //avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla
    //squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    //Olimpia Milano - Cantù | 55-60

    $giornata = [
        [
            'casa' => 'Milan',
            'ospite' => 'Inter',
            'ptCasa' => '6',
            'ptOspite' => '0',
        ],
        [
            'casa' => 'Roma',
            'ospite' => 'Lazio',
            'ptCasa' => '4',
            'ptOspite' => '0',
        ],
        [
            'casa' => 'Taranto',
            'ospite' => 'Juventus',
            'ptCasa' => '3',
            'ptOspite' => '1',
        ],
        [
            'casa' => 'Grifondoro',
            'ospite' => 'Serpeverde',
            'ptCasa' => '8',
            'ptOspite' => '14',
        ],
    ];

    for ($i = 0; $i < count($giornata); $i++) {

        $partita = $giornata[$i];

        echo '<div class="square">'
            . '<h3>' . $partita['casa'] . ' - ' . $partita['ospite'] . '</h3>'
            . '<h2>' . $partita['ptCasa'] . ' - ' . $partita['ptOspite'] . '</h2>'
            . '</div>';
    }

    ?>
</body>

</html>