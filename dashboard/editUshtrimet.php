
<?php include "header.php" ?>

<div class="dashboard-shto">
  
        <section id="content" class="box-content">
        <?php
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $row=merrUshtrimetSpecifik($id);
            $Kategoria=$row['Kategoria'];
            $Lloji=$row['Lloji'];
            $Img=$row['Img'];
            

        }
        if (isset($_POST['edito'])) {
            editUshtrimet($id, $_POST['kategoria'], $_POST['lloji'], $emri, $_FILES['img'] );
        }
        ?>
       <form method="post" id="ushtrimet" class="box-shto" enctype="multipart/form-data">
            <fieldset>
            <label>Kategoria:</label>
                <input type="text" name="kategoria" id="kategoria" value="<?php if(!empty($Kategoria)) echo $Kategoria; ?>"><br />
            </fieldset>
            <fieldset>
                <label>Lloji:</label>
                <input type="text" name="lloji" id="lloji" value="<?php if(!empty($Lloji)) echo $Lloji; ?>"><br />
            </fieldset>
                <fieldset>
                    <label>Ngarko Foto:</label>
                    <input type="file" autocomplete="new-password" id="img" name="img" class="form-control" ><br />
                </fieldset>
            <input type="submit" name="edito" value="Ruaj">
        </form>
    </section>
    </div>
</div>
