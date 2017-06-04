<?php

namespace iooa_proizvodni_is;

use Illuminate\Database\Eloquent\Model;

class Uloga extends Model
{

	public $timestamps = false;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'uloga';

}
