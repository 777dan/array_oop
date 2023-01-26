<?php
class Arr
{
    public $numbersArr;
    public function __construct($numbersArr)
    {
        $this->numbersArr = $numbersArr;
    }
    public function getNumbersArr()
    {
        return $this->numbersArr;
    }
}

class Output extends Arr
{
    public function __toString()
    {
        return $this->getNumbersArr();
    }
}
