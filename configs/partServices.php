<?php

$table = 'parts';

$partID = '';
$partName = '';
$partColor = '';
$partBrand = '';
$partImg = '';
$partDescription = '';
$partPrice = '';
$partRate = '';
$partDate = '';
$userID = '';

$posts = selectAll($table);



if (isset($_GET['post-id'])) {
    $partID = $_GET['post-id'];
    $post = selectOne($table, ['partID' => $partID]);
    $user = selectOne("users", ['userID' => $post['userID']]);

    $partID = $post['partID'];
    $partName = $post['partName'];
    $partColor = $post['partColor'];
    $partBrand = $post['partBrand'];
    $partImg = $post['partImg'];
    $partDescription = $post['partDescription'];
    $partPrice = $post['partPrice'];
    $partRate = $post['partRate'];
    $partDate = $post['partDate'];
    $userID = $post['userID'];

    $userEmail = $user['userEmail'];
    $userPhone = $user['userPhone'];
    $userAddress = $user['userAddress'];
}
