<?php
if(isset($_POST['submit'])) {


	$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

	$imageName = mysqli_real_escape_string($_FILES["image"]["name"]);
	$imageData = mysqli_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType = mysqli_real_escape_string($_FILES["image"]["type"]);

	#if(substr($imageType, 0, 5) == "image") {
		echo $imageData;
		/*if(mysqli_query($con, "insert into uploads values (null ,$imageName,$imageData)")) {
			echo "works";
		} else {
			echo "failed: ". mysqli_errno($con);
		}*/
	/*} else {
		echo "images only";
    }*/

}
?>
