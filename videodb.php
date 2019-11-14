<?php 
	session_start();
	if(!isset($_SESSION["id"]))
	{
	header("location:Login.php");
	}
	$conn=mysqli_connect("localhost", "root", "", "e learning");
	if(isset($_POST["submit"]))
	{	
		$name=$_SESSION["name"];
		$q=mysqli_query($conn ,"select * from tut where Name='$name'");
		$d=mysqli_fetch_array($q);
		$skl=$d["Skilll"];
		$filename= $_FILES["fle"]["name"];
		$fileTmpname= $_FILES["fle"]["tmp_name"];
		move_uploaded_file($fileTmpname, "videos/".$filename);
		$qry=mysqli_query($conn,"insert into videos(video_name, skill_name, tutor_name) values('$filename', '$skl', '$name') ");
		if($qry)
		{
			header("location: Upload videos.php");
		}
	}
?>