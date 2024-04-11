<?php
session_start();
unset($_SESSION['Logged']);
session_destroy();
header('location: ../index.php');
