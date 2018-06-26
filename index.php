<!DOCTYPE html>
<html>
<head>
	<title>hello world !</title>
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
</body>
</html>