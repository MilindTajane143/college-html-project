<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
die('could not connect'.mysql_error());
}
echo"SUCCESSFULLY CONECTION";
mysql_select_db('firstpage');
$sql="insert into test(name,contact)values('MILIND',8551998254)";
$retval=mysql_query($sql,$conn);
if($retval)
{
die('could not connect'.mysql_error());
}
echo"DATA INSERT SUCCESSFULLY";
mysql_close($conn);
?>