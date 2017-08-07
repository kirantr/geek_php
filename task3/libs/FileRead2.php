<?php


  $openFile = fopen($pathFile, "r");
  while (!feof($openFile))
  {
		$count = $count+1;
		echo "$count ";
		$tmp = fgets($openFile, 1024);
		echo $tmp . "<br>";
  }
  
  $arrSymb = str_split(file_get_contents("$pathFile"));
  foreach ($arrSymb as $key => $value)
  {
		echo "$value _";
  }
//  print_r($arrSymb);


  fclose($openFile);

  echo'<form  method="post"> 
	 What symbol cange:
	<input type="text" name="inputChange"><br>
	 For what symbol change:<input type="text" name="forWhat"><br> 
	<input name="plus" type=submit value="Change"> 
				</form>';
  $inputChange = ($_POST['inputChange']);
  $forWhat = ($_POST['forWhat']);
//  print_r($inputChange);

  $whatChange = "$inputChange";
//  $whereCange = "Hello World of PHP";
  $altered = str_replace($whatChange, $forWhat, $whereCange);
  print_r($altered);

  