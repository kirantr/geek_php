<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $mysqli = new mysqli("localhost", "user1", "tuser1", "user1");
/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}

/* Создание таблицы не возвращает результирующего набора */
if ($mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
    printf("Таблица myCity успешно создана.\n");
}
else
{
    printf("Таблица myCity не создана.\n");
}

/* Select запросы возвращают результирующий набор */
if ($result = $mysqli->query("SELECT Name FROM my_test LIMIT 10")) {
    printf("Select вернул %d строк.\n", $result->num_rows);

    /* очищаем результирующий набор */
    $result->close();
}
else
{
    printf("Select не вернул строк.\n",'');
}

        ?>
    </body>
</html>
