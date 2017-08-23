<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="./css/style.css" rel="stylesheet">
        <title>Task3</title>
    </head>
    <body>
            <div class="col-md-offset-4 col-md-7">
                <h2>String input & Replace</h2>
            </div>
        <div class="container center-block">
        <form  method="post"> 
           <h4> Number string for output:</h4>
            <input type="text" name="inputStr"><br>
           <h4> Number symbol for output:</h4>
             <h4><input type="text" name="inputSymb"><br>
             <h4>Number string for replace:</h4>
            <input type="text" name="repStr"><br>
             <h4>Number symbol for replace:</h4>
            <input type="text" name="repSymb"><br><br> </h4>
           <input class="button" type=submit value="Show"> 
        </form>
            <h3>File content:</h3>
        <?php

        echo fileGetCont($pathFile) . '<br>';
            
        echo '<h3>Output content:</h3>';
        foreach ($objFileRead->readFile as $key => $stringValue)
        {
            echo "$stringValue" . '<br>';
        }

        if (isset($_POST['inputStr']) && isset($_POST['repStr']) && isset($_POST['inputSymb']) && isset($_POST['repSymb']))
        {
            $inputStr = ($_POST['inputStr']);
            $repStr = ($_POST['repStr']);
            $inputSymb = ($_POST['inputSymb']);
            $repSymb = ($_POST['repSymb']);

            $flagStr = 'read';
            $replaceStr = '';
            $cont1 = $objFileRead->readArrayStr($inputStr, $flagStr, $replaceStr);
            echo '<div class="output">' . '<h3> String:</h3>' . $cont1;
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
            echo '<h3> Modified symbol:</h3>' . $cont4 .'</div>';

            $cont = $cont1 . $cont2 . $cont3 . $cont4;
            $objFileRead->saveContent($cont, $pathFileModif, $repStr, $repSymb);
        }
        ?>
        </div>
    </body>
</html>
