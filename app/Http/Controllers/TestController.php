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

    public function analyzeUrl(Request $request)
    {
        $name = $request->name;

        $url = "https://www.googleapis.com/pagespeedonline/v2/runPagespeed?screenshot=true&strategy=mobile&url=http://".$name;

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        $data = json_decode($result, true);
        return $data;

        $rg = $data["ruleGroups"];
        $speed = $rg["SPEED"]["score"];
        $usability = $rg["USABILITY"]["score"];

        $scr =  $data['screenshot']['data'];
        $scr = str_replace("_", "/", $scr);
        $scr = str_replace("-", "+", $scr);

        //dd($scr);
        return view('pages.results', compact('speed', 'usability', 'scr'));

    }
}
