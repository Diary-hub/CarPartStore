<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    die(header('location: /index.php'));
}
?>



<?php

require_once('database.php');
session_start();
$em = $_POST['email'];
$ps = $_POST['password'];

$sql = "SELECT * FROM users where userEmail ='$em' AND userPassword='$ps'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();


    $_SESSION['Logged'] =  true;
    $_SESSION['ID'] =  $row['userID'];

    echo ("ba7erbey <br>" . $row['userFirstName']);
    header('location: ../index.php');
} else {

    header('location: ../pages/auth.php');
}
$conn->close();

?>