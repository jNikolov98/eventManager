<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    public function getStartAttribute($date_start)
    {
        $date = new Carbon($date_start);
        $date = $date->toDateTimeString();
        return $date;
    }

    public function getEndAttribute($date_end)
    {
        $date = new Carbon($date_end);
        $date = $date->toDateTimeString();
        return $date;
    }

    public function setStartAttribute($value)
    {
        $date = new Carbon($value);

        $date = $date->toDateTimeString();

        $this->attributes['start'] = $date;
    }

    public function setEndAttribute($value)
    {
        $date = new Carbon($value);
        $date = $date->toDateTimeString();
        $this->attributes['end'] = $date;
    }
}
