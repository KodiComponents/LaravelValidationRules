<?php

namespace KodiComponents\LaravelValidationRules\Rules;

use Carbon\Carbon;

class After
{
    /**
     * The name of the rule.
     */
    protected $rule = 'after';

    /**
     * @var Carbon|string
     */
    protected $date;

    /**
     * After constructor.
     *
     * @param string|Carbon $date
     */
    public function __construct($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    protected function convertDate()
    {
        if ($this->date instanceof Carbon) {
            return $this->date->toDateString();
        }

        return $this->date;
    }

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->rule.':'.$this->convertDate();
    }
}