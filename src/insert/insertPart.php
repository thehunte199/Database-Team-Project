<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="response.css"> 
    </head>
<body>
<table>
<?php
    include("accessTest.txt");
    mysql_select_db("DBS17T-9", $mydb);
    $sql="INSERT INTO part(partNumber,category,donationID,partName,partLocation,quantity,partManufacturer)
VALUES
('$_POST[partNumber]','$_POST[category]','$_POST[donationID]','$_POST[partName]','$_POST[partLocation]','$_POST[quantity]','$POST_[partManufacturer]')";
    $result = @mysql_query($sql, $mydb);
    
    if ($result)
    {
        echo "<tr>";
        
        for($i = 0; $i < mysql_num_fields($result); $i++)
        {
            $entity = mysql_fetch_field($result, $i);
            echo "<th>". $entity->name . "</th>";  
        }
        echo "</tr>";
        while($tuple = mysql_fetch_row($result))
        {
            echo "<tr>";
            
            for($i = 0; $i < mysql_num_fields($result); $i++)
                echo "<td>".$tuple[$i]."</td>";   
            echo "</tr>";
        }
    }
    else
    {
        die("Invalid query... some other text should go here: " . mysql_error());
    }
    mysql_free_result($result);
?>
</table>
</body>
</html>