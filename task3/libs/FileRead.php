
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

    public function readArrayStr($inputStr, $flagStr, $replaceStr)
    {
        foreach ($this->readFile as $key => $stringValue)
        {
            if (is_numeric($inputStr))
            {
                if ($key == $inputStr)
                {
                    if ($flagStr == 'read')
                    {
                        return $key . ' ' . $stringValue;
                    } elseif ($flagStr == 'replace')
                    {
                        return $this->readFile [$inputStr] = $key . ' ' . $replaceStr;
                    }
                }
            } else
            {
                return NOT_NUM;
            }
        }
    }

    public function readArraySymb($inputStr, $inputSymb, $flagSymb, $repSymb)
    {
        foreach ($this->readFile as $key => $stringValue)
        {
            if (is_numeric($inputStr))
            {
                if ($key == $inputStr)
                {
                    if ($inputSymb <= strlen($stringValue))
                    {
                        if ($flagSymb == 'read')
                        {
                            return $inputSymb . ' ' . $stringValue{$inputSymb};
                        } elseif ($flagSymb == 'replace')
                        {
                            return $this->readFile[$inputStr] = $repSymb;
                        }
                    }
                }
            } else
            {
                return NOT_NUM;
            }
        }
    }

    public function saveContent($cont, $pathFileModif, $repStr, $repSymb)
    {
        if (isset($repStr) || isset($repSymb))
        {
            file_put_contents($pathFileModif, $cont);
        }
    }

}

