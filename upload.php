<?php
if(isset($_POST['submit'])){
	
	if(getimagesize($_FILES['file']['tmp_name']) == false){
		echo"please select image";
		
	}else{
		$image = addslashes($_FILES['file']['tmp_name']);
		$name = addslashes($_FILES['file']['name']);
		$img = file_get_contents($image);
		$imag = base64_encode($img);
		saveimage($name,$imag);
		
	}
}
	function saveimage($name, $image){
		$con = mysqli_connect("localhost","group4", "Group4@TSM", "group4");
		mysqli_select_db("group4",$con);
		$qry="INSERT INTO uploads (name, pic) VALUES ('$name','$image')";
		$result = mysqli_query($qry,$con);
		if($result){
			echo"upload complete";
		}else{
			echo"upload not complete";

		}
	}
	
?>
