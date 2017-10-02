
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title>%TITLE%</title>
    </head>
    <body>
        <div class="col-md-offset-5 col-md-7">
            <h2>Contact Form</h2>
            <div class="err">
                        <strong>%ERRORS%</strong>
                    </div>
        </div>
        <div class="container center-block">
            <form method="post"  action="index.php">
                <div class="col-md-offset-4 col-md-8">
                    <p>Full Name: <input type="text" name="fullName" value="%FULLNAME%" placeholder="Full Name"> </p>
                    <div class="err">
                        <strong>%FULLNAME_ERROR%</strong>
                    </div>
                </div>
                <div class="col-md-offset-4 col-md-8">
                    <p>Subject: <select type="text" name="subject" value="select" checked>
                            <option %SELECT_selected% value="selected">%OPT_selected%</option>
                            <option %SELECT_1% value="opt_1">%OPT_1%</option>
                            <option %SELECT_2% value="opt_2">%OPT_2%</option>
                            <option %SELECT_3% value="opt_3">%OPT_3%</option>
                        </select></p>
                    <div class="err">
                        <strong>%SUBJECT_ERROR%</strong>
                    </div>
                    <p>Email: <input type="text" name="email" value="%EMAIL%" placeholder="Email"> </p>
                    <div class="err">
                        <strong>%EMAIL_ERROR%</strong>
                    </div>
                    <textarea rows="8" cols="35" name="message" placeholder="Message">%MESSAGE%</textarea>
                    <div class="err">
                        <strong>%MESSAGE_ERROR%</strong>
                    </div>
                    <div class="col-md-offset-2 col-md-8"> 
                        <br><p><input type="submit" value="Send"></p>
                    </div>
                </div>
            </form>
            <div class="col-md-offset-4 col-md-4 output">
                %SUCCES%
            </div>
        </div>
    </body>
</html>
