<!DOCTYPE html>
<html>
<head>
	<title>===== Triangles =======</title>
</head>
<body>


<p>
	
<?php

//echo "Hello World !";


echo "Number 1 :";
echo "<br>";
for ($x = 0; $x <= 5; $x++){
	for ($y = 0; $y < $x; $y++){
		echo " * ";
	}
	echo "<br>";

}

echo "<br> <br>";




echo "Number 2 :";
echo "<br><br>";

for ($x = 5; $x > 0; $x--){
	for ($y = 0; $y < $x; $y++){
		echo "&nbsp &nbsp";
	}
	

	for ($z = 5; $z >= $x; $z--){
		echo " * ";
	}

	echo "<br>";
}

echo "<br> <br>";


echo "Number 3:";
echo "<br> <br>";
for ($x = 5; $x >= 0; $x--){
	for ($y = 0; $y < $x; $y++){
		echo " * ";
	}
	echo "<br>";

}


echo "Number 4:";
echo "<br><br>";

for ($x = 5; $x >= 0; $x--){
	for($y = 5; $y > $x; $y--){
		echo "&nbsp &nbsp";
	}
		for ($z = 0; $z < $x; $z++){
			echo " * ";
		}

		echo "<br>";
}


?>

</p>


<h1>BONUS FOR (20PTS)</h1>

<p>
	<h1>Your Data !</h1>

	<br>
	
Welcome <?php echo $_POST["name"]; ?><br>
Your Name is: <?php echo $_POST["name"]; ?>
<br>
Date of Birth is: <?php echo $_POST["dateofbirth"] ?>
<br>
Address : <?php echo $_POST["address"]; ?>
<br>

Email : <?php echo $_POST["email"]; ?>
<br>

</p>



</body>
</html>