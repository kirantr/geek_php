
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title>%TITLE%</title>
    </head>
    <body>
        <div class="col-md-offset-4 col-md-7">
            <h2>Contact Form</h2>
        </div>
        <div class="container center-block">
            <div style="color: #FF0000; font-size: 15px;">
                <strong>%ERRORS%</strong>
            </div>
            <form method="post"  action="index.php">
                <div class="col-md-offset-4 col-md-7">
                    <p>Full Name: <input type="text" name="fullName" value="%FULLNAME%" placeholder="Full Name"> </p>
                </div>
                <div class="col-md-offset-3 col-md-9">
                    <p>Subject: <select type="text" name="flag" value="select" checked>
                            <option %SELECT_0% value="0">%THEM_0%</option>
                        </select></p>
                    <p>Email: <input type="text" name="email" value="%EMAIL%" placeholder="Email"> </p>
                    <textarea rows="8" cols="25" name="message" placeholder="Message">%MESSAGE%</textarea>
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
