<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    /**
    * Report
    */
    public function report() {
        # Report belongs to Framework
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Report');
    }

    /**
    * Report
    */
    public function user() {
        # Report belongs to Framework
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\User');
    }
}
