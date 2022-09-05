<?php

namespace App\Services;

use App\Interfaces\RulesInterface;

/**
 * Class RulesService.
 */
class RulesService implements RulesInterface
{
    private array $rules;
    private array $fact;

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

    public function loadRules(array $data = array()): Self
    {
        $this->fact = $data;
        $this->addRule(fn($fact) => in_array($fact['departure'], array('LT', 'LV')));
        if ($data['status'] == 'Cancel') {
            $this->addRule(fn($fact) => $fact['status_details'] <= 14);
        } elseif ($data['status'] == 'Delay') {
            $this->addRule(fn($fact) => $fact['status_details'] >= 3);
        }
        return $this;
    }

    public function addRule(callable $rule): void
    {
        $this->rules[] = $rule;
    }


}
