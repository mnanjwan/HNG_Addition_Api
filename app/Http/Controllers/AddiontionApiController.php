<?php

namespace App\Http\Controllers;

use App\Http\Requests\Addtion;
use Illuminate\Http\Request;

class AddiontionApiController extends Controller
{

    public function store(Addtion $request)
    {

        $x = $request->x;
        $y = $request->y;

        $sum = $x + $y;
        if ($sum) {
            return response()->json([
                "slackUsername" => "mnanjwan",
                "result" => $sum,
                "operation_type" => "Addition",
            ]);
        }else{
                return "success";
        }

    }
}
