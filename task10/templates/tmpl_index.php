<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title></title>
    </head>
    <body>
        <div class="col-md-12">
            <center>
            <h2>MySQL & PostgreSQL</h2>
        </center>
        </div>
        <div class="container center-block">
            <form method="post"  action="index.php">
                <!--                <div class="col-md-offset-4 col-md-7">
                                    <p><input type="text" name="text" value="Input Data"> </p>
                                </div>-->
                <div class="col-md-offset-4 col-md-8">
                    <p><input type="radio" name="db" value="mysql" checked> MySQL
                        <span class="col-md-offset-2">  <input type="radio" name="db" value="pg"> PostgreSQL</p></span>
                </div>
                <div class="col-md-offset-3 col-md-9">
                    <br><p><input type="radio" name="flag" value="distinct"checked> DISTINCT</p>
                    <p><input type="radio" name="flag" value="inner_join" > INNER JOIN</p>
                    <p><input type="radio" name="flag" value="leftJoin"> LEFT OUTER JOIN</p>
                    <p><input type="radio" name="flag" value="rightJoin"> RIGHT OUTER JOIN</p>
                    <p><input type="radio" name="flag" value="crossJoin"> CROSS JOIN</p>
                    <p><input type="radio" name="flag" value="naturalJoin"> NATURAL JOIN</p>
                    <div class="col-md-offset-3 col-md-8"> 
                        <p><input type="submit" value="Send"></p><br>
                    </div>
                </div>
            </form>
            <?php
            if (
                    isset($_POST['db']) || isset($_POST['flag'])
            )
            {

                echo '<div class="col-md-12 output"><center>' .
                $output
                . '</center></div>';
            }
            ?>
        </div>
    </body>
</html>
