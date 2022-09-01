<?php

namespace App\Services;

use App\Classes\RuleAbstractClass;
use App\Interfaces\RulesInterface;

/**
 * Class RulespickerSerivece.
 */
class RulespickerSerivece extends RuleAbstractClass
{
    public function getRulesSet(): RulesInterface
    {

        return new RulesService();
    }
}
