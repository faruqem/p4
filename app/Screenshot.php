<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screenshot extends Model
{
    /**
    * Report
    */
    public function report() {
        # Report belongs to Framework
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Report');
    }
}
