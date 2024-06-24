<?php
function sanitize_input($input) {
    return htmlspecialchars(trim($input));
}

function validate_name($name) {
    return preg_match('/^[a-zA-Z\s]+$/', $name);
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validate_phone($phone) {
    return preg_match('/^[0-9]{9}$/', $phone);
}

function validate_message($message) {
    return empty($message);
}

session_start();


?>