<?php

include_once './const.php';

$name;
$type;
function input($name){
echo "<form method=post enctype=multipart/form-data> 
Select file: <input type=file name=$name> 
<input type=submit value=Upload> 
</form>";
}

input(UserFile);
//if (isset($_FILES["myfile"])) // Если файл существует проверка
//{
//    if (is_dir($catalog)) // Если такой каталог есть Проверка
//if(!empty($_FILES['UserFile']['tmp_name'])) 
//{
//    echo '5';
//}

$uploadfile = $upload_path . basename($_FILES['UserFile']['name']);
if (copy($_FILES['UserFile']['tmp_name'], $uploadfile))
{
echo "<h3>The file was successfully uploaded</h3>";
} else
{
echo "<h3>Error! Could not upload the file</h3>";
//    exit;
}
//$a = $upload_path . "test.txt";
//if (glob($a))
//{
//    print_r($a . "<br>");
//}
$files_array = scandir($upload_path);
for ($i = 2;
$i < count($files_array);
$i++)
{
$file_name = $files_array[$i];
$file_size = filesize($upload_path . $files_array[$i]);
echo $file_name;
if ($file_size < 1024)
{
echo " " . $file_size . " Byte <br>";
} elseif ($file_size > 1024 && $file_size < 1048576)
{
$file_size = $file_size / 1024;
echo " " . $file_size . " Kbyte <br> ";
} elseif ($file_size > 1048576)
{
echo " " . $file_size / 1048576 . " Mbyte";
}
}

unlink($a)
?>
