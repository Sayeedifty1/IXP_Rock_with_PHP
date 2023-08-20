<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    // You can perform additional processing here, such as saving to a database

    $response = "Enquiry received for:\nName: $name\nMobile: $mobile\nEmail: $email";
    echo $response;
} else {
    echo "Invalid request.";
}
?>
