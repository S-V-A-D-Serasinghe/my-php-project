<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
    die('could not connect:'.mysql_error());
}
mysql_select_db("my_db",$con);
$sql="INSERT INTO Persons (Enter Your Name,Enter Your Email,Enter a Password,Conform The Password)
VALUE ('$_POST[Enter Your Name] ','$_POST[Enter Your Email] ','$_POST[Enter a Password] ','$_POST[Conform The Password] ')";
if (!mysql_query($sql,$con))
{
    die('Error:'.mysql_error());
}
echo "1 record added";
mysql_close($con);
?>