<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Guzzle\Http\Client;

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
        /*$name = $request->name;
        $key = 'AIzaSyCmsKqE4POskVDJDMTYNGK2W0_UhK3ASbI';*/


        //$url = "https://www.googleapis.com/pagespeedonline/v2/runPagespeed?screenshot=true&strategy=mobile&url=http://".$name;

        /*$curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);
s
        $data = json_decode($result, true);*/


        //start check if mobile friendly
        /*$client = new Client("https://www.googleapis.com/pagespeedonline/v3beta1/mobileReady?url=http://".$name."&screenshot=true&snapshots=false&fields=id%2CruleGroups&strategy=mobile&key=".$key);
        $request = $client->get();
        $result = $request->send();
        $data = json_decode($result->getBody(), true);

        $friendly[0] = 'Mobile-Friendly';
        $friendly[1] = 'Satisfies basic usability test.';

        if( ! $data["ruleGroups"]["USABILITY"]["pass"] )
        {
            $friendly[0] = 'Not Mobile-Friendly';
            $friendly[1] = 'Please address mobile usability issues.';
        }*/
        //end check if mobile friendly

        //start fetch domain data
        /*$client = new Client("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?screenshot=true&strategy=mobile&url=http://".$name);
        $request = $client->get();
        $result = $request->send();
        $data = json_decode($result->getBody(), true);
        //end fetch domain data

        //start find passed and total rules
        $rules = $data['formattedResults']['ruleResults'];
        $rule['use_rule'] = 0;
        $rule['speed_rule'] = 0;
        $rule['use_pass_rule'] = 0;
        $rule['speed_pass_rule'] = 0;

        foreach ($rules as $key => $value) {
            switch( $value['groups'] )
            {
                case ["SPEED"]:     if( $value['ruleImpact'] == 0 )
                                        $rule['speed_pass_rule']++;
                                    $rule['speed_rule']++;
                                    break;
                case ["USABILITY"]: if( $value['ruleImpact'] == 0 )
                                        $rule['use_pass_rule']++;
                                    $rule['use_rule']++;
                                    break;
            }
        }*/
        //end find passed and total rules

        //start get use and speed score with image

        $name = $request->url;
        $client = new Client("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?screenshot=true&strategy=mobile&url=http://".$name);
        $request = $client->get();
        $result = $request->send();
        $data = json_decode($result->getBody(), true);

        //Over all speed and score
        $rg = $data["ruleGroups"];
        $speed = $rg["SPEED"]["score"];
        $usability = $rg["USABILITY"]["score"];

        $speedtext = "Not Mobile-Fast";
        if($speed >= 60) $speedtext = "Mobile-Fast";

        $usabilitytext = "Mobile-Friendly";
        if($usability < 70) $usabilitytext = "Not Mobile-Friendly";


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
        //end get use and speed score with image


//        return view('pages.results', compact('speed', 'usability', 'scr', 'friendly', 'rule'));

        return view('pages.results', compact('speed', 'usability', 'speedtext', 'usabilitytext', 'usabilityMinus', 'usabilityPlus', 'speedMinus', 'speedPlus','scr'));
    }
}
