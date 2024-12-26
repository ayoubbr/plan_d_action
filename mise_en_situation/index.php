<?php
include 'update.php';
include 'delete.php';
include 'create.php';

function allData()
{
    include 'connection.php';

    $sql_query = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql_query);
    while ($row = $result->fetch_assoc()) {
        var_dump($row);
    }
}

function getOne($id)
{
    include 'connection.php';

    $sql_query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $sql_query);
    $user = $result->fetch_assoc();
    var_dump($user);
}


// allData();
// getOne(1);
// create_user();
// updateOne(1, 'ayoub', 'benmansour', 'ayoub@gmail.com');
// deleteOne(3);