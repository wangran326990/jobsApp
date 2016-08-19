<?php
/**
 * Created by PhpStorm.
 * User: wr
 * Date: 2016/8/19
 * Time: 3:45
 */

namespace App\Services\IndeedApiService;


class IndeedSearchDetail
{
    public $start;
    public $end;
    public $pageNumber;
    public $totalResult;

    public function __construct($start, $end, $pageNumber, $totalResult){
        $this->start = $start;
        $this->end = $end;
        $this->pageNumber = $pageNumber;
        $this->totalResult = $totalResult;
    }
}