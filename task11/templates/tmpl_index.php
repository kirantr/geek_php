
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title>MySQL ActivRecord</title>
    </head>
    <body>
        <div class="col-md-offset-4 col-md-7">
            <h2>MySQL & ActivRecord</h2>
        </div>
        <div class="container center-block">
            <form method="post"  action="index.php">
                <div class="col-md-offset-4 col-md-7">
                    <p><input type="text" name="text" value="Input Data"> </p>
                </div>
                <div class="col-md-offset-3 col-md-9">
                    <br><p><input type="radio" name="flag" value="select" checked> Select</p>
                    <p><input type="radio" name="flag" value="insert"> Insert</p>
                    <p><input type="radio" name="flag" value="delete"> Delete</p>
                    <p><input type="radio" name="flag" value="update"> Update</p>
                    <p><input type="radio" name="flag" value="find"> Find</p>
                    <div class="col-md-offset-3 col-md-8"> 
                        <p><input type="submit" value="Send"></p><br>
                    </div>
                </div>
            </form>
            <?php
            if (
                    isset($_POST['flag'])
            )
            {
//SELECT
                if ($_POST['flag'] == 'select')
                {
                    $objMyTest->key = 'user7';
                    $selectMyTest = $objMyTest->getSelect();
                    foreach ($selectMyTest as $value)
                    {
                        echo
                        '<div class="col-md-offset-4 col-md-4 output">'
                        . $value['key'] . ' ' . $value['data']
                        . "</div>";
                    }
                }
//FIND
                if (($_POST['flag'] == 'find') && isset($_POST['text']))
                {
                    $objMyTest->data = $_POST['text'];
                    $selectMyTest = $objMyTest->getFind();
                    foreach ($selectMyTest as $value)
                    {
                        echo
                        '<div class="col-md-offset-4 col-md-4 output">'
                        . $value['key'] . ' ' . $value['data']
                        . "</div>";
                    }
                }
            }
            ?>
        </div>
    </body>
</html>
