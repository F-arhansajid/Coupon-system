<?php
$link = mysqli_connnect("localhost","root","","school");

if($link ===false)
{
die("ERROR: CANNOT CONNECT.".mysqli_connnect_error());


}
