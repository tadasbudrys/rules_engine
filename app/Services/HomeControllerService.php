<?php

namespace App\Services;
use App\Classes\RuleAbstractClass;

/**
 * Class HomeControllerService.
 */
class HomeControllerService
{
        public function rulesEngineFactory( $data ,RuleAbstractClass $rule):array
        {
              return  $rule->validate($data);
        }

}
