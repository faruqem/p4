<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appobject extends Model
{
    /**
    * Roles
    */
    public function roles()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Role')->withTimestamps();
    }
}
