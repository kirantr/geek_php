<?php

include_once './config.php';
include_once './libs/Calc.php';

                 $date1 = ($_POST['date1']);
                 $date2 = ($_POST['date2']);

                 if (isset($_POST['plus']))
                 {
                     $sel = ($_POST['plus']);
                 }
                 if (isset($_POST['minus']))
                 {
                     $sel = ($_POST['minus']);
                 }
                 if (isset($_POST['multiplication']))
                 {
                     $sel = ($_POST['multiplication']);
                 }
                 if (isset($_POST['division']))
                 {
                     $sel = ($_POST['division']);
                 }
                 if (isset($_POST['precent']))
                 {
                     $sel = ($_POST['precent']);
                 }
                 if (isset($_POST['sqrt']))
                 {
                     $sel = ($_POST['sqrt']);
                 }
                 if (isset($_POST['ms']))
                 {
                     $sel = ($_POST['ms']);
                 }
                 if (isset($_POST['mr']))
                 {
                     $sel = ($_POST['mr']);
                 }
                 if (isset($_POST['+m']))
                 {
                     $sel = ($_POST['+m']);
                 }
                 if (isset($_POST['-m']))
                 {
                     $sel = ($_POST['-m']);
                 }
                 if (isset($_POST['mс']))
                 {
                     $sel = ($_POST['mс']);
                 }


                 $objCalc = new Calc();

                 $memory = 50;
                 $objCalc->setMemory($memory);

                 $objCalc->setDate1($date1, $sel);
                 $objCalc->setDate2($date2, $sel);


include_once './templates/index.php';

