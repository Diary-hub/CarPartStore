<?php

$table = 'users';

$id = '';
$firstName = '';
$lastName = '';
$phone = '';
$email = '';
$address = '';


$users = selectAll($table);


if (isset($_POST['signUp'])) {

    unset($_POST['signUp']);

    $user_id = create($table, $_POST);
    // dd( $topic_id );

    header('location: signupOk.php');
    exit();
}
