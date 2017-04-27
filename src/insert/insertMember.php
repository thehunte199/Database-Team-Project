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
    $sql="INSERT INTO member (memFName,bannerID,memCollege,shirtSize,memMName,memEmail,memMajor,memberStatus,memLname,memPhoneNum,memClass)
VALUES
('$_POST[memFName]','$_POST[bannerID]','$_POST[memCollege]','$_POST[shirtSize]','$_POST[memMName]','$_POST[memEmail]','$_POST[memMajor]','$_POST[memberStatus]','$_POST[memLName]','$POST_[memPhoneNum]','$POST_[memClass]')";
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

