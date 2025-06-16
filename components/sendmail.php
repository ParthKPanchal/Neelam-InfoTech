<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST['subject'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $company_name = $_POST['company_name'];
    $company_address = $_POST['company_address'];
    $license_number = $_POST['license_number'];

    $to = "parth.ajayinfo@email.com";
    $headers = "From: $email";
    $message = "Subject: $subject\nName: $firstname $lastname\nEmail: $email\nMobile Number: $number\nCompany Name: $company_name\nCompany Address: $company_address\nLicense number: $license_number";

    mail($to, "New Subscription Request", $message, $headers);

    echo "Email sent successfully.";
}
?>
