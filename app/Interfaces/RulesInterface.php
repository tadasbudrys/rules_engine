<?php

namespace App\Interfaces;

use App\Services\RulesService;

interface RulesInterface
{
    public function validateAny():array;

    public function loadRules(array $data= array()):RulesService;

    public function addRule(callable $rule):void;


}
