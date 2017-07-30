<?php

  // Выключение протоколирования ошибок
  error_reporting(0);

// Включать в отчет простые описания ошибок
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

  include_once '../config.php';

  $name;
  $type;

//  function input($name)
//  {
  echo "<form method=post action=../templates/index.php enctype=multipart/form-data> 
    Select file: <input type=file name=UserFile> 
    <input type=submit value=Upload> 
    </form>";

//  }
  function delete($fileDelete)
  {
      echo "<form method=post action=../templates/index.php> 
    <input type=hidden name=name value=$fileDelete> 
    <input type=submit value=Delete> 
  </form>";
  }
//      if(!empty($_POST['name']))
//      print_r('$fileDelete');

  print_r($_POST['name']);
//  input(UserFile);
//if (isset($_FILES["myfile"])) // Если файл существует проверка
//{
//    if (is_dir($catalog)) // Если такой каталог есть Проверка
//if(!empty($_FILES['UserFile']['tmp_name'])) 
//{
//    echo '5';
//}

  if (!empty($_FILES['UserFile']['name']))
  {
      $uploadfile = $upload_path . basename($_FILES['UserFile']['name']);
//      print_r(($_FILES['UserFile']['name']));
      if (copy($_FILES['UserFile']['tmp_name'], $uploadfile))
      {
          echo "<h3>The file was successfully uploaded</h3>";
      } else
      {
          echo "<h3>Error! Could not upload the file</h3>";
//    exit;
      }
  } else
  {
      echo 'Choose File <br>';
  }
//$a = $upload_path . "test.txt";
//if (glob($a))
//{
//    print_r($a . "<br>");
//}
  $files_array = scandir($upload_path);
  for ($i = 2; $i < count($files_array); ++$i)
  {
//          print_r($files_array[2]);
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

//      if (!empty($files_array[2]))
//      {
//          
//      } else
//      {
//          echo 'Empty directory';
//      }
      $fileDelete = $upload_path . $files_array[$i];
      delete($fileDelete);
  }

  unlink($a)
?>
