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
        $name = $request->name;
        $key = 'AIzaSyCmsKqE4POskVDJDMTYNGK2W0_UhK3ASbI';

        //$url = "https://www.googleapis.com/pagespeedonline/v2/runPagespeed?screenshot=true&strategy=mobile&url=http://".$name;

        /*$curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        $data = json_decode($result, true);*/


        //start check if mobile friendly
        $client = new Client("https://www.googleapis.com/pagespeedonline/v3beta1/mobileReady?url=http://".$name."&screenshot=true&snapshots=false&fields=id%2CruleGroups&strategy=mobile&key=".$key);
        $request = $client->get();
        $result = $request->send();
        $data = json_decode($result->getBody(), true);

        $friendly[0] = 'Mobile-Friendly';
        $friendly[1] = 'Satisfies basic usability test.';

        if( ! $data["ruleGroups"]["USABILITY"]["pass"] )
        {
            $friendly[0] = 'Not Mobile-Friendly';
            $friendly[1] = 'Please address mobile usability issues.';
        }
        //end check if mobile friendly

        //start fetch domain data
        $client = new Client("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?screenshot=true&strategy=mobile&url=http://".$name);
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
        }
        //end find passed and total rules

        //start get use and speed score with image
        $rg = $data["ruleGroups"];
        $speed = $rg["SPEED"]["score"];
        $usability = $rg["USABILITY"]["score"];

        $scr =  $data['screenshot']['data'];
        $scr = str_replace("_", "/", $scr);
        $scr = str_replace("-", "+", $scr);
        //end get use and speed score with image

        //dd($scr);
        return view('pages.results', compact('speed', 'usability', 'scr', 'friendly', 'rule'));

    }
}
