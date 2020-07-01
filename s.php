<!DOCTYPE HTML>
<html>  
<style type="text/css">
	body{
		background-color: #9966ff;
		text-align: center;
	}
</style>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName="control";


$conn = mysqli_connect($servername, $username, $password, $dbName);
if(!$conn){
	die("conection failed" .mysqli_connect_error());
}

$button= $_POST['button'];
    if ($button=='Stop') {
	 $sql = "INSERT INTO remot_control (stop , back,forwards,right2,left2) VALUES ('yes','no','no',no','no') ";}
  mysqli_query($conn,$sql);

mysqli_close($conn); 



Function test () {
echo "S"; }
test();
?>
 
</body>
</html>

