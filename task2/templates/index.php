<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>

        <?php
         echo
         '<form  method="post" action="index.php"> 
            <input type="text" name="date1"> 
            <input type="text" name="date2"> 
            <input name="plus" type=submit value="+"> 
            <input name="minus" type=submit value="-"> 
            <input name="multiplication" type=submit value="*"> 
            <input name="division" type=submit value="/"> 
            <input name="precent" type=submit value="%"> 
            <input name="precent" type=submit value="sqrt"> 
            <input name="MS" type=submit value="ms"> 
            
	</form>';
         $date1 = ($_POST['date1']);
         $date2 = ($_POST['date2']);
         $plus = ($_POST['plus']);
         $minus = ($_POST['minus']);
         $multiplication = ($_POST['multiplication']);
         $division = ($_POST['division']);
         $precent = ($_POST['precent']);
         $sqrt = ($_POST['sqrt']);
         $ms = ($_POST['ms']);

         $objCalc = new Calc();

         $objCalc->setDate1("$date1");
         echo $objCalc->getDate1();

         $objCalc->setDate2("$date2", $division);
         echo $objCalc->getDate2();
        ?>
    </body>
</html>
