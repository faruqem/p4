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

    /**
	* Type list to be used for a dropdwon to select a report type
	*/
    public static function getForDropdown() {

        # Author
        $types = Type::orderBy('name', 'ASC')->get();

        $types_for_dropdown = [];
        foreach($types as $type) {
            $types_for_dropdown[$type->id] = $type->name;
        }

        return $types_for_dropdown;
    }
}
