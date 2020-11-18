<?php
    //Form variables
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $body = $_POST['body'];

    header("Location:confirmation.php?sent");