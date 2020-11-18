<?php
    //Form variables
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $body = $_POST['body'];

    header("Location:confirmation.php?sent");