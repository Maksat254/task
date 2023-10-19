<?php
function find($nums) {
    $maxCount = 0;
    $currentCount = 0;

    foreach ($nums as $num) {
        if ($num == 1) {
            $currentCount++;
        } else {
            if ($currentCount > $maxCount) {
                $maxCount = $currentCount;
            }
            $currentCount = 0;
        }
    }

    if ($currentCount > $maxCount) {
        $maxCount = $currentCount;
    }

    return $maxCount;
}

$nums = [1, 1, 0, 1, 1, 1];
$result = find($nums);
echo "Максимальное количество 1: $result";
