<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /* Relationship Methods */

    /**
    * Report Category
    */
    public function category() {
        # Report belongs to Category
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Category');
    }

    /**
    * Type
    */
    public function type() {
        # Report belongs to Type
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Type');
    }
}
