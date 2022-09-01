<?php

namespace App\Classes;


use App\Interfaces\RulesInterface;

abstract class RuleAbstractClass
{
    public function validate( array $data = array()): array
    {
        $rules = $this->getRulesSet();
        return $rules->loadRules($data)->validateAny();
    }

    abstract public function getRulesSet(): RulesInterface;

}
