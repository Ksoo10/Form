<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = htmlspecialchars((trim($_POST["first_name"])));
    $last_name = htmlspecialchars((trim($_POST["last_name"])));
    $email = htmlspecialchars((trim($_POST["email"])));
    $phone = htmlspecialchars((trim($_POST["phone"])));
    $timestamp = date("Y-m-d H:i:s");
 if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($phone)){
    $data = "=== Contact Us Form Submission ===\n";
    $data .= "First Name: $first_name\n";
    $data .= "Last Name: $last_name\n";
    $data .= "Email: $email\n";
    $data .= "Phone: $phone\n";
    $data .= "Submitted on: $timestamp\n";
    $data .= "===============================\n\n";
    

    $filename = "contact_submissions.txt";
    $result = file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
    if ($result !== false){
        echo "<h2>Thank you, $first_name. Your submission has been received.</h2>";
    } else {
        echo "<h2>There was an error saving your submission. Please try again later.</h2>";
    }
 }

}