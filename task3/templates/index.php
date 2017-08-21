<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <title>Task3</title>
    </head>
    <body>
        <div class="container center-block ">
            <div class="col-md-offset-3 col-md-6">
                <h1>String/Symbol chenger</h1>
            </div>
            <div class="col-md-offset-2 col-md-8">
            <form  class="form-inline" method="post"> 
                <h3>Number string for output:</h3>
                <input class="input-sm"type="text" name="inputStr"><br> 
                <h3>Number symbol for output:</h3>
                <input class="input-sm" type="text" name="inputSymb"><br>
                <h3>Number string for replace:</h3>
                <input class="input-sm" type="text" name="repStr">
                <h3>Number symbol for replace:</h3>
                <input class="input-sm" type="text" name="repSymb"><br><br> 
                <input type=submit value="Show"> 
            </form>
            </div>
            <div class="col-md-offset-2 col-md-8">

            <?php
             echo '<h3>File contents:</h3>'
             . $objFileRead->fileGetCont();

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

             $cont = $cont1 . $cont2 . $cont3 . $cont4;
             $objFileRead->saveContent($cont, $pathFileModif, $repStr, $repSymb);
            ?>
        </div>
        </div>
    </body>
</html>
