<?php

namespace KodiComponents\LaravelValidationRules\Rules;

use DateTime;

class DateFormat
{
    /**
     * @var string|null
     */
    protected $format;

    /**
     * DateFormat constructor.
     *
     * @param string|null $format
     */
    public function __construct($format = null)
    {
        $this->format = $format;
    }

    public function atom()
    {
        $this->format = DateTime::ATOM;
    }

    public function cookie()
    {
        $this->format = DateTime::COOKIE;
    }

    public function iso8601()
    {
        $this->format = DateTime::ISO8601;
    }

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     */
    public function __toString()
    {
        return 'date_format:'.$this->format;
    }
}