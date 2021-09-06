<?php


class Weather extends Start
{
    protected $weather;

    public function __construct()
    {
        $this->weather = $this->getWeather();
    }

    public function weatherNow()
    {
        echo round($this->weather->main->temp);
    }

    public function weatherHere()
    {
        echo round($this->weather->main->feels_like);
    }

    public function weatherText()
    {
        echo $this->weather->weather[0]->description;
    }
}