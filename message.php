<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
// $website = htmlspecialchars($_POST['website']);
$message = htmlspecialchars($_POST['message']);

if (!empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $receiver = "vudungit92@gmail.com"; //enter that email address where you want to receive all messages
        $subject = "Được gửi từ: $name <$email>";
        // $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
        $body = "Tên : $name\nEmail: $email\nSố Điện Thoại: $phone\n\nMong muốn:\n$message\n\nKý tên,\n$name";
        $sender = "From: $email";
        if (mail($receiver, $subject, $body, $sender)) {
            echo "Đơn đã được gửi đi!";
        } else {
            echo "Xin lỗi, đơn của bạn chưa được gửi đi!";
        }
    } else {
        echo "Email của bạn không hợp lệ!";
    }
} else {
    echo "Bạn không thể bỏ trống phần Email và Messager";
}
