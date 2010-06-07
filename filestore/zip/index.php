<? 

/** 
* Change the path to your folder. 
* 
* This must be the full path from the root of your 
* web space. If you're not sure what it is, ask your host. 
* 
* Name this file index.php and place in the directory. 
*/ 

// Define the full path to your folder from root 
$path = $_SERVER["DOCUMENT_ROOT"]."/wp-content/plugins/grapefile/filestore/zip/"; 
// Open the folder 
$dir_handle = @opendir($path) or die("Unable to open $path"); 

// Loop through the files 
while ($file = readdir($dir_handle)) { 

if($file == "." || $file == ".." || $file == "index.php" || $file == "index2.php" ) 

continue; 
echo filesize($file) . ' bytes - &nbsp;&nbsp; - &nbsp;&nbsp;';

echo "<a href=\"../wp-content/plugins/grapefile/filestore/zip/$file\">$file</a><br>"; 

} 

// Close 
closedir($dir_handle); 

?>
<h3 style="border-top: 1px solid #C0C0C0; margin-bottom: -5px">GrapeFile 1.1</h3>