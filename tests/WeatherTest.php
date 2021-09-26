<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

final class WeatherTest extends TestCase
{
        
    /**
     * testIsApiKeyValid
     *
     * @return void
     */
    public function testIsApiKeyValid()
    {

        $api_key = readline("Enter your OpenWeather API key: ");
        $curl = curl_init("api.openweathermap.org/data/2.5/weather?q=London&appid=".$api_key."&units=metric");
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        $data = curl_exec($curl);
        $data = json_decode($data,true);
        $this->assertArrayHasKey("weather",$data);
    }
    
}