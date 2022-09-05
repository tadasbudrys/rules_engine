<?php

namespace App\Http\Controllers;

use App\Services\HomeControllerService;
use App\Services\RulEngineService;
use App\Services\RulEngineTwoService;
use App\Services\RulesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function getData(Request $request, HomeControllerService $service): JsonResponse
    {
//        return response()->json( $service->rulesEngineFactory($request->toArray(), new RulEngineService()), 200);
        return response()->json( $service->rulesEngineFactory($request->toArray()), 200);
    }
}
