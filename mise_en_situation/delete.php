<?php

function deleteOne($id)
{
    include 'connection.php';

    $sql_query = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($connection, $sql_query);
    var_dump($result);
}
