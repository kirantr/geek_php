<?php

include_once './config.php';
include_once 'libs/Sql.php';
//MYSQL
$objSQL = new SQL();

            if (
                    isset($_POST['db'])
                   || isset($_POST['flag'])
               )
            {
                if ($_POST['db'] == 'mysql')
                {
                    $key = "`key`";
                    $data = "`data`";
                    $value = "'user7'";
                    $nameTableA = NAME_TABLE_A;
                    $nameTableB = NAME_TABLE_B;
                } elseif ($_POST['db'] == 'pg')
                {

                    $key = "key";
                    $data = "data";
                    $value = "'user7'";
                    $nameTableA = PG_NAME_TABLE_A;
                    $nameTableB = PG_NAME_TABLE_B;
                }

//DISTINCT

                if ($_POST['flag'] == 'distinct')
                {
                    $output = $objSQL->
                            select('', '')->
                            distinct($key, $data)->
                            from($nameTableA)->
                            where($value, $key)->
                            exec();
                }

// INNER JOIN
                if ($_POST['flag'] == 'inner_join')
                {
                    $output = $objSQL->
                            select($key, $data)->
                            from($nameTableA)->
                            innerJoin($nameTableB)->
                            on($nameTableA, $nameTableB, $key)->
                            exec();
                }

//LEFT OUTER JOIN
                if ($_POST['flag'] == 'leftJoin')
                {
                    $output = $objSQL->
                            select($key, $data)->
                            from($nameTableA)->
                            leftJoin($nameTableB)->
                            on($nameTableA, $nameTableB, $value)->
                            exec();
                }

//RIGHT  OUTER JOIN
                if ($_POST['flag'] == 'rightJoin')
                {
                    $output = $objSQL->
                            select($key, $data)->
                            from($nameTableA)->
                            rightJoin($nameTableB)->
                            on($nameTableA, $nameTableB, $value)->
                            exec();
                }

//CROSS JOIN
                if ($_POST['flag'] == 'crossJoin')
                {
                    $output = $objSQL->
                            select($key, $data)->
                            from($nameTableA)->
                            crossJoin($nameTableB)->
                            exec();
                }

//NATURAL JOIN
                if ($_POST['flag'] == 'naturalJoin')
                {
                    $output = $objSQL->
                            select($key, $data)->
                            from($nameTableA)->
                            naturalJoin($nameTableB)->
                            exec();
                }

            }
include_once './templates/tmpl_index.php';


