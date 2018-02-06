<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$letter = $_GET["letter"];
$number = $_GET['number'];
$counter = 1;

while($counter < $number){
	echo "cats ";
	$counter ++;
} 

?>

<p>

hello <?php echo $letter . " " . "cats"; ?>


	
</p>


</body>
</html>