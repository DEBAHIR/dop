<div>
<?php
$arr = [1, 2, 3, 4, 5, 6];
$sum_first_half = array_sum(array_slice($arr, 0, count($arr) / 2));
echo $sum_first_half;
?>
</div>
<div>
<?php
$arr = [1, 2, 3, 4, 5, 6];
$sum_first_half = array_sum(array_slice($arr, 0, count($arr) / 2));
$sum_second_half = array_sum(array_slice($arr, count($arr) / 2));
echo $sum_first_half / $sum_second_half;
?>
</div>
<div>
<?php
function search_in_array($arr, $value) {
    return in_array($value, array_merge(...$arr));
}

$multi_arr = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
echo search_in_array($multi_arr, 5) ? 'found' : 'not found';
?>
</div>
<div>
<?php
function find_min_element($arr) {
    return min(array_merge(...$arr));
}
$multi_arr = [[3, 7, 2], [9, 4, 6], [1, 8, 5]];
echo find_min_element($multi_arr);
?>
</div>