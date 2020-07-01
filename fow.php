<!DOCTYPE html>
<html>  
<style type="text/css">
	body{
		background-color:  #80ff80;
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
    if ($button=='forwards') {
	 $sql = "INSERT INTO remot_control (stop , back,forwards,right2,left2) VALUES ('no','no','yes',no','no') ";}
	  mysqli_query($conn,$sql);


mysqli_close($conn); 

function test () {
echo "F";}
test();

?>
 
</body>
</html>






