<?php

namespace App\Services;

/**
 * Class HomeControllerService.
 */
class HomeControllerService
{
    public function rulesEngineFactory($data,): array
    {
        if (true) {
            return (new RulEngineService)->validate($data);
        } else {
            return (new RulEngineTwoService)->validate($data);
        }
    }
}
