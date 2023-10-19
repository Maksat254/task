<?php
$associativeArray = [
    'один' => 1,
    'два' => 2,
    'три' => 3,
];

$keys = array_keys($associativeArray);

for ($i = count($keys) - 1; $i >= 0; $i--) {
    $key = $keys[$i];
    $value = $associativeArray[$key];
    echo "$key: $value\n";
}
