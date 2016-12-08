<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tessarea extends Model
{
    /**
	*
	*/
    public function reports()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Report')->withTimestamps();
    }
}
