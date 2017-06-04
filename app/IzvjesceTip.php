<?php

namespace iooa_proizvodni_is;

use Illuminate\Database\Eloquent\Model;

class IzvjesceTip extends Model
{

	public $timestamps = false;
	
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'izvjesce_tip';

}
