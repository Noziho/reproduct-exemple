<?php
$tab = [
    'first',
    ["oui" => "non", "jcpa" => "oui oui"],
    ["non" => "non", "jcpas" => "oui oui"],

];

foreach ($tab as $value) {
    if (is_array($value)) {
        foreach ($value as $key => $item) {
            echo $key ." => ". $item ."<br>";
        }
    }
    else {
        echo $value."<br>";
    }
}

echo $tab[1]["oui"];

