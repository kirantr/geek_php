<?php

 class FileRead
 {

     public function __construct($pathFile)
     {
         if (file_exists($pathFile))
         {
             $this->readFile = file($pathFile);
             return($this->readFile);
         }
     }

     public function fileGetCont()
     {
         $content = file_get_contents($this->filePath);
         print_r(($content));
     }

     public function readArrayStr($inputStr)
     {
         foreach ($this->readFile as $key => $stringValue)
         {
             if (is_numeric($inputStr))
             {
                 if ($key == $inputStr)
                 {
                     return $stringValue;
                 }
             } else
             {
                 return NOT_NUM;
             }
         }
     }

     public function readArraySymb($inputStr, $inputSimb)
     {
         foreach ($this->readFile as $key => $stringValue)
         {
             if (is_numeric($inputStr))
             {
                 if ($key == $inputStr)
                 {
                     if ($inputSimb == strlen($stringValue))
                     {

                         return $stringValue{$inputSimb};
                     }
                 }
             } else
             {
                 return NOT_NUM;
             }
         }
     }

 }
 