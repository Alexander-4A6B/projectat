<!DOCTYPE html>

<?php include "DB_functions_gen.php" ?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- <link href="gen_style.css" rel="stylesheet">  -->
</head>

<body>
    <div class="deelformulier">
         <?php
            $sql = "SELECT * FROM hotels"; // lees je tabel in de array.
	        $resultArray = readTableToArray("localhost", "root", "","p4caseroetmeting", $sql);
            echo "<br>";    
            foreach ($resultArray as $row){
                 // print_r($row); echo "<br>";
            }
            $resultHTMLTable = ArrayToHTMLTable($resultArray);
            echo $resultHTMLTable;

            echo arrayToHTMLTable($pcs);
         ?>
    </div>  

</body>
</html>