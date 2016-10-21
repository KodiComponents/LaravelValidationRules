<?php

namespace KodiComponents\LaravelValidationRules;

use Carbon\Carbon;

/**
 * @see https://laravel.com/docs/5.3/validation#available-validation-rules
 */
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
    public function dateFormat($format = null)
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
    public function digitsBetween($min, $max)
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
    public function inArray($field)
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

    /**
     * The field under validation must be less than or equal to a maximum value.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-max
     *
     * @param string $value Strings, numerics, and files are evaluated in the same fashion as the size rule.
     *
     * @return string
     */
    public function max($value)
    {
        return 'max:'.$value;
    }

    /**
     * The file under validation must match one of the given MIME types
     *
     * To determine the MIME type of the uploaded file, the file's contents will be read and the framework will
     * attempt to guess the MIME type, which may be different from the client provided MIME type.
     *
     * @param array $types
     *
     *      'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime'
     *
     * @return Rules\MimeTypes
     */
    public function mimeTypes(array $types = [])
    {
        return new Rules\MimeTypes($types);
    }

    /**
     * The field under validation must have a minimum value.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-min
     *
     * @param string $value Strings, numerics, and files are evaluated in the same fashion as the size rule.
     *
     * @return string
     */
    public function min($value)
    {
        return 'min:'.$value;
    }

    /**
     * The field under validation may be null. This is particularly useful when validating primitive such as
     * strings and integers that can contain null values.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-nullable
     */
    const NULLABLE = 'nullable';

    /**
     * The field under validation must be numeric.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-numeric
     */
    const NUMERIC = 'numeric';

    /**
     * The field under validation must be present in the input data but can be empty.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-present
     */
    const PRESENT = 'present';

    /**
     * The field under validation must match the given regular expression.
     *
     * When using the regex pattern, it may be necessary to specify rules in an array instead of using pipe delimiters,
     * especially if the regular expression contains a pipe character.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-regex
     *
     * @param string $pattern
     *
     * @return string
     */
    public function regex($pattern)
    {
        return 'regex:'.$pattern;
    }

    /**
     * The field under validation must be present in the input data and not empty. A field is considered "empty"
     * if one of the following conditions are true:
     *  - The value is null.
     *  - The value is an empty string.
     *  - The value is an empty array or empty `Countable` object.
     *  - The value is an uploaded file with no path.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-required
     */
    const REQUIRED = 'required';

    /**
     * The field under validation must be present and not empty if the anotherfield field is equal to any value.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-required-if
     *
     * @param string $anotherField
     * @param array ...$value
     *
     * @return string
     */
    public function requiredIf($anotherField, ...$value)
    {
        return 'required_if:'.$anotherField.','.implode(',', $value);
    }

    /**
     * The field under validation must be present and not empty unless the anotherfield field is equal to any value.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-required-unless
     *
     * @param string $anotherField
     * @param array ...$value
     *
     * @return string
     */
    public function requiredUnless($anotherField, ...$value)
    {
        return 'required_unless:'.$anotherField.','.implode(',', $value);
    }

    /**
     * The field under validation must be present and not empty only if any of the other specified fields are present.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-required-with
     *
     * @param array ...$field other specified fields
     *
     * @return string
     */
    public function requiredWith(...$field)
    {
        return 'required_with:'.implode(',', $field);
    }

    /**
     * The field under validation must be present and not empty only if all of the other specified fields are present.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-required-with-all
     *
     * @param array ...$field other specified fields
     *
     * @return string
     */
    public function requiredWithAll(...$field)
    {
        return 'required_with_all:'.implode(',', $field);
    }

    /**
     * The field under validation must be present and not empty only when any of the other specified fields are not
     * present.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-required-without
     *
     * @param array ...$field other specified fields
     *
     * @return string
     */
    public function requiredWithout(...$field)
    {
        return 'required_without:'.implode(',', $field);
    }

    /**
     * The field under validation must be present and not empty only when all of the other specified fields are not
     * present.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-required-without-all
     *
     * @param array ...$field other specified fields
     *
     * @return string
     */
    public function requiredWithoutAll(...$field)
    {
        return 'required_without_all:'.implode(',', $field);
    }

    /**
     * The given field must match the field under validation.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-same
     *
     * @param string $field
     *
     * @return string
     */
    public function same($field)
    {
        return 'same:'.$field;
    }

    /**
     * The field under validation must have a size matching the given value.
     *  - For string data, value corresponds to the number of characters.
     *  - For numeric data, value corresponds to a given integer value.
     *  - For an array, size corresponds to the count of the array.
     *  - For files, size corresponds to the file size in kilobytes.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-size
     *
     * @param string $value
     *
     * @return string
     */
    public function size($value)
    {
        return 'size:'.$value;
    }

    /**
     * The field under validation must be a string. If you would like to allow the field to also be null,
     * you should assign the `nullable` rule to the field.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-string
     */
    const STRING = 'string';

    /**
     * The field under validation must be a valid timezone identifier according to the
     * `timezone_identifiers_list` PHP function.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-timezone
     */
    const TIMEZONE = 'timezone';

    /**
     * The field under validation must be a valid URL.
     *
     * @see https://laravel.com/docs/5.3/validation#rule-url
     */
    const URL = 'url';
}