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
    $result = @mysql_query("UPDATE ".$_POST["tableDropdown"] . " SET " .$_POST["attributeDropdownSet"] . "='" .$_POST['updateValue'] . "' WHERE " .$_POST["attributeDropdownWhere"] . "".$_POST["compOperator"] ."'" .$_POST['condition']."'", $mydb);
    
    if(!$result)
    {
        die("ERROR_CODE_110: IMPROPER UPDATE QUERY('Certain information entered may not be compatible with the data type of that field. Please re-enter the information.)" . mysql_error());
    }

?>
<?php
    $result = @mysql_query("SELECT * FROM ".$_POST["tableDropdown"], $mydb);

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
        die("ERROR_CODE_110: IMPROPER SELECT QUERY('Certain information entered may not be compatible with the data type of that field. Please re-enter the information.)" . mysql_error());
    }

    mysql_free_result($result);
?>
</table>
</body>
</html>
