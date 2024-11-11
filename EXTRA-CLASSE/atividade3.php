<?php

$i = 0;

for ($i = 0; $i <= 50; $i++) {
    echo $i . " ";
}

echo "<br>" . "<br>";

$i = 0;

while($i <= 50){
    if ($i % 2 == 0) {
        echo $i . " ";
    }

    $i++;
}
