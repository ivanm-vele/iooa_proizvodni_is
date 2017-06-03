<?php

namespace iooa_proizvodni_is;

use Illuminate\Database\Eloquent\Model;

class Stroj extends Model
{
     /*
     * Proizvod pripada stroju
     */
    public function proizvod()
    {
        return $this->belongsTo('iooa_proizvodni_is\Proizvod');
    }

}
