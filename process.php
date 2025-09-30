<?php 
// Collect Data
if ($_POST) {


// Collect form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// Collect form data

//Create formatted data string 
$data = "First Name: " . $first_name . "\n";
$data .= "Last Name: " . $last_name . "\n";
$data .= "Email: " . $email . "\n";
$data .= "Phone: " . $phone . "\n";
$data .= "Date: " . date('Y-m-d H:i:s') . "\n";
//Create formatted data string


// Save to a text file 
$filename= "contact_data.txt";
file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
// Save to a text file 

// Confirmation Message
echo "Data saved successfully.";
}
else {
    echo "No data submitted.";
}
// Confirmation Message

?>
