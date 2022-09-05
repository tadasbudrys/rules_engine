<?php

namespace App\Services;

use App\Classes\RuleAbstractClass;
use App\Interfaces\RulesInterface;

/**
 * Class RulEngineService.
 */
class RulEngineService extends RuleAbstractClass
{
    public function getRulSet(): RulesInterface
    {

        return new RulesService();
    }
}
