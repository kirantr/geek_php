<?php

class MyClass
{
    const CONSTANT = 'znachenie constanty';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n"; // начиная с версии PHP 5.3.0

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT."\n";

?>
