
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="styles.css">
	 	<title></title>
<style type="text/css">
	
body{
  background-color:  #ccddff; 
margin: 70px;
padding: 60px;
background-image: url(robot1.png) ;
background-position: left;
background-repeat: no-repeat;
border-image-source: 40px;

}




button {
  background-color:#004de6;
  border-radius:4px;
  border:3px solid #fff;
  color: white;
  padding-right:40px;
  padding-left: 32px;
  padding-top: 10px;
  padding-bottom: 8px;
   text-decoration: none;
  font-size: 15px;
  margin:15px ;
    border-radius: 25%

  }
button:hover {
  background-color: #ff6666;

    color: white;
}

#forwards{
margin-top: 15%;
margin-left: 40.9%}
#back{
  margin-left: 41%;
 transform: translate(1%,-150%);
}
#Stop{
 margin-left: 42%;
 transform: translate(0.6%,-80%);
}
#raight{
margin-left: 56%;
transform:translate(30%,-250%);}
#left{
  margin-left: 20%;
transform: translate(60%,90%);
}



</style>

</head>

<body>
	

<div><form action="fow.php" method="post">
<button name="button" id="forwards" value="forwards" >Forwards</button></form></div>

<div><form action="l.php" method="post">
	<button name="button" id="left" value="left">Left</button></form></div>

<div><form action="s.php" method="post">
	<button name="button" id="Stop" value="Stop">STOP</button></form></div>

<div><form action="r.php" method="post"><button id="raight" name="button" value="raight">Right</button></form></div>

<div><form action="b.php" method="post"><button name="button" id="back" value="back">Backwards</button></form></div>

</form>
</body>










</html>