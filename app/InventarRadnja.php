<?php

namespace iooa_proizvodni_is;

use Illuminate\Database\Eloquent\Model;

class InventarRadnja extends Model
{

	public $timestamps = false;
	
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventar_radnja';

}
