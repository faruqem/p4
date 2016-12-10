<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
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
	* Framework list to be used for a dropdwon to select a report framework
	*/
    public static function getForDropdown() {

        # Author
        $frameworks = Framework::orderBy('name', 'ASC')->get();

        $frameworks_for_dropdown = [];
        foreach($frameworks as $framework) {
            $frameworks_for_dropdown[$framework->id] = $framework->name;
        }

        return $frameworks_for_dropdown;
    }
}
