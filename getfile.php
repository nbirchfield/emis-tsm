<html>
<head>
<title>Process Uploaded File</title>
</head>
<body>
<?php
move_uploaded_file ($_FILES['uploadFile'] ['tmp_name'], 
       "../uploads2/{$_FILES['uploadFile'] ['name']}")
?>
</body>
</html>
