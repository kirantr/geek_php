<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title>iBand</title>
    </head>
    <body>
        <div class="col-md-offset-4 col-md-7">
            <h2>iBand</h2>
        </div>
        <div class="container center-block">
            <form method="post"  action="index.php">
                <?php

                function foo($i, $j)
                {
                    $a = "
                 <div class='col-md-offset-4 col-md-8'>
                 
                    <p><input type='text' name='text$i$j' value='Name Surname$i$j'>
                    <select name='instr$i$j'>
                        <option value='selected' selected>Select</option>
                        <option value='bass'>Bass</option>
                        <option value='guitar'>Guitar</option>
                        <option value='drums'>Drums</option>
                        <option value='piano'>Piano</option>
                    </select>
                </div>
                        ";
                    return $a;
                }

                function foo2($j)
                {
                    echo "<h3>$j</h3>";
                    for ($i = 0; $i < 4; $i++)
                    {
                        echo foo($i, $j);
                    }
                }

                $j1 = 'gr1';
                $j2 = 'gr2';

                foo2($j1);
                foo2($j2);
//SELECT
//    if ($_POST['flag'] == 'select')
//    {
//        $key = 'user7';
//        if ($_POST['db'] == 'mysql')
//        {
//            $selectMySQL = $objMySQL->getData($key);
//
//            foreach ($selectMySQL as $value)
//            {
//                echo
//                '<div class="col-md-offset-4 col-md-4 output">'
//                . $value['key'] . ' ' . $value['data']
//                . "</div>";
//            }
//        }
//    }
                ?>
                <div class="col-md-offset-3 col-md-8"> 
                    <p><input type="submit" value="Send"></p><br>
                </div>
            </form>
        </div>
    </body>
</html>
