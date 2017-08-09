<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
            <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">


        <title>Calculator</title>
    </head>
    <body>
        <h2>Calculator</h2>
        <?php
         echo
         '<div class="container"><table class="table" border="1">
            <tbody>
            <tr>
                <td>
                    <form  method="post" action="index.php"> 
                    <input type="text" name="date1"> 
                    <input type="text" name="date2">
                </td>
            </tr>
            <tr>
                <td>
                    <input name="plus" type=submit value="+"> 
                    <input name="minus" type=submit value="-"> 
                    <input name="multiplication" type=submit value="*"> 
                    <input name="division" type=submit value="/"> 
                    <input name="precent" type=submit value="%"> 
                    <input name="sqrt" type=submit value="sqrt"> 
                </td>
            </tr>
            <tr>
                <td>
                    <input name="ms" type=submit value="ms"> 
                    <input name="mr" type=submit value="mr"> 
                    <input name="+m" type=submit value="+m"> 
                    <input name="-m" type=submit value="-m"> 
                    <input name="mс" type=submit value="mс"> 
                </td>
            </tr>
            <tr>
                <td>
                    <input type="reset" value="Reset"> 
                    <input type=submit value="Clean"> 
                </td>
                </form>
            </tr>';
         $date1 = ($_POST['date1']);
         $date2 = ($_POST['date2']);

         if (isset($_POST['plus']))
         {
             $sel = ($_POST['plus']);
         }
         if (isset($_POST['minus']))
         {
             $sel = ($_POST['minus']);
         }
         if (isset($_POST['multiplication']))
         {
             $sel = ($_POST['multiplication']);
         }
         if (isset($_POST['division']))
         {
             $sel = ($_POST['division']);
         }
         if (isset($_POST['precent']))
         {
             $sel = ($_POST['precent']);
         }
         if (isset($_POST['sqrt']))
         {
             $sel = ($_POST['sqrt']);
         }
         if (isset($_POST['ms']))
         {
             $sel = ($_POST['ms']);
         }
         if (isset($_POST['mr']))
         {
             $sel = ($_POST['mr']);
         }
         if (isset($_POST['+m']))
         {
             $sel = ($_POST['+m']);
         }
         if (isset($_POST['-m']))
         {
             $sel = ($_POST['-m']);
         }
         if (isset($_POST['mс']))
         {
             $sel = ($_POST['mс']);
         }


         $objCalc = new Calc();

         $memory = 50;
         $objCalc->setMemory($memory);

         $objCalc->setDate1($date1, $sel);
         $objCalc->setDate2($date2, $sel);
         echo '<tr><td>' . $objCalc->getDate1();
         echo "$sel";
         echo $objCalc->getDate2();

         echo $objCalc->select($sel) . '</td>';
         $calc->cleanM;
         echo '</td></tr></tbody></div>';
        ?>


    </body>
</html>
