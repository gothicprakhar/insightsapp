<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;
//use GuzzleHttp\Psr7\Request;

class TestController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Test Controller
    |--------------------------------------------------------------------------
    |
    */

    public function analyzeUrl($name)
    {
        $url = "https://www.googleapis.com/pagespeedonline/v2/runPagespeed?screenshot=true&strategy=mobile&url=http://".$name;

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        $data = json_decode($result, true);

        $rg = $data["ruleGroups"];
        $speed = $rg["SPEED"]["score"];
        $usability = $rg["USABILITY"]["score"];

        $screenshot_encoded =  $data['screenshot']['data'];
        $screenshot_encoded = str_replace("_", "/", $screenshot_encoded);
        $screenshot_encoded = str_replace("-", "+", $screenshot_encoded);
        $scr = base64_decode($screenshot_encoded);

        //dd($scr);
        return view('pages.results', compact('speed', 'usability', 'scr'));

    }
}
