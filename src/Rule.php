<?php

namespace KodiComponents\LaravelValidationRules;

use Carbon\Carbon;

class Rule
{
    /**
     * The field under validation must be yes, on, 1, or true. This is useful for validating "Terms of Service"
     * acceptance.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-accepted
     */
    const ACCEPTED = 'accepted';

    /**
     * The field under validation must be a valid URL according to the `checkdnsrr` PHP function.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-active-url
     */
    const ACTIVE_URL = 'active_url';

    /**
     * The field under validation must be a value after a given date.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-after
     *
     * @param string|Carbon $date The dates will be passed into the strtotime PHP function
     *
     *      'finish_date' => 'required|date|after:start_date'
     *
     * @return Rules\After
     */
    public function after($date)
    {
        return new Rules\After($date);
    }

    /**
     * The field under validation must be entirely alphabetic characters.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-alpha
     */
    const ALPHA = 'alpha';

    /**
     * The field under validation may have alpha-numeric characters, as well as dashes and underscores.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-alpha-dash
     */
    const ALPHA_DASH = 'alpha_dash';

    /**
     * The field under validation must be entirely alpha-numeric characters.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-alpha-num
     */
    const ALPHA_NUM = 'alpha_num';

    /**
     * The field under validation must be a PHP `array`.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-array
     */
    const ARR = 'array';

    /**
     * The field under validation must be a value preceding the given date.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-before
     *
     * @param string|Carbon $date The dates will be passed into the strtotime PHP function
     *
     * @return Rules\Before
     */
    public function before($date)
    {
        return new Rules\Before($date);
    }

    /**
     * The field under validation must have a size between the given min and max.
     * Strings, numerics, and files are evaluated in the same fashion as the size rule.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-between
     *
     * @param int|string $min
     * @param int|string $max
     *
     * @return Rules\Between
     */
    public function between($min, $max)
    {
        return new Rules\Between($min, $max);
    }

    /**
     * The field under validation must be able to be cast as a boolean. Accepted input are true, false, 1, 0, "1", and
     * "0".
     *
     * @see https://laravel.com/docs/5.3/validation#rule-boolean
     */
    const BOOLEAN = 'boolean';

    /**
     * The field under validation must have a matching field of foo_confirmation. For example, if the field under
     * validation is `password`, a matching `password_confirmation` field must be present in the input.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-confirmed
     */
    const CONFIRMED = 'confirmed';

    /**
     * The field under validation must be a valid date according to the `strtotime` PHP function.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-date
     */
    const DATE = 'date';

    /**
     * The field under validation must match the given format. The format will be evaluated using the
     * PHP `date_parse_from_format` function. You should use either date or date_format when validating a field,
     * not both.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-date-format
     *
     * @param string|null $format
     *
     * @return Rules\DateFormat
     */
    public function date_format($format = null)
    {
        return new Rules\DateFormat($format);
    }

    /**
     * The field under validation must have a different value than field.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-different
     *
     * @param string $field
     *
     * @return string
     */
    public function different($field)
    {
        return 'different:'.$field;
    }

    /**
     * The field under validation must be numeric and must have an exact length of value.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-digits
     *
     * @param int $total
     *
     * @return string
     */
    public function digits($total)
    {
        return 'digits:'.(int) $total;
    }

    /**
     * The field under validation must have a length between the given min and max.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-digits-between
     *
     * @param int $min
     * @param int $max
     *
     * @return string
     */
    public function digits_between($min, $max)
    {
        return 'digits_between:'.$min.','.$max;
    }

    /**
     * When working with arrays, the field under validation must not have any duplicate values.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-distinct
     *
     *      'foo.*.id' => 'distinct'
     */
    const DISTINCT = 'distinct';

    /**
     * The field under validation must be formatted as an e-mail address.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-email
     */
    const EMAIL = 'email';

    /**
     * The field under validation must be a successfully uploaded file.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-file
     */
    const FILE = 'file';

    /**
     * The field under validation must not be empty when it is present.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-filled
     */
    const FILLED = 'filled';

    /**
     * The file under validation must be an image (jpeg, png, bmp, gif, or svg)
     *
     * @see https://laravel.com/docs/5.3/validation#rule-image
     */
    const IMAGE = 'image';

    /**
     * The field under validation must exist in anotherfield's values.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-in-array
     *
     * @param string $field
     *
     * @return string
     */
    public function in_array($field)
    {
        return 'in_array:'.$field;
    }

    /**
     * The field under validation must be an integer.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-integer
     */
    const INTEGER = 'integer';

    /**
     * The field under validation must be an IP address.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-ip
     */
    const IP = 'ip';

    /**
     * The field under validation must be a valid JSON string.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-json
     */
    const JSON = 'json';
}