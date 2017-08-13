<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task3</title>
    </head>
    <body>
		  <?php
			 echo'<form  method="post"> 
						  Number string for output:
						 <input type="text" name="inputStr"><br>
						  Number symbol for output:
						  <input type="text" name="inputSymb"><br> 
						  Number string for replace:
						 <input type="text" name="repStr"><br>
						  Number symbol for replace:
						  <input type="text" name="repSymb"><br> 
						 <input type=submit value="Show"> 
					</form>';
			 echo $objFileRead -> fileGetCont();
			 
			 $inputStr = ($_POST['inputStr']);
			 $repStr = ($_POST['repStr']);
			 $inputSymb = ($_POST['inputSymb']);
			 $repSymb = ($_POST['repSymb']);

			 foreach ($objFileRead->readFile as $key => $stringValue)
			 {
				  echo "$stringValue" . '<br>';
			 }
			 $flagStr = 'read';
			 $replaceStr = '';
			 $cont1 = $objFileRead->readArrayStr($inputStr, $flagStr, $replaceStr);
			 echo '<h3> String:</h3>' . $cont1;
			 $flagSymb = 'read';
			 $cont2 = $objFileRead->readArraySymb($inputStr, $inputSymb, $flagSymb, $repSymb);
			 echo '<h3> Symbol:</h3>' . $cont2;

			 $flagStr = 'replace';
			 $replaceStr = 'This is a modified string';
			 $inputStr = $repStr;
			 $cont3 = $objFileRead->readArrayStr($inputStr, $flagStr, $replaceStr);
			 echo '<h3> Modified String:</h3>' . $cont3;
			 
			 $flagSymb = 'replace';
			 $repSymb = 'M';
			 $inputSymb = $repSymb;
			 $cont4 = $objFileRead->readArraySymb($inputStr, $inputSymb, $flagSymb, $repSymb);
			 echo '<h3> Modified symbol:</h3>' . $cont4;
			 
			 $cont=$cont1 . $cont2 . $cont3 . $cont4;
			 $objFileRead->saveContent($cont, $pathFileModif, $repStr, $repSymb);
		  ?>
    </body>
</html>
