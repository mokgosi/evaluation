<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ApiBundle\Services;

class GoogleSearch
{

    private $url = 'https://www.googleapis.com/customsearch/v1';
    private $key = 'AIzaSyACbXe2p6mcNsXmrDrQQgbY8OcekDdzKbM'; #server key
    private $cx = '012798027873711253779:mvjmc7sibtg';
    private $query = 'stackoverflow';

    public function __construct($query = null, $limit = 10)
    {
        $this->query = $query;
        $this->limit = $limit;
    }

    /**
     * @param string $format
     *
     * @return ApiResponse
     * @throws \InvalidArgumentException
     */
    public function apiRequest($format = 'json')
    {
        $url = $this->url . '?key=' . $this->key . '&cx=' . $this->cx . '&q=' . $this->query . '&alt=json';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $results = curl_exec($ch);
        return json_decode($results, true);
    }

}
