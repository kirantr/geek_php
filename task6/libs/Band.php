<?php
class Band implements iBand
{
    protected $name;
    protected $gener;
    protected $musician=array();

    public function __construct($name, $gener)
    {
        $this->name = $name;
        $this->gener = $gener;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getGenre()
    {
        return $this->gener;
    }
    public function addMusician(iMusician $obj)
    {
        $this->musician[$obj->getMusicianType()[0]] = $obj->getMusicianType()[1];
    }
    public function getMusician()
    {
        return $this->musician;
    }
}