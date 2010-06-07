<? 

/** 
* Change the path to your folder. 
* 
* This must be the full path from the root of your 
* web space. If you're not sure what it is, ask your host. 
* 
* Name this file index2.php and place in the directory. 
*/ 

// Define the full path to your folder from root 
$path = $_SERVER["DOCUMENT_ROOT"]."/wp-content/plugins/grapefile/filestore/mp3/"; 
// Open the folder 
$dir_handle = @opendir($path) or die("Unable to open $path"); 

// Loop through the files 
while ($file = readdir($dir_handle)) { 

if($file == "." || $file == ".." || $file == "index.php" || $file == "index2.php" )

continue; 
echo filesize ($file) . ' bytes - &nbsp;&nbsp;';

echo "$file<br />"; 

} 

// Close 
closedir($dir_handle); 

?>