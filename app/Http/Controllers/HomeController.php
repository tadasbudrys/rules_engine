<?php

namespace App\Http\Controllers;

use App\Services\HomeControllerService;
use App\Services\RulespickerSerivece;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function getData(Request $request, HomeControllerService $service, RulespickerSerivece $rulesService): JsonResponse
    {
        return response()->json( $service->rulesEngineFactory($request->toArray(), $rulesService), 200);
    }
}
