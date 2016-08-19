<?php
/**
 * Created by PhpStorm.
 * User: wr
 * Date: 2016/8/16
 * Time: 3:04
 */

namespace App\Services\Helpers\CurlFetcher;


use App\Services\Helpers\HelperInterface\FetcherInterface;

class CurlFetcher implements FetcherInterface
{
    private $setting_param;

    public function __construct($param=array()){

        $this->setting_param = $param;
    }

    public function fetch($url)
    {
        // TODO: Implement fetch() method.
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $this->additional_setting($ch,$this->setting_param);
        $data = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return ($httpcode>=200 && $httpcode<300)? $data:false;
    }

    private function additional_setting($ch,$param=array()){
        if(is_array($param)){
           curl_setopt_array($ch, $param);
           return true;
        }else{
            return false;
        }
    }
}