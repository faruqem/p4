<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
	* Category list to be used for a dropdwon to selecet a report category
	*/
    public static function getForDropdown() {

        # Author
        $categories = Category::orderBy('name', 'ASC')->get();

        $categories_for_dropdown = [];
        foreach($categories as $category) {
            $categories_for_dropdown[$category->id] = $category->name;
        }

        return $categories_for_dropdown;
    }
}
