<?php
require 'includes/common.php';

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$text = mysqli_real_escape_string($connect,$_POST['name_file']);

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

$query = "INSERT INTO upload (name, size, type, content,text ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content','$text')";

mysqli_query($connect,$query) or die('Error, query failed'); 
//include 'library/closedb.php';

echo "<br>File $fileName uploaded<br>";
} 
?>