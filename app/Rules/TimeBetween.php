<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class TimeBetween implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $startDate = Carbon::parse($value);
        $startTime = Carbon::createFromTime($startDate->hour, $startDate->minute, $startDate->second );
        $earliest = Carbon::createFromTimeString('17:00:00');
        $latest = Carbon::createFromTimeString('22:00:00');
        return $startTime->between($earliest, $latest) ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please choose a time between 5pm and 11pm';
    }
}
