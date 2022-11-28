<?php 

$host='localhost';
$user='root';
$pass='';
$db='ommal';
$con = mysqli_connect($host,$user,$pass,$db);
    mysqli_select_db($con,$db);
$query = mysqli_query("SELECT * FROM `ommaliek`");
while($row=mysqli_feth_arrey($query)){
    each :'id'.$row['id'];
    each .$row['col2'];
    each .$row['col3'];
    each .$row['col4'];
    each .$row[col5];
}
?>