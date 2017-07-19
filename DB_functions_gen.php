<?php
            $pc1 = array ("merk" => "Samsung", "os" => "Win10", "harddisk" => "250 GB", "memory" => "3 GB", "Prijs" => "700");
            $pc2 = array ("merk" => "Apple", "os" => "IOS10", "harddisk" => "400 GB", "memory" => "4 GB", "Prijs" => "1100"); 
            $pc3 = array ("merk" => "Lenovo", "os" => "Win8", "harddisk" => "90 GB", "memory" => "1 GB", "Prijs" => "450"); 
            $pc4 = array ("merk" => "Dell", "os" => "Win10", "harddisk" => "160 GB", "memory" => "2 GB", "Prijs" => "600"); 
            
           $pcs = array($pc1, $pc2, $pc3, $pc4);
        
           function arrayToHTMLTable($array){
   		// deze functie zetten we later in een apart bestand
                   	// in plaats van echo zet je alle tekst in een variabele met bijv. de naam $htmltable
		//  Die stuur je terug met return
            $htmltable = "<table border = '1' <tr>";
              foreach($array[0] as $key=>$value) {
                  $htmltable = $htmltable . "<th>" . $key;
              }
               
                	foreach ($array as $row) {  
                        $htmltable = $htmltable . "<tr>";
                    	foreach ($row as $key=>$value) {                      
                    	        $htmltable = $htmltable . "<td>" . $key . " " . $value;
                        }
                        $htmltable = $htmltable . "</tr>";
                }
                $htmltable = $htmltable . "</td></tr></table>" ;
                return $htmltable;  //levet dus HTML code terug met een nette tabel van de array.
           }

    function readTableToArray ($servername, $username, $password, $dbname, $sql){
    // deze functie levert een associatieve array table met alle kolommen die gevraagd worden via 	$sql
    // Parameters: bijvoorbeeld $servername = "localhost"; $username = "root";   $password = "";
    // bijv: $dbname = "p4caseroetmeting" ;
    
    // Create connection
       $conn = new mysqli($servername, $username, $password, $dbname);
        
	   $html = $conn->query($sql);
          // …......
	   $array = [];  // Creeer een lege array, waar je regels uit de tabel kunt toevoegen 
    	if ($html->num_rows > 0) {
      	    while ($oneRow = $html->fetch_assoc()) { 
      	        array_push($array,$oneRow);
      	    }       
   	 } 
        $conn->close();
        return $array;
    }

?>