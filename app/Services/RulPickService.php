<?php

namespace App\Services;

use App\Classes\RuleAbstractClass;
use App\Interfaces\RulesInterface;

/**
 * Class RulespickerSerivece.
 */
class RulespickerSerivece extends RuleAbstractClass
{
    public function getRulSet(): RulesInterface
    {

        return new RulesService();
    }
}
