<?php



if (isset($_POST['priceOne'])) {
    unset($_POST['priceOne']);
    unset($_POST['priceTwo']);
    unset($_POST['priceThree']);
    unset($_POST['priceFour']);
    unset($_POST['priceFive']);
    $posts = selectRange($table, 1, 50);
}
if (isset($_POST['priceTwo'])) {
    unset($_POST['priceOne']);
    unset($_POST['priceTwo']);
    unset($_POST['priceThree']);
    unset($_POST['priceFour']);
    unset($_POST['priceFive']);
    $posts = selectRange($table, 50, 150);
}

if (isset($_POST['priceThree'])) {
    unset($_POST['priceOne']);
    unset($_POST['priceTwo']);
    unset($_POST['priceThree']);
    unset($_POST['priceFour']);
    unset($_POST['priceFive']);
    $posts = selectRange($table, 150, 250);
}

if (isset($_POST['priceFour'])) {
    unset($_POST['priceOne']);
    unset($_POST['priceTwo']);
    unset($_POST['priceThree']);
    unset($_POST['priceFour']);
    unset($_POST['priceFive']);
    $posts = selectRange($table, 250, 350);
}

if (isset($_POST['priceFive'])) {
    unset($_POST['priceOne']);
    unset($_POST['priceTwo']);
    unset($_POST['priceThree']);
    unset($_POST['priceFour']);
    unset($_POST['priceFive']);
    $posts = selectRange($table, 350, 9999);
}
