<?php

class Start
{
    protected function getMoneys()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.cbr.ru/scripts/XML_daily.asp?date_req=05/09/2021");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $retValue = curl_exec($ch);
        $result = new SimpleXMLElement($retValue);

        return json_decode(json_encode($result), true);
    }

    protected function getWeather()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.openweathermap.org/data/2.5/weather?q=moskou&appid=dbcf88f34ee8d80ae20fa30aad148054&lang=ru&units=metric");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);

        return json_decode($result, false);
    }

}