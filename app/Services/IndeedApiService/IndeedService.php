<?php
/**
 * Created by PhpStorm.
 * User: wr
 * Date: 2016/6/21
 * Time: 7:24
 */

namespace App\Services\IndeedApiService;


use App\Services\Helpers\CurlFetcher\CurlFetcher;
use App\Services\Helpers\HelperInterface\FetcherInterface;

class IndeedService
{
    private $apiKey="";
    private $jobSearchingUrl = 'http://api.indeed.com/ads/apisearch?';
    private $jobDetailUrl = 'http://api.indeed.com/ads/apigetjobs?';
//    private $userip;
//    private $useragent;
    private $fetcher;
    private $searchOptions;
    private $searchDetailOptions;
    public function __construct($apiKey){
        $this->apiKey = $apiKey;
        $this->fetcher = new CurlFetcher();
        $this->searchOptions = array(
            'publisher' => $apiKey,
            'q' => 'php',
            'l' => '',
            'sort' =>'',
            'radius' => '',
            'st' => '',
            'jt' => '',
            'start' => '',
            'limit' => '',
            'fromage' => '10',
            'filter' => '1',
            'latlong' =>'1',
            'co' => 'ca',
            'userip' => $_SERVER["REMOTE_ADDR"],
            'useragent' => $_SERVER["HTTP_USER_AGENT"],
            'v'=>2
        );
        $this->searchDetailOptions = array(
            'publisher' =>$apiKey,
            'jobkeys' =>'',
            'v'=>2
        );

    }
//    public function jobSearching($query, $location, $start=0, $limit=10, $sort="relevance", $latlong=0, $country="ca"){
//          $url = $this->urlBuilder($this->jobSearchingUrl, $query, $location, $start, $country, $latlong, $limit, $sort);
//          $xml = $this->fetcher->fetch($url);
//          $this->xmlParser($xml);
//    }
//

//
//    public function urlBuilder($url, $query=false, $location="", $start="", $country="", $latlong="", $limit="", $sort="", $jobKey =""){
//        $queryUrl =$url;
//        $error = "";
//        if($query==false){
//            $queryUrl .="&jobkeys=$jobKey";
//            $queryUrl .="&v=$this->version";
//            return $queryUrl;
//        }
//        $pattern = '/^[a-zA-Z]+[,]\s[a-zA-Z]+(\/[a-zA-Z]+){0,2}$/';
//        isset($query)&&is_string($query)? $queryUrl .= "&q=".urlencode($query): $error .= "must be a string";
//        isset($location)&&preg_match($pattern, $location)?$queryUrl .="&l=".urlencode($location):$error .="location format error";
//        isset($start)&&is_int($start)?$queryUrl .="&start=".urlencode($start):$error.="start number should be a number";
//        isset($latlong)&&is_numeric($latlong)?$queryUrl .="&latlong=".urlencode($latlong):$error .="must be a number";
//        isset($country)?$queryUrl .="&co=".urlencode($country):$error .="country is required";
//        isset($this->userip)?$queryUrl .="&userip=".urlencode($this->userip):$error .="user ip is required";
//        isset($this->useragent)?$queryUrl .="&useragent=".urlencode($this->useragent):$error .="user agent is required";
//        is_int($limit)?$queryUrl .="&limit=".urlencode($limit):$error .="limit number should be int";
//        isset($sort)?$queryUrl .="&sort=".urlencode($sort):$error .="sort function is not set";
//        $queryUrl .= "&v=$this->version";
//        if($error==""){
//            return $queryUrl;
//        }else{
//            return $error;
//        }
//
//    }

    public function jobSearching($options=array()){
            if(empty($options)){
               $url=$this->urlBuilder($this->jobSearchingUrl, $this->searchOptions);
            }else{
                $options['publisher'] = $this->apiKey;
                $options['userip'] = $_SERVER["REMOTE_ADDR"];
                $options['useragent'] = $_SERVER["HTTP_USER_AGENT"];
                $options['v'] = 2;
                $url = $this->urlBuilder($this->jobSearchingUrl, $options);
            }
            $xml = $this->fetcher->fetch($url);
            return $this->xmlParser($xml);
    }

    public function jobDetails($jobKey){
          $this->searchDetailOptions['jobkeys'] = $jobKey;
          $url = $this->urlBuilder($this->jobDetailUrl, $this->searchDetailOptions);
          $xml =$this->fetcher->fetch($url);
          $this->xmlParser($xml);
    }

    public function urlBuilder($url,$options){
        $url=$url.http_build_query($options,'', '&');
        return $url;
    }

    public function setFetcher(FetcherInterface $fetcher){
        $this->fetcher = $fetcher;
    }

    public function getFetcher(){
        return $this->fetcher;
    }

    private function xmlParser($xml){
       $xml = simplexml_load_string($xml);
       if(property_exists($xml,'query')===true){
           $jobInfo = new \stdClass();
           $jobInfo->jobs = [];
           $jobInfo->searchDetail =new IndeedSearchDetail((string)$xml->start, (string)$xml->end, (string)$xml->pageNumber, (string)$xml->totalresult);
           foreach($xml->results->result as $result){
               $jobInfo->jobs[] = new IndeedJobs($result);
           }
           return json_encode($jobInfo);
       }
    }

}