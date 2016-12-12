<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tessarea extends Model
{
    /**
	* Reports
	*/
    public function reports()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Report')->withTimestamps();
    }

    /**
	* Tessitura areas
	*/
    public static function getForCheckboxes()
    {
        $tessareas = Tessarea::orderBy('name','ASC')->get();
        $tessareas_for_checkboxes = [];
        foreach($tessareas as $tessarea) {
            $tessareas_for_checkboxes[$tessarea->id] = $tessarea->name;
        }

        return $tessareas_for_checkboxes;
    }
}
