<?php
/* ملف التصال بقاعدة البيانات */
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
 die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'ommal');
if(!$select_db){
 die("Database Selection Failed" . mysqli_error($connection));
}else
{
    each .'hellwo';
}
/*نجاح التصال*/
?>
