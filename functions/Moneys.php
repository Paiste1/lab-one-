<?php

class Moneys extends Start
{
    protected $array;

    public function __construct()
    {
        $start = $this->getMoneys();
        $this->array = $start['Valute'];
    }

    public function getMoney(int $int)
    {
        $value = $this->array[$int]['Value'];
        $result = round(str_replace(',', '.', $value), 2);
        return $result;
    }

    public function getDollar()
    {
        echo $this->getMoney(10);
    }

    public function getEuro()
    {
        echo $this->getMoney(11);
    }

    public function getSkrona()
    {
        echo $this->getMoney(29);
    }

    public function getJyen()
    {
        echo $this->getMoney(33);
    }

    public function getCdol()
    {
        echo $this->getMoney(14);
    }
}