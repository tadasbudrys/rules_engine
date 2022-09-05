<?php

namespace App\Services;

use App\Classes\RuleAbstractClass;
use App\Interfaces\RulesInterface;
use App\Services\RulesTwoService;
/**
 * Class RulEngineTwoService.
 */
class RulEngineTwoService  extends RuleAbstractClass
{
    public function getRulSet(): RulesInterface
    {
        return new RulesTwoService;
    }
}
