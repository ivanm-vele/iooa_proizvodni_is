<?php

namespace iooa_proizvodni_is;

use Illuminate\Database\Eloquent\Model;

class Radnik extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'radnik';

    public function stroj()
    {
        return $this->belongsTo('iooa_proizvodni_is\Stroj');
    }

}
