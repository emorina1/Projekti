<?php include("functions.php"); 
// Initialize variables
$emri = $phone = $email = $mbiemri = null;

// Check if the session variables are set and not null
if (
    isset($_SESSION['useri']['emri']) && 
    isset($_SESSION['useri']['email']) && 
    $_SESSION['useri']['emri'] !== null &&
    $_SESSION['useri']['email'] !== null 
) {
    // Assign values to variables only if they are not null
    $emri = $_SESSION['useri']['emri']; 
    $email = $_SESSION['useri']['email'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="personal.css?v=<?php echo time(); ?>">
    <link rel="icon" href="logo.png?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
<body>

<header class="headerContainer">
    <ul class="navbar">
        <ul type="none">
            <li><a href="Contact.php">Contact Us</a></li>
            <li><a href="prices.php">Prices</a></li>
            <li><a href="Programs.php">Programs</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </ul>
</header>