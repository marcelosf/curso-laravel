<?php

namespace CodeFin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{

    /**
     * ROLE_ADMIN constant.
     */
    const ROLE_ADMIN = 'admin';

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


    public function getJWTCustomClaims()
    {

        return [

            'user' => [

                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email

            ]

        ];

    }

    public function getJWTIdentifier()
    {

        return $this->id;

    }
}
