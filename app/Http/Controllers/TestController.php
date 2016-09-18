<?php

namespace App\Http\Controllers;

use App\Services\IndeedApiService\IndeedService;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class TestController extends Controller
{
    //
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index(){
        //$indeed = new IndeedService("6094775235612455");

        //$indeed->jobSearching();
        //$indeed->jobDetails("7a99e3ce26a2c99e");
       echo $this->request->method();
    }
}
