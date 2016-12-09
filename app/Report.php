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
}
