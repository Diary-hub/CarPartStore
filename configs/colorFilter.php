<?php


if (isset($_POST['Black'])) {
    unset($_POST['White']);
    unset($_POST['Red']);
    unset($_POST['Green']);
    unset($_POST['Blue']);
    unset($_POST['Black']);
    $posts = selectContains($table, 'black');
}

if (isset($_POST['White'])) {
    unset($_POST['White']);
    unset($_POST['Red']);
    unset($_POST['Green']);
    unset($_POST['Blue']);
    unset($_POST['Black']);
    $posts = selectContains($table, 'white');
}

if (isset($_POST['Red'])) {
    unset($_POST['White']);
    unset($_POST['Red']);
    unset($_POST['Green']);
    unset($_POST['Blue']);
    unset($_POST['Black']);
    $posts = selectContains($table, 'red');
}

if (isset($_POST['Green'])) {
    unset($_POST['White']);
    unset($_POST['Red']);
    unset($_POST['Green']);
    unset($_POST['Blue']);
    unset($_POST['Black']);
    $posts = selectContains($table, 'green');
}

if (isset($_POST['Blue'])) {
    unset($_POST['White']);
    unset($_POST['Red']);
    unset($_POST['Green']);
    unset($_POST['Blue']);
    unset($_POST['Black']);
    $posts = selectContains($table, 'blue');
}

if (isset($_POST['Silver'])) {
    unset($_POST['White']);
    unset($_POST['Silver']);
    unset($_POST['Red']);
    unset($_POST['Green']);
    unset($_POST['Blue']);
    unset($_POST['Black']);
    $posts = selectContains($table, 'Silver');
}
if (isset($_POST['Purple'])) {
    unset($_POST['White']);
    unset($_POST['Purple']);
    unset($_POST['Silver']);
    unset($_POST['Red']);
    unset($_POST['Green']);
    unset($_POST['Blue']);
    unset($_POST['Black']);
    $posts = selectContains($table, 'Purple');
}

if (isset($_POST['Brown'])) {
    unset($_POST['White']);
    unset($_POST['Brown']);
    unset($_POST['Purple']);
    unset($_POST['Silver']);
    unset($_POST['Red']);
    unset($_POST['Green']);
    unset($_POST['Blue']);
    unset($_POST['Black']);
    $posts = selectContains($table, 'Brown');
}