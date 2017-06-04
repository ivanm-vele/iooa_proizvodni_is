<?php

namespace iooa_proizvodni_is;

use Illuminate\Database\Eloquent\Model;

class Radnik extends Model
{

    public function stroj()
    {
        return $this->belongsTo('iooa_proizvodni_is\Stroj');
    }

}
