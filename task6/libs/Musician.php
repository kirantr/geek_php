<?php
class Musician implements iMusician
{
    protected $name;
    protected $genre;
    protected $instrument = array();
    protected $nameBand = array();

    public function  __construct($name, $genre)
    {
        $this->name = $name;
        $this->genre = $genre;
    }

    public function addInstrument(iInstrument $obj)
    {
        $this->instrument[$obj->getName()]=$obj->getCategory();
    }

    public function getInstrument()
    {
        return $this->instrument;
    }
    public function assingToBand(iBand $nameBand)
    {
        $this->nameBand[$nameBand->getName()] = $nameBand->getGenre();
    }


    public function getMusicianType()
    {
        $musician = array(
            $this->name,
            $this->genre,
            $this->instrument,
            $this->nameBand
        );
        return $musician;
    }

}