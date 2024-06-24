<?php

session_start();

function setLanguage($lang) {
    $_SESSION['lang'] = $lang;
}

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setLanguage($lang);
} else {
    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    } else {
        $lang = 'en';
        setLanguage($lang);
    }
}

function __($key) {
    global $translations;
    return isset($translations[$key]) ? $translations[$key] : $key;
}

$language = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';

if ($language === 'pl' && file_exists(__DIR__ . '/../languages/pl.php')) {
    $translations = include __DIR__ . '/../languages/pl.php';
} elseif (file_exists(__DIR__ . '/../languages/en.php')) {
    $translations = include __DIR__ . '/../languages/en.php';
}
function getYear()
{
    return date('Y');
}
?>