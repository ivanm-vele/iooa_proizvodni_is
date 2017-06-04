<?php

namespace iooa_proizvodni_is;

use Illuminate\Database\Eloquent\Model;

class Izvjesce extends Model
{

     /*
     * Tip izvješća pripada Izvješću
     */
    public function izvjesceTip()
    {
        return $this->belongsTo('iooa_proizvodni_is\IzvjesceTip');
    }

    public function stroj()
    {
        return $this->belongsTo('iooa_proizvodni_is\Stroj');
    }

    public function user()
    {
        return $this->belongsTo('iooa_proizvodni_is\User');
    }


}
