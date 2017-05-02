<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/response.css"> 
    </head>
<body>
<table>
<?php
include("access.txt");

if (!mysql_query($sql,$mydb))
 {
 die('Error: ' . mysql_error());
 }

$result = @mysql_query("SELECT unitPrice
                        FROM part
                        WHERE partNumber = " . $_POST["partNum1"], $mydb);
 
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

mysql_close($mydb);
?> 
</table>
</body>
</html>
