<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title>iWorkData</title>
    </head>
    <body>
        <div class="col-md-offset-4 col-md-7">
            <h2>iWorkData</h2>
        </div>
        <div class="container center-block">
            <form method="post"  action="index.php">
                <div class="col-md-offset-4 col-md-7">
                    <p><input type="text" name="text" value="Input Data"> </p>
                </div>
                <div class="col-md-offset-4 col-md-8">
                    <p><input type="radio" name="db" value="mysql" checked> MySQL
                        <span class="col-md-offset-1">  <input type="radio" name="db" value="pg"> PostgreSQL</span>
                        <span class="col-md-offset-1">  <input type="radio" name="db" value="session"> Session</span>
                        <span class="col-md-offset-1">  <input type="radio" name="db" value="cookie"> Cookie</p></span>
                </div>
                <div class="col-md-offset-3 col-md-9">
                    <br><p><input type="radio" name="flag" value="select" checked> Get Data</p>
                    <p><input type="radio" name="flag" value="insert"> Save Data</p>
                    <p><input type="radio" name="flag" value="delete"> Delete Data</p>
                    <div class="col-md-offset-3 col-md-8"> 
                        <p><input type="submit" value="Send"></p><br>
                    </div>
                </div>
            </form>
            <?php
            if(isset($_POST['db']))
            {
//SELECT
            if (isset($selectMySQL ))
            {
                    foreach ($selectMySQL as $value)
                    {
                        echo
                        '<div class="col-md-offset-4 col-md-4 output">'
                        . $value['key'] . ' ' . $value['data']
                        . "</div>";
                    }
                }

//SELECT PG

             if ($_POST['db'] == 'pg')
             {
                 $selectPgSQL = $objPgSQL->getData($key);

                    foreach ($selectPgSQL as $value)
                    {
                        echo
                        '<div class="col-md-offset-4 col-md-4 output">'
                        . $value['key'] . ' ' . $value['data']
                        . "</div>";
                    }
                }

//COOKIE     
                if ($_POST['db'] == 'cookie')
                {
                    $selectCookie = $objCookie->getData($key);
                    echo
                    '<div class="col-md-offset-4 col-md-4 output">'
                    . $selectCookie
                    . "</div>";
                }
//SESSION     
                if ($_POST['db'] == 'session')
                {
                    $selectSession = $objSession->getData($key);
                    echo
                    '<div class="col-md-offset-4 col-md-4 output">'
                    . $selectSession
                    . "</div>";
                }
            }
            ?>
        </div>
    </body>
</html>
