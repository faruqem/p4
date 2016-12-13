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

    /**
    * Framework
    */
    public function framework() {
        # Report belongs to Framework
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Framework');
    }

    /**
	* Tess Area
	*/
    public function tessareas()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Tessarea')->withTimestamps();
    }

    /**
	* Screenshot
	*/
    public function screenshots()
    {
        return $this->hasMany('App\Screenshot');
    }

    /**
	* Rating
	*/
    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    /**
	* Comment
	*/
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
	* Revision
	*/
    public function revisions()
    {
        return $this->hasMany('App\Revision');
    }

    /**
	* Report list to be used for a dropdwon
	*/
    public static function getForDropdown() {

        # Report
        $reports = Report::orderBy('name', 'ASC')->get();

        $reports_for_dropdown = [];
        foreach($reports as $report) {
            $reports_for_dropdown[$report->id] = $report->name;
        }

        return $reports_for_dropdown;
    }

    /**
	* Report list without a Rating
	*/
    public static function getForDropdownUnrated() {

        # Report
        $user_id = \Auth::user()->id;
        $query = "SELECT * FROM reports WHERE id NOT IN(SELECT report_id FROM ratings WHERE user_id=" . $user_id . ") ORDER BY name";
        $reports = \DB::select($query);
        $reports_for_dropdown = [];
        foreach($reports as $report) {
            $reports_for_dropdown[$report->id] = $report->name;
        }

        return $reports_for_dropdown;
    }

    public static function search($keyword, $origin) {
        #Setup the criteria (WHERE clause)
        $criteria = [];

        //Keyword
        if($keyword) {
            $criteria [0] = " keywords LIKE('%" . $keyword . "%')"
                            . " OR name LIKE('%" . $keyword . "%')"
                            . " OR description LIKE('%" . $keyword . "%')";
        }
        else {
            $criteria [0] = " 1 = 1";
        }

        //Keyword
        if($origin && $origin == 1) {
            $criteria [1] = " AND 1 = 1";
        } elseif ($origin && $origin == 2) {
            $criteria [1] = " AND inhouse = 1";
        } elseif ($origin && $origin == 3) {
            $criteria [1] = " AND inhouse = 0";
        } else {
            $criteria [1] = " AND 1 = 1 ";
        }

        #Setup the query
        $query = "SELECT id FROM reports WHERE ";
        foreach($criteria as $criterion){
            $query .= $criterion;
        }
        $query .= " ORDER BY name";

        #Execute the query
        $report_ids = \DB::select($query);

        #return the result-set
        return $report_ids;
    }
}
