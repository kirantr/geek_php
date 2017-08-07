<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task3</title>
    </head>
    <body>
		  <?php
			 echo'<form  method="post"> 
	 What symbol cange:
	<input type="text" name="inputStr"><br>
	 For what symbol change:
	 <input type="text" name="inputSymb"><br> 
	<input type=submit value="Show"> 
				</form>';
			 $inputStr = ($_POST['inputStr']);
			 $inputSymb = ($_POST['inputSymb']);

			 foreach ($objFileRead->readFile as $key => $stringValue)
			 {
				  echo "$stringValue" . '<br>';
			 }
			 echo $objFileRead->readArrayStr($inputStr);
			 echo $objFileRead->readArraySymb($inputStr, $inputSymb);
		  ?>
    </body>
</html>
