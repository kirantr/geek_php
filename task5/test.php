<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dbServerPg = pg_connect("host=localhost dbname=user1 user=user1 password=user1z")
                or die(pg_last_error());
        ?>
    </body>
</html>
