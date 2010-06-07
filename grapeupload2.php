<?php
$uploaddir = $_SERVER["DOCUMENT_ROOT"].'/wp-content/plugins/grapefile/filestore/avi/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  echo "success";
} else {
  // WARNING! DO NOT USE "FALSE" STRING AS A RESPONSE!
  // Otherwise onSubmit event will not be fired
  echo "error";
}
?>
