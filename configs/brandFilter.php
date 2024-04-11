<?php


if (isset($_POST['Ford'])) {
    unset($_POST['Nissan']);
    unset($_POST['Dodge']);
    unset($_POST['Kia']);
    unset($_POST['Ford']);
    $posts = selectBrand($table, 'ford');
}


if (isset($_POST['Nissan'])) {
    unset($_POST['Nissan']);
    unset($_POST['Dodge']);
    unset($_POST['Kia']);
    unset($_POST['Ford']);
    $posts = selectBrand($table, 'nissan');
}



if (isset($_POST['Dodge'])) {
    unset($_POST['Nissan']);
    unset($_POST['Dodge']);
    unset($_POST['Kia']);
    unset($_POST['Ford']);
    $posts = selectBrand($table, 'dodge');
}



if (isset($_POST['Kia'])) {
    unset($_POST['Nissan']);
    unset($_POST['Dodge']);
    unset($_POST['Kia']);
    unset($_POST['Ford']);
    $posts = selectBrand($table, 'kia');
}
if (isset($_POST['Toyota'])) {
    unset($_POST['Nissan']);
    unset($_POST['Toyota']);
    unset($_POST['Dodge']);
    unset($_POST['Kia']);
    unset($_POST['Ford']);
    
    $posts = selectBrand($table, 'Toyota');
}
if (isset($_POST['BMW'])) {
    unset($_POST['Nissan']);
    unset($_POST['BMW']);
    unset($_POST['Toyota']);
    unset($_POST['Dodge']);
    unset($_POST['Kia']);
    unset($_POST['Ford']);
    
    $posts = selectBrand($table, 'BMW');
}