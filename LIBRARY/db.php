<?php
$conn=mysqli_connect("localhost","root","","library");
if (isset($_POST["submit"])) {
	$date=date("d/m/y");
	$name=$_POST["contact_name"];
	$message=$_POST["contact_message"];
	$qry=mysqli_query($conn,"insert into messages(Name, Messages, date) values ('$name', '$message', '$date')");
	if ($qry) {
		header("location: index.php");
	}
}
?>