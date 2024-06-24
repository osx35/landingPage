<?php
include 'validation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $message = sanitize_input($_POST['message']);
    $phone = sanitize_input($_POST['phone']);

    $errors = [];


    if (!validate_name($name)) {
        $errors[] = "Name must contain only letters and spaces.";
    }

    if (!validate_email($email)) {
        $errors[] = "Invalid email format.";
    }

    if (!empty($phone) && !validate_phone($phone)) {
        $errors[] = "Phone number must contain only digits and be 9 digits long.";
    }

    if(validate_message($message)){
        $errors[] = "Message can not be empty.";
    }

    if (empty($errors)) {
        $data = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n\n";
        $file = '../data/submissions.txt';
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

        header("Location: ../includes/success.html");
        exit();
    } else {

        $_SESSION['errors'] = $errors;
        header("Location: ../index.php/#contact");
        exit();
    }
}
?>