<?php
if(isset($_POST['submit'])){
	
	if(getimagesize($_FILES['file']['tmp_name']) == false){
		echo"please select image";
		
	}else{
		$image = addslashes($_FILES['file']['tmp_name']);
		$name = addslashes($_FILES['file']['name']);
		$image = file_get_contents($image);
		$image = base64_encode($image);
		saveimage($name,$image);
		
	}
}
	function saveimage($name, $image){
		$con = mysql_connect("localhost","group4", "Group4@TSM", "group4");
		mysql_select_db("group4",$con);
		$qry="INSERT INTO uploads (name, pic) VALUES ('$name','$image')";
		$result = mysql_query($qry,$con);
		if($result){
			echo"upload complete";
		}else{
			echo"upload not complete";

		}
	}
	
?>
