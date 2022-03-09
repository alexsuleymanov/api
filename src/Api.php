<?php

namespace ASweb\Api;

class Api
{
    public static function get(string $api, array $params = [])
    {
        $result = self::call($api, 'get', $params);
        return $result;
    }

    public static function post(string $api, array $params) 
    {
        $result = self::call($api, 'post', $params);
        return $result;
    }
        
    protected static function call(string $api, string $method, array $params)
    {
        $curl = curl_init();
        
        if(!strstr($api, 'http')) {
            $api = "http://".$_SERVER['HTTP_HOST'].$api;
        }

        if ($method == 'get') {
            $url = $api;
        } elseif ($method == 'post') {
            $url = $api;
            curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        }
         
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_MAXCONNECTS, 1);
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $result = curl_exec($curl);
        $info = curl_getinfo($curl);
        curl_close($curl);

        if ($info['http_code'] != 200) {
            return false;
        }

        return $result;
    }
}