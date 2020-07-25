<?php

namespace OZiTAG\Tager\Backend\Utils\Rules;

use Illuminate\Contracts\Validation\Rule;

class LatLngRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (!isset($value['latitude']) || !isset($value['longitude'])) {
            return false;
        }

        if (is_float($value['latitude']) || is_float($value['longitude'])) {
            return false;
        }

        if ($value['latitude'] < -90 || $value['latitude'] > 90) {
            return false;
        }

        if ($value['longitude'] < -180 || $value['longitude'] > 180) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not valid';
    }
}
