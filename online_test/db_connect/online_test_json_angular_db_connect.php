<?php
$conn=new mysqli('hostname','username','passowrd','databasename');
if($conn->connect_errno)
{
echo $conn->connect_error;
echo "Database not connected";
die();
}
else
{
//echo "Database connected";
}
?>