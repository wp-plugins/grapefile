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
$path = $_SERVER["DOCUMENT_ROOT"]."/wp-content/plugins/Grapefile/filestore/"; 
// Open the folder 
$dir_handle = @opendir($path) or die("Unable to open $path"); 

// Loop through the files 
while ($file = readdir($dir_handle)) { 

if($file == "." || $file == ".." || $file == "index.php" ) 

continue; 
echo filesize($file) . ' bytes - &nbsp;&nbsp; - &nbsp;&nbsp;';

echo "<a href=\"../wp-content/plugins/Grapefile/filestore/$file\">$file</a><br>"; 

} 

// Close 
closedir($dir_handle); 

?>
<h3 style="border-top: 1px solid #C0C0C0; margin-bottom: -5px">GrapeFile v0.1</h3>