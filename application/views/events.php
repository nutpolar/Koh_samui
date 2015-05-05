<?php

$host = "localhost"; //replace with your hostname 
$username = "project3_samui"; //replace with your username 
$password = "71zBWZEw"; //replace with your password 
$db_name = "project3_samui"; //replace with your database 
$con = mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
$sql = "select * from tb_event"; //replace emp_info with your table name 
$result = mysql_query($sql);
$json = array();
if (mysql_num_rows($result)) {
    while ($row = mysql_fetch_assoc($result)) {
        $json[] = array_map('utf8_encode', $row);
    }
}
//mysql_close($db_name);
echo json_encode($json);
// please refer to our PHP JSON encode function tutorial for learning json_encode function in detail 
?>