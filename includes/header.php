<?php
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
unset($_SESSION['errors']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo __('osCAR DETAILING | Landing page'); ?></title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="index.php"><img src="../assets/images/logo1.png" alt="Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><?php echo __('HOME'); ?></a></li>
                <li><a href="#about"><?php echo __('ABOUT'); ?></a></li>
                <li><a href="#features"><?php echo __('FEATURES'); ?></a></li>
                <li><a href="#testimonials"><?php echo __('TESTIMONIALS'); ?></a></li>
                <li><a href="#gallery"><?php echo __('GALLERY'); ?></a></li>
                <li><a href="#contact"><?php echo __('CONTACT'); ?></a></li>
                <li><a href="?lang=en">English</a></li>
                <li><a href="?lang=pl">Polski</a></li>
            </ul>
        </nav>
    </div>
</header>
