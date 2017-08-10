<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title>Calculator</title>
    </head>
    <body>
        <div class="container center-block ">
            <div class="starter-template text-center">
                <h1 class="">Calculator</h1>
            </div>

            <table class="table container" >
                <tbody>
                    <tr>
                <form  method="post" action="index.php"> 
                    <td class="num">
                        <input class="input-sm" type="text" name="date1"> 
                        <input class="input-sm" type="text" name="date2">
                    </td>
                    </tr>
                    <tr>
                        <td class="btn-block">
                            <button name="plus" type=submit value="+">+</button> 
                            <button name="minus" type=submit value="-">-</button> 
                            <button name="multiplication" type=submit value="*">*</button> 
                            <button name="division" type=submit value="/">/</button> 
                            <button name="precent" type=submit value="%">%</button> 
                            <button name="sqrt" type=submit value="sqrt">sqrt</button> 
                        </td>
                    </tr>
                    <tr>
                        <td class="btn-block">
                            <button name="ms" type=submit value="ms">ms</button> 
                            <button name="mr" type=submit value="mr">mr</button>
                            <button name="+m" type=submit value="+m">+m</button>
                            <button name="-m" type=submit value="-m">-m</button>
                            <button name="mс" type=submit value="mс">mс</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="btn-block">
                            <button type="reset" value="Reset">Reset</button> 
                            <button type=submit value="Clean">Clean</button> 
                        </td>
                </form>
                </tr>
                <?php
                 echo
                 '
            ';
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
                 echo '<tr class="output"><td>' 
                 . $objCalc->getDate1();
                 echo "$sel";
                 echo $objCalc->getDate2();

                 echo $objCalc->select($sel) . '</td>';
                 $calc->cleanM;
                 echo '</td></tr></tbody>';
                ?>
        </div>


    </body>
</html>
