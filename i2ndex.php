
<?php 

$host='localhost';
$user='root';
$pass='';
$db='ommal';
$con = mysqli_connect($host,$user,$pass);
$select_db=mysqli_select_db($con,$db);
$word = ($_POST[name]);
$sql= "select * from table-ommal where col2 like '%$word%'";
$query = mysqli_query($sql);
while($row=mysqli_feth_arrey($query)){
    each :'id'.$row['id'];
    each .$row['col2'];
    each .$row['col3'];
    each .$row['col4'];
    each .$row['col5'];
}
?>
<!DOCTYPE html>
<html lang="en"dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحةالرئيسية </title>
</head>
<body>
    <form action="i2ndex.php" method="POST  ">
        <input type="text" name="name" value="" >
        <input type="submit" name="submit"value="ارسال">
    </form>
<a href="conn.php">الاتصال</a>
</body>
</html>
