<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile as HttpUploadedFile;

class MaxMegabyte implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes($attribute, $value)
    {
        if (!($value instanceof HttpUploadedFile)) {
            return false;
        }
        return $value->getSize() <= 1024 * 1024;
    }
    public function  message()
    {
        return 'The :attribute  must lest than 1 megabytes';
    }
}
