<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/response.css"> 
    </head>
<body>
<table>
<?php
    include("accessTest.txt");
    mysql_select_db("DBS17T-9", $mydb);
    mysql_query("INSERT INTO subteam(teamName, joinDate, parentTeam, bannerID, purpose, leaderID)
VALUES
('$_POST[teamName]','$_POST[joinDate]','$_POST[parentTeam]','$_POST[bannerID]','$_POST[purpose]','$_POST[leaderID]')",$mydb);
?>
<?php
    $sql="INSERT INTO subteam(teamName, joinDate, parentTeam, bannerID, purpose, leaderID)
VALUES
('$_POST[teamName]','$_POST[joinDate]','$_POST[parentTeam]','$_POST[bannerID]','$_POST[purpose]','$_POST[leaderID]')";
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
        die("ERROR_CODE_110: IMPROPER INSERT QUERY('Certain information entered may not be compatible with the data type of that field. Please re-enter the information.)" . mysql_error());
    }
    mysql_free_result($result);
?>
</table>
</body>
</html>

