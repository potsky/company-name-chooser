<?php
require('config.inc.php');

echo ';';
foreach ($extensions as $extension) {
    echo '.';
    echo $extension;
    echo ';';
}
echo "\n";

foreach ($consonnes as $c1) {
    foreach ($voyelles as $v2) {
        foreach ($consonnes as $c3) {
            $name = $c1 . $v2 . $c3 . $v2 . $c1;
            echo $name;
            echo ';';
            foreach ($extensions as $extension) {
                $return = -1;
                $dumb = [];
                exec('whois '.$name.'.'.$extension.' | grep -e "No match for domain" -e "No entries found"', $dumb, $return);

                echo ($return === 0) ? 'Available' : '-';
                echo ';';
            }
            echo "\n";
        }
    }
}
