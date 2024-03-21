<html>
<head>
<style>
table,tr,td
{
	border:1 px solid black;
	width:35%;
	text-align:centre;
	background-color:DarkGray;
}
table
{
	margin:auto;
}
input,p
{
	tect-align:right;
}
</style>
</head>
<body>
<form method="post">	
<table>
<caption><h2>SIMPLE CALCULATOR</h2></caption>
<tr>
<td>First number:</td>
<td><input type="text" name="num1"/></td>
<td rowspan="2"><input type="submit" name="submit" value="calculate"></td>
</tr>
<tr>
<td>Second number:</td>
<td><input type="text" name="num2"/></td>
</tr>
</form>
<?php
if(isset($_POST['submit']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	if(is_numeric($num1) and is_numeric($num2))
	{
		echo "<tr><td>Addition:</td><td><p>".($num1+$num2)."</p></td>";
		echo "<tr><td>Subtraction:</td><td><p>".($num1-$num2)."</p></td>";
		echo "<tr><td>Multiplication:</td><td><p>".($num1*$num2)."</p></td>";
		echo "<tr><td>Division:</td><td><p>".($num1/$num2)."</p></td>";
		echo "</table>";
	}
	else
	{
		echo "<script type='text/javascript'>
		alert('ENTER VALID NUMBER');
		</script>";
	}
}
?>
</body>
</html>
