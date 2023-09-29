<?php
function thirdMax($nums) {
    $nums = array_unique($nums);
    $count = count($nums);

    if ($count < 3) {
        return max($nums);
    }
    rsort($nums);

    return $nums[2];
}

$nums = [2, 2, 3, 1];
$result = thirdMax($nums);
echo "The third distinct maximum number is: $result";