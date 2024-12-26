<?php

function updateOne($id, $new_nom, $new_prenom, $new_email)
{
    include 'connection.php';

    $sql_query = "UPDATE users SET firstname = '$new_prenom', lastname='$new_nom', email = '$new_email' WHERE id=$id";
    $result = mysqli_query($connection, $sql_query);
    var_dump($result);
}
