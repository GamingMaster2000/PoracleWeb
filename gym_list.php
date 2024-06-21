<?php

include_once "./header.php";

$gym_limit = 0; // Not limiting the gyms here

$list = get_gym_list($_POST['q']);

echo json_encode($list);

?>