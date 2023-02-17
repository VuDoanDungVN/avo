<?php
include_once "assets/php/config.php";
if (isset($_POST['post_comment'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $sql = "INSERT INTO comment_box (name, message)
VALUES ('$name','$message')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
