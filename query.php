<?php 
    // For each input SNP
    $separator = "\r\n";
    $line = strtok($line, $separator);
    $i = 1;
    
    while ($line !== false) {
        $sql = "SELECT * FROM asa WHERE Name LIKE '%{$line}%'";
        $res = mysqli_query($conn,$sql);

        if(!$res){
            echo "error ".mysqli_error($conn);
        }

        else{
            if($res->num_rows == 0){	//If not found
                echo "<tr style='background-color:#FEC0C0;'>";
                echo "<td>".$i."</td>";
                echo "<td>".$line."</td>";
                for ($x = 1; $x <= 22; $x++) {
                    echo "<td>-</td>";
                } 
                echo "</tr>";
                $i++;
            }
            
            else{	// When interest matched asa
                while ($row = $res->fetch_assoc()){
                    if($row['Name'] == $line){
                        echo "<tr style='background-color:#B4FFA3;'>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$line."</td>";
                        foreach($row as $value){
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }

                    else{
                        echo "<tr style='background-color:#F9FFAE;'>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$line."</td>";
                        foreach($row as $value){
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }
                    $i++;
                }
            }
        }
        $line = strtok( $separator );
    }
    
    
    $time_end = microtime(true);
    //dividing with 60 will give the execution time in minutes otherwise seconds
    $execution_time = ($time_end - $time_start)/60;
?>