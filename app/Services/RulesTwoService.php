<?php

namespace App\Services;

use App\Interfaces\RulesInterface;

/**
 * Class RulesTwoService.
 */
class RulesTwoService  implements RulesInterface
{
    private $rules;
    private $fact;

    public function validateAny(): array
    {
        foreach ($this->rules as $rule) {
            if (!$rule($this->fact)) {
                $this->fact['Claimable'] = 'N';
                return $this->fact;
            }
        }
        $this->fact['Claimable'] = 'T';

        return $this->fact;

    }

    public function loadRules(array $data = array() ):self
    {
        $this->fact = $data;
        $this->addRule(fn($fact) => in_array($fact['departure'], array('US', 'CA')));
        if ($data['status'] == 'Cancel') {
            $this->addRule(fn($fact) => $fact['status_details'] <= 14);
        } elseif ($data['status'] == 'Delay') {
            $this->addRule(fn($fact) => $fact['status_details'] >= 3);
        }
        return $this;
    }

    public function addRule(callable $rule  ): void
    {
        $this->rules[] = $rule;
    }

}
