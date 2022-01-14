<?php

$numbers = [];
$iterations = 3;

for ($i = 0; $i < $iterations; $i++) {
    $numbers[] = random_int(1, 6);
}

echo "Vous avez tiré :<br>\n";

foreach ($numbers as $number) {
    echo "- un $number<br>\n";
}
