<?php

function create_user()
{
    include 'connection.php';

    $email_variable = rand(0, 1000);

    $sql = "INSERT INTO users VALUES  (NULL, 'first user name', 'first user lastname', 'email$email_variable@gmail.com', '132456#__iiii');";

    mysqli_query($connection, $sql);
}
