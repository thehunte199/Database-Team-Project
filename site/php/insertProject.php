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
    $insert = mysql_query("INSERT INTO project(projectName,completedDate,subteamName,startDate,projDesc,assignDate,dueDate,projPriority,leaderID)
VALUES
('$_POST[projectName]','$_POST[completedDate]','$_POST[subteamName]','$_POST[startDate]','$_POST[projDesc]','$_POST[assignDate]','$POST_[dueDate]','$POST_[projPriority]','$POST_[leaderID]')",$mydb);
    if (!$insert)
    {
        die("ERROR_CODE_110: IMPROPER INSERT QUERY('Certain information entered may not be compatible with the data type of that field. Please re-enter the information.)" . mysql_error());
    }
?>
<?php

    $result = @mysql_query("SELECT * FROM project", $mydb);
    
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
        die("ERROR_CODE_111: IMPROPER SELECT QUERY(There was an error retrieving the information from the Database.)" . mysql_error());
    }
    mysql_free_result($result);
?>
</table>
</body>
</html>
