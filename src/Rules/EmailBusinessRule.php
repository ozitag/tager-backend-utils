<?php

namespace OZiTAG\Tager\Backend\Utils\Rules;

use Illuminate\Contracts\Validation\Rule;

class EmailBusinessRule implements Rule
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
        $dataFile = __DIR__ . '/../../data/free_mail_domains.csv';
        if (!is_file($dataFile)) {
            return true;
        }

        $p = strrpos($value, '@');
        if($p === false){
            return true;
        }

        $domain = trim(strtolower(substr($value, $p + 1)));

        $f = fopen($dataFile, 'r+');
        $validEmails = [];
        while (($row = fgetcsv($f))) {
            $validEmails[] = strtolower(trim($row[0]));
        }
        fclose($f);

        return in_array($domain, $validEmails) == false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not valid business email';
    }
}
