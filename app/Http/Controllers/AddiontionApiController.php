<?php

namespace App\Http\Controllers;

use App\Http\Requests\Addtion;
use Illuminate\Http\Request;

class AddiontionApiController extends Controller
{

    public function store(Request $request)
    {

        $x = $request->x;
        $y = $request->y;
        $operation_type = $request->operation_type;

        switch ($operation_type) {
            case 'addition':
                $sum = $x + $y;

                break;

            case 'subtraction':
                $sum = $x - $y;

                break;

                case 'multiplication':
                    $sum = $x * $y;

                    break;


        }
        return response()->json([
            "slackUsername" => "mnanjwan",
            "result" => $sum,
            "operation_type" => $operation_type,
        ]);

    }
}
