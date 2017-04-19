<?php
include("mysql.txt");
mysql_select_db("DBS17T-9", $conn)
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

$sql = "UPDATE '$_POST[table_name]'
SET '$_POST[set_col]'='$_POST[set_val]'
WHERE '$_POST[where_col]'='$_POST[where_val]'";

if (mysql_query($sql, $conn)) {
    echo "Records updated successfully";
} else {
    die("Error updating record: " . mysql_error());
}

mysql_close($conn);
?>
