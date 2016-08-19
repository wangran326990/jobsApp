<?php
/**
 * Created by PhpStorm.
 * User: wr
 * Date: 2016/8/19
 * Time: 3:42
 */

namespace App\Services\IndeedApiService;


class IndeedJobs
{
    public $jobtitle;
    public $company;
    public $city;
    public $state;
    public $country;
    public $formattedLocation;
    public $source;
    public $date;
    public $snippet;
    public $url;
    public $latitude;
    public $longitude;
    public $jobkey;
    public $formattedLocationFull;
    public $formattedRelativeTime;

    public function __construct(\SimpleXMLElement $result)
    {
        $this->jobtitle = (string)$result->jobtitle;
        $this->company = (string)$result->company;
        $this->city = (string)$result->city;
        $this->state = (string)$result->state;
        $this->country =(string)$result->country;
        $this->formattedLocation = (string)$result->formattedLocation;
        $this->source = (string)$result->source;
        $this->date = (string)$result->date;
        $this->snippet = (string)$result->snippet;
        $this->url = (string)$result->url;
        $this->latitude = (string)$result->latitude;
        $this->longitude=(string)$result->longitude;
        $this->jobkey = (string)$result->jobkey;
        $this->formattedLocationFull = (string)$result->formattedLocationFull;
        $this->formattedRelativeTime = (string)$result->formattedRelativeTime;

    }

}