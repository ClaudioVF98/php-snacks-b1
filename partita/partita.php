<?php

$arr_partite = [
    [
        ['nome'     => 'Olimpia Milano',
        'di_casa'   => true,
        'punteggio' => 55
        ],
        ['nome'     => 'Cantù',
        'di_casa'   => false,
        'punteggio' => 60
        ],
    ],
    [
        ['nome'     => 'Bari',
        'di_casa'   => true,
        'punteggio' => 78
        ],
        ['nome'     => 'Pescara',
        'di_casa'   => false,
        'punteggio' => 100
        ],
    ],
    [
        ['nome'     => 'Roma',
        'di_casa'   => true,
        'punteggio' => 101
        ],
        ['nome'     => 'Torino',
        'di_casa'   => false,
        'punteggio' => 99
        ],
    ]
]; 
var_dump($arr_partite); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr_lenght = count($arr_partite);
    for ($_i = 0; $_i < $arr_lenght; $_i++) {
        $partita = $arr_partite[$_i];
         echo "{$partita[0]['nome']} - {$partita[1]['nome']} | {$partita[0]['punteggio']} - {$partita[1]['punteggio']}";
         echo '<br>'; 
    }; ?>
</body>
</html>