<?php
require("database.php");



function excuteQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $vals = array_values($data);
    $tpyes = str_repeat('s', count($vals));
    $stmt->bind_param($tpyes, ...$vals);
    $stmt->execute();

    return $stmt;
}

function excuteQuery1($sql)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    return $stmt;
}

function selectAll($table, $cond = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($cond)) {
        $stmt = $conn->prepare($sql);

        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        //If there was and Cond THIS wil excute...
        $i = 0;
        foreach ($cond as $key => $value) {

            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }

        $stmt = excuteQuery($sql, $cond);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    }
}


function selectOne($table, $cond)
{
    global $conn;
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($cond as $key => $value) {

        if ($i === 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }

    $sql = $sql . ' LIMIT 1';
    $stmt = excuteQuery($sql, $cond);
    $records = $stmt->get_result()->fetch_assoc();

    return $records;
}
function selectContains($table, $cond)
{
    global $conn;
    try {
        $sql = "SELECT * FROM $table WHERE `partName` LIKE '%$cond%' or `partBrand` LIKE '%$cond%'  or `partColor` LIKE '%$cond%'";



        $stmt = excuteQuery1($sql);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);


        return $records;
    } catch (Exception $e) {
        return $e;
    }
}
function selectContainsID($table, $cond, $uid)
{
    global $conn;
    try {
        $sql = "SELECT * FROM $table WHERE `partName` LIKE '%$cond%' or `partBrand` LIKE '%$cond%'  or `partColor` LIKE '%$cond%' and 'userID' = $uid";
        $sql = "SELECT *
        FROM parts
        WHERE partName LIKE '%$cond%' AND userID = $uid  or `partBrand` LIKE '%$cond%'  AND userID = $uid   or `partColor` LIKE '%$cond%'  AND userID = $uid";



        $stmt = excuteQuery1($sql);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);


        return $records;
    } catch (Exception $e) {
        return $e;
    }
}

function selectBrand($table, $cond)
{
    global $conn;
    try {
        $sql = "SELECT * FROM $table WHERE `partBrand` LIKE '%$cond%'";



        $stmt = excuteQuery1($sql);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);


        return $records;
    } catch (Exception $e) {
        return $e;
    }
}



function selectRange($table, $first, $second)
{
    global $conn;
    try {
        $sql = "SELECT * FROM $table WHERE partPrice BETWEEN $first AND $second";



        $stmt = excuteQuery1($sql);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);


        return $records;
    } catch (Exception $e) {
        return $e;
    }
}







function create($table, $data)
{
    global $conn;

    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {

        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $stmt = excuteQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}


function deletee($table, $id)
{
    global $conn;

    $sql = "DELETE FROM $table WHERE partID=?";
    $stmt = excuteQuery($sql, ['partID' => $id]);

    return $stmt->affected_rows;
}
