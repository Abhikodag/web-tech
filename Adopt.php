<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name = trim($_POST['Name']);
    $phone = trim($_POST['Phone']);
    $pet = trim($_POST['Pet']);
    $address = trim($_POST['Address']);

    
    if (empty($name) || empty($phone) || empty($pet) || empty($address)) {
        echo "<h2>All fields are required!</h2>";
        exit;
    }

  

    $to = "youremail@example.com";   
    $subject = "New Pet Adoption Request";
    
    $message =
        "Name: $name\n" .
        "Phone: $phone\n" .
        "Pet Selected: $pet\n" .
        "Address: $address\n";

    $headers = "From: noreply@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Thank you! Your adoption request has been sent successfully.</h2>";
    } else {
        echo "<h2>Something went wrong! Try again later.</h2>";
    }


    
