
<?php include "header.php" ?>

<div class="dashboard-shto">
    <div class="dashboard-shto-item">
        
        <section id="content" class="box-content">
        <?php
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $Kategoria=$row['Kategoria'];
            $Lloji=$row['Lloji'];
           
            

        }
        if (isset($_POST['fshij'])) {
            fshijUshtrimet($id);
        }
        ?>
        <form method="post" id="ushqimi" class="box-shto">
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
                    <input type="file" autocomplete="new-password" id="img" name="img" class="form-control"><br />
                </fieldset>
            <input type="submit" name="fshij" value="Fshij">
        </form>
    </section>
    </div>
</div>
