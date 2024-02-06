<?php include("header.php"); 

$emri = $_SESSION['useri']['emri']; 
$roli = $_SESSION['useri']['roli']; 

?>

<html>
<body>

<div id="main-content-index" >

    <!-- <?php echo $roli; ?> -->
    <?php 
        $row=numriUserave();
        $NrUserave=$row['NrUserave'];

        $row=numriUshtrimeve();
        $NrUshtrimeve=$row['NrUshtrimeve'];

        $row=numriKlientave();
        $NrKlientave=$row['NrKlientave'];
        ?>
        <?php if($roli == 'Administrator') { ?>
             <div class="card-indexdash" onclick="location.href = 'userscrud.php'">
        <?php } else{ ?>
            <div class="card-indexdash">
        <?php } ?>
        <h2>Përdoruesit</h2>
        <p><?php echo $NrUserave; ?></p>
        <i class="fa-solid fa-users"></i>
    </div>

    <div class="card-indexdash" onclick="location.href = 'Ushtrimetcrud.php'">
        <h2>Ushtrimet</h2>
        <p><?php echo $NrUshtrimeve; ?></p>
     
        <i class="fa-solid fa-dumbbell"></i>
    </div>

    <?php if($roli == 'Administrator') { ?>
             <div class="card-indexdash" onclick="location.href = 'userscrud.php'">
        <?php } else{ ?>
            <div class="card-indexdash">
        <?php } ?>
        <h2>Klienta</h2>
        <p><?php echo $NrKlientave; ?></p>
        <i class="fa-solid fa-message"></i>
    </div>



   



</body>
</html>
