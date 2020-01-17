<?php
require('config.inc.php');

$result = [];

foreach ($tokens as $token1) {
    foreach ($tokens as $token2) {
        foreach ($tokens as $token3) {
            $name = ucfirst($token1).ucfirst($token2).ucfirst($token3);
            if (strlen($name) > $minSize) {
                $result[] = $name;
            }
        }
    }
}

$result = array_unique($result);
sort($result);

echo ';';
foreach ($extensions as $extension) {
    echo '.';
    echo $extension;
    echo ';';
}
echo "\n";

foreach ($result as $name) {
    echo $name;
    echo ';';
    foreach ($extensions as $extension) {
        $return = -1;
        $dumb = [];
        exec('whois '.$name.'.'.$extension.' | grep "No match for domain"', $dumb, $return);

        echo ($return === 0) ? 'Available' : '-';
        echo ';';
    }
    echo "\n";
}
