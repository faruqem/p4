<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
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
    * User
    */
    public function user() {
        # Report belongs to Framework
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\User');
    }
}
