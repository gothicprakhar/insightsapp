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
        $name = $request->url;

        $url = "https://www.googleapis.com/pagespeedonline/v2/runPagespeed?screenshot=true&strategy=mobile&url=http://".$name;

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        $data = json_decode($result, true);
        //return $data;

        //Over all speed and score
        $rg = $data["ruleGroups"];
        $speed = $rg["SPEED"]["score"];
        $usability = $rg["USABILITY"]["score"];

        $speedtext = "Not Mobile-Fast";
        if($speed >= 60) $speedtext = "Mobile-Fast";

        $usabilitytext = "Mobile-Friendly";
        if($usability >= 70) $usabilitytext = "Not Mobile-Friendly";


        //Rules Passed and Failed
        $ruleResults = $data["formattedResults"]["ruleResults"];
        $speedPlus = 0;
        $speedTotal = 0;
        $usabilityPlus = 0;
        $usabilityTotal = 0;

        foreach($ruleResults as $rule) {
            $group = implode($rule["groups"]);
            if($group == "SPEED") {
                if($rule["ruleImpact"] == 0.0) $speedPlus++;
                $speedTotal++;
            }
            else {
                if($rule["ruleImpact"] == 0.0) $usabilityPlus++;
                $usabilityTotal++;
            }
        }
        $usabilityMinus = $usabilityTotal - $usabilityPlus;
        $speedMinus = $speedTotal - $speedPlus;

        //Screenshot
        $scr =  $data['screenshot']['data'];
        $scr = str_replace("_", "/", $scr);
        $scr = str_replace("-", "+", $scr);

        //dd($scr);
        return view('pages.results', compact('speed', 'usability', 'speedtext', 'usabilitytext', 'usabilityMinus', 'usabilityPlus', 'speedMinus', 'speedPlus','scr'));

    }
}
