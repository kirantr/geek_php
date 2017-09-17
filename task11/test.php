<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $link = new mysqli("localhost", "user1", "tuser1", "user1");
/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}

/* Создание таблицы не возвращает результирующего набора */
if (mysqli_query($link, "CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
    printf("Таблица myCity успешно создана.\n");
}
else
{
    printf("Таблица myCity не создана.\n");
}

/* Select запросы возвращают результирующий набор */
if ($result = mysqli_query($link, "SELECT `key`, `data` FROM MY_TEST ")) {
    printf("Select вернул %d строк.\n", mysqli_num_rows($result));
	 
	 /* Выборка результатов запроса */
    while( $row = mysqli_fetch_assoc($result) ){
        echo("<br>". $row['key']. $row['data']);
    } 

    /* очищаем результирующий набор */
    mysqli_free_result($result);
	 
}
else
{
    printf("Select не вернул строк.\n",'');
}

        ?>
    </body>
</html>
