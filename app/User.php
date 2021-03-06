<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    /**
	* Rating
	*/
    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    /**
	* Comment
	*/
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
	* Revision
	*/
    public function revisions()
    {
        return $this->hasMany('App\Revision');
    }

    /**
	* Roles
	*/
    public function roles()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Role')->withTimestamps();
    }
}
