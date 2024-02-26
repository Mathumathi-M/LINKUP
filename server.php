<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='linkup';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con)
{
   // echo "connection successfull";
}
else{
    die(mysqli_error($con));
}

//connection successfull

?>