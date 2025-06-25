<?php 
    $friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];
    echo '<pre>';
    print_r(array_chunk(array_change_key_case($friends),2,true));
    echo '</pre>';
?>
