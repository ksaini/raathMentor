<?php

// Set new file name
if(isset($_GET['fname']))
	$new_image_name = $_GET['fname']."_".".jpg";
else
	$new_image_name = "newimage_".mt_rand().".jpg";

// upload file

move_uploaded_file($_FILES["file"]["tmp_name"], 'img/'.$new_image_name);
echo $new_image_name ;

?>