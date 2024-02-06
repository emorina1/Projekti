<?php include("header.php"); ?>


<div class="dashboard-item" style="margin-top:100px;">
        
        <div class="btn-shto-crud">
        <button onclick="location.href = 'shtoUshtrimet.php'">Shto</button>
        </div>
        <form id="ushqimi">
        <table class="table-dashboard">
            <tbody>
            <tr>
                <th>ID</th>
                <th>Kategoria</th>
                <th>Lloji</th>       
               
                <th>Edit</th>
                <th>Delete</th>
                
            </tr>
            <?php
                $result=merrUshtrimet();
                $i=0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id=$row['ID'];
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['Kategoria'] . "</td>";
                    echo "<td>" . $row['Lloji'] . "</td>";
                    echo "<td>" . $row['InsertedBy'] . "</td>";
                    echo "<td><div><button class='edito-button'><a href='editUshtrimet.php?id={$id}' style='color:white;'>Edit</a></button></div></td>";
                    echo "<td><div><button class='fshij-button'><a href='fshijUshtrimet.php?id={$id}' style='color:white;'>Fshij</a></button></div></td>";


                    echo "</tr>";
                }
                ?>
                </tbody>
        </table>
            </form>
    </div>

</body>
