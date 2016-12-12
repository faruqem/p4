<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
	* Users
	*/
    public function users()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    /**
	* Appobject
	*/
    public function appobjects()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Appobject')->withTimestamps();
    }
}
