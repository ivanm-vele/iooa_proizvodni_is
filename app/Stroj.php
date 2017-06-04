<?php

namespace iooa_proizvodni_is;

use Illuminate\Database\Eloquent\Model;

class Stroj extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stroj';

     /*
     * Proizvod pripada stroju
     */
    public function proizvod()
    {
        return $this->belongsTo('iooa_proizvodni_is\Proizvod');
    }

}
