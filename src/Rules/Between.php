<?php

namespace KodiComponents\LaravelValidationRules\Rules;

class Between
{
    /**
     * @var int|string
     */
    private $max;

    /**
     * @var int|string
     */
    private $min;

    /**
     * The field under validation must have a size between the given min and max.
     *
     * @param int|string $min
     * @param int|string $max
     */
    public function __construct($min, $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     */
    public function __toString()
    {
        return 'between:'.$this->min.','.$this->max;
    }
}