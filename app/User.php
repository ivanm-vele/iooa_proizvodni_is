<?php

namespace iooa_proizvodni_is;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    public function uloga()
    {
        return $this->belongsTo('iooa_proizvodni_is\Uloga');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
