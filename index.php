<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Paolo',  'surname' => 'Gilardi',   'gender' => 'M'],
    ['name' => 'Marta',  'surname' => 'Rossi',   'gender' => 'F'],
];

foreach ($users as $user) {
    if ($user['gender'] == 'M') {
        echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    } elseif ($user['gender'] == 'F') {
        echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
    } else {
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
}