<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //* Relationship Methods */

    /**
	* Reports
	*/
    public function reports() {
        # Category has many Reports
        # Define a one-to-many relationship.
        return $this->hasMany('App\Report');
    }
}
