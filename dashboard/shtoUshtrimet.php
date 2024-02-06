<?php include "header.php" ?>
<div class="dashboard-shto">
   
        
        <section id="content" class="box-content">
            <?php
            if (isset($_POST['shto'])) {
               
                shtoUshtrimet($_POST['kategoria'], $_POST['lloji'],$emri, $_FILES['img']);
            }
            ?>
            <form method="post" enctype="multipart/form-data" id="ushqimi" class="box-shto">
                  <fieldset>
                <label>Kategoria:</label>
                <input type="text" name="kategoria" id="kategoria"><br />
            </fieldset>
            <fieldset>
                <label>Lloji:</label>
                <input type="text" name="lloji" id="lloji"><br />
            </fieldset>
            
                <fieldset>
                    <label>Ngarko Foto:</label>
                    <input type="file" autocomplete="new-password" id="img" name="img" class="form-control"><br />
                </fieldset>

                <input type="submit" name="shto" value="Shto">
            </form>
        </section>
    </div>
</div>


