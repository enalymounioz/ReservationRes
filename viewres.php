<?php

$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="loginsystem"; // Database name 
$tbl_name="reservation"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
while($rows=mysql_fetch_array($result)){
?>


<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td>Reservation No</td>
<td>:</td>
<td><? echo $rows['res_id']; ?></td>
</tr>
<tr>
<td width="117">Name of Reservation</td>
<td width="14">:</td>
<td width="357"><? echo $rows['name']; ?></td>
</tr>
<tr>
<td>Number of People</td>
<td>:</td>
<td><? echo $rows['pax']; ?></td>
</tr>
<tr>
<td valign="top">Day of Reservation</td>
<td valign="top">:</td>
<td><? echo $rows['day']; ?></td>
</tr>
</table></td>
<?php
}
mysqli_close(); //close database
?>
