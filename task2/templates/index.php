<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>

        <?php
        echo
        '<form  method="post action=index.php"> 
            <input type="text" name="date1"> 
            <input type="text" name="date2"> 
            <input name="plus" type=submit value="+"> 
            <input name="minus" type=submit value="-"> 
            <input name="multiplication" type=submit value="*"> 
            <input name="division" type=submit value="/"> 
	</form>';
        $date1 = ($_POST['date1']);
        $date2 = ($_POST['date2']);
        $plus = ($_POST['plus']);
        $minus = ($_POST['minus']);
        $multiplication = ($_POST['multiplication']);
        $division = ($_POST['division']);


        $objCalc = new Calc();
        $objCalc->setDate1($date1);
        $objCalc->setDate2($date2);
//        echo $objCalc->plus();
//        echo $objCalc->minus();
//        echo $objCalc->multiplication();
//        echo $objCalc->division();
//        echo $objCalc->precent();
        ?>
    </body>
</html>
