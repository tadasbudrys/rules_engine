<?php

namespace App\Classes;


use App\Interfaces\RulesInterface;

abstract class RuleAbstractClass
{
    public function validate( array $data = array()): array
    {

        return $this->getRulSet()->loadRules($data)->validateAny();
    }

    abstract public function getRulSet(): RulesInterface;

}
