<?php

namespace App\Services;

use DateTime;

/**
 * Api Call to OpenWeather
 */
class weather
{
    private $data;
    private $temperature;
    private $clouds;
    private $humidity;
    private $sunrise;
    private $sunset;
    protected const API_KEY = "xxx";

    public function __construct($ville)
    {

        $curl = curl_init("api.openweathermap.org/data/2.5/weather?q=".$ville."&appid=".self::API_KEY."&units=metric");
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        $this->data = curl_exec($curl);
        $this->data = json_decode($this->data,true);
    }
    
    /**
     * getData
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * getTemperature
     *
     * @return string
     */
    public function getTemperature()
    {
        return $this->temperature = $this->data["main"]["temp"];
    }

    /**
     * getClouds
     *
     * @return string
     */
    public function getClouds()
    {
        return $this->clouds = $this->data["weather"][0]["main"];
    }
        
    /**
     * getHumidity
     *
     * @return int
     */
    public function getHumidity()
    {
        return $this->humidity = $this->data["main"]["humidity"];
    }
    
    /**
     * getSunrise
     *
     * @return DateTime
     */
    public function getSunrise()
    {
        return $this->sunrise = $this->data["sys"]["sunrise"];
    }
        
    /**
     * getSunset
     *
     * @return DateTime
     */
    public function getSunset()
    {
        return $this->sunset = $this->data["sys"]["sunset"];
    }

}

?>
