<?php

    // getting all form values

    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $website =  $_POST['website'];
    $message =  $_POST['message'];

    if (!empty($email) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) { //check correctness of the email inputted

            $receiver = "akinimbomnkwi@gmail.com"; //receiving email address
            $subject = "From: $name <$email>"; //subject of email
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $meassage\n\nRegards, \n$name";
            $sender = "From $email";

            if(mb_send_mail($receiver, $subject, $body, $sender)){
                echo "Your message has been sent successfully $name";
            } else {
                echo "Sorry, failed to send your message!";
            }

        } else {
            echo "Please enter a valid email!";
        }
    } else {
        echo "Please email and message required!";
    }

?> 