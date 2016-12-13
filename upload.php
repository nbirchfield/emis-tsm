<?php
if(isset($_POST['submit'])) {


	$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

	$imageName = mysqli_real_escape_string($_FILES["image"]["name"]);
	$imageDate = mysqli_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType = mysqli_real_escape_string($_FILES["image"]["type"]);

	#if(substr($imageType, 0, 5) == "image") {
		echo "image type is : $imageType";
		mysqli_query($con, "insert into uploads values (null,$imageName,$imageDate)");
	/*} else {
		echo "images only";
    }*/

}
?>
