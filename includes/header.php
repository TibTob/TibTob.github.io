<?php
$pageTitle = isset($pageTitle) ? $pageTitle : "Your Website"; // Default value if not set
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="images/favi.png">
</head>

<body>


    <header>
        <div class="logo">
            <a href="index.php"><img src="images/tree.jpg" alt="Logo"></a>
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <main>