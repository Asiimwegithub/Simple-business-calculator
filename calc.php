<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="calculator" align="center">
		
	<form>
		<h3 style="color: black;">Simple Calculator</h3>
	<input type="text" name="num1" placeholder="enter number 1"><br>
	<input type="text" name="num2" placeholder="enter number 2"><br>
	<select name="solve">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
		<option>Modulus</option>

	</select><br>
	<button type="submit" value="submit" name="submit">calculate</button>

</form>

<?php

if(isset($_GET['submit'])){
	$result1 =$_GET['num1'];
	$result2 =$_GET['num2'];
	$solve =$_GET['solve'];
	switch($solve){

		case "None":
		echo "ERROR";
		break;

		case "Add":
		echo $result1 + $result2."  is the Answer";
		break;

		case "Subtract":
		echo $result1 - $result2. "  is the Answer";
		break;

		case "Multiply":
		echo "The Answer is ".$result1 * $result2;
		break;
		case "Divide":
		echo "The Answer is ".$result1 /$result2;
		break;

		case "Modulus":
		echo "The Remainder is ".$result1 % $result2;
		break;
		default:
		echo "select the operater pliz";

	}



}




?>

</div>


</body>
</html>