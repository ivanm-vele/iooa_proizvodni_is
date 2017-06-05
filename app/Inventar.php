<?php

namespace iooa_proizvodni_is;

use Illuminate\Database\Eloquent\Model;

class Inventar extends Model
{

    public $timestamps = false;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventar';

    public function inventarRadnja()
    {
        return $this->belongsTo('iooa_proizvodni_is\InventarRadnja');
    }

    public function proizvod()
    {
        return $this->belongsTo('iooa_proizvodni_is\Proizvod');
    }

    public function skladiste()
    {
        return $this->belongsTo('iooa_proizvodni_is\Skladiste');
    }

    public function user()
    {
        return $this->belongsTo('iooa_proizvodni_is\User');
    }

}
