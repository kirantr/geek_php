<?php

include_once './libs/iBand.php';
include_once './libs/Band.php';
include_once './libs/iMusician.php';
include_once './libs/Musician.php';
include_once './libs/iInstrument.php';
include_once './libs/Instrument.php';


for ($n = 0; $n < 4; $n++)
{
    $instr = $_POST["instr" . $n . "gr1"];
    if ($instr !== 'selected')
    {
        echo "$instr" . '<br>';
    }
}

$guitar = new Instrument('Guitar', 'category');
$band1 = new Band('Band1', 'genre1');
$musician1 = new Musician('Name Surname', 'genre1');
$musician1->addInstrument($guitar);
$musician1->assingToBand($band1);
$band1->addMusician($musician1);

include_once './templates/tmpl_index.php';
