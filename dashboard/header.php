<?php
 include("../functions.php"); 
 $roli = $_SESSION['useri']['roli']; 
 $emri = $_SESSION['useri']['emri']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fitness</title>

    <link rel="stylesheet" href="Style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <header>
    
        <a href="index.php" class="logo"></a>
        <nav class="navbar">
                <a href="index.php">Dashboard</a>
                <a href="Ushtrimetcrud.php">Ushtrimet</a>
                <?php if($roli == 'Administrator'): ?>
                <a href="userscrud.php">Perdoruesit</a>
                <?php endif; ?>
                <a href="logout.php">Logout</a>
</nav>



</header>



    <body>
