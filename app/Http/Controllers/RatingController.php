<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Report;

use App\Rating;

use Session;

class RatingController extends Controller
{
    /**
    * GET
    */
    public function my_ratings()
    {
        $user_id = \Auth::user()->id;
        $ratings = \DB::select("SELECT t.report_id,
                                        t.id AS rating_id,
                                        r.name AS report_name,
                                        t.favorite,
                                        t.rating
                                    FROM reports r
                                        INNER JOIN ratings t ON r.id = t.report_id
                                    WHERE t.user_id = $user_id
                                        AND r.active = 1
                                        AND t.deleted_at IS NULL
                                        AND t.active = 1
                                        AND t.rating IS NOT NULL
                                    ORDER BY r.name"
                                );
        return view('rating.my_ratings')->with(['ratings' => $ratings]);
    }

    /**
    * GET
    */
    public function create()
    {
        # Report
        $reports_for_dropdown = Report::getForDropdownUnrated();

        return view('rating.create')->with([
            'reports_for_dropdown' => $reports_for_dropdown
        ]);
    }

    /**
    * POST
    */
    public function store(Request $request)
    {

        # Validate
        $this->validate($request, [

            'rating' => 'required|integer|min:1|max:5'
        ]);

        #Create a new rating object
        $rating = new Rating();

        # Get the data from the form
        $rating->rating = $request->input('rating');
        $rating->report_id = $request->report_id;
        $rating->favorite = $request->favorite;
        $rating->user_id = \Auth::user()->id; //Grab the login user ID for this

        #Save the data
        $rating->save();

        Session::flash('flash_message', 'Your rating is saved.');

        return redirect('/my-ratings');
    }

    /**
    * GET
    */
    public function show($id)
    {
        $rating = Rating::find($id);

        if(is_null($rating)) {
            Session::flash('message','Rating not found');
            return redirect('/my-ratings');
        }

        return view('rating.show')->with(['rating' => $rating]);
    }

    /**
    * GET
    */
    public function edit($id)
    {
        $rating = Rating::find($id);

        # Report
        $reports_for_dropdown = Report::getForDropdown();

        return view('rating.edit')->with([
            'rating' => $rating,
            'reports_for_dropdown' => $reports_for_dropdown
        ]);
    }


    /**
    * POST
    */
    public function update(Request $request, $id)
    {

        # Validate
        $this->validate($request, [
            'rating' => 'required'
        ]);

        # Find and update revision
        $rating = Rating::find($request->id);

        $rating->rating = $request->rating;
        $rating->favorite = $request->favorite;
        $rating->report_id = $request->report_id;

        $rating->save();

        # Finish
        Session::flash('flash_message', 'Your changes to rating is saved.');
        return redirect('/my-ratings');
    }

    /**
	* GET
    * Page to confirm rating
	*/
    public function delete($id) {

        $rating = Rating::find($id);

        return view('rating.delete')->with('rating', $rating);
    }

    /**
    * POST
    */
    public function destroy($id)
    {
        # Get the revision to be deleted
        $rating = Rating::find($id);

        if(is_null($rating)) {
            Session::flash('message','Rating not found.');
            return redirect('/my-ratings');
        }

        # Then delete the revision
        $rating->delete();

        # Finish
        Session::flash('flash_message', 'Your rating is deleted.');
        return redirect('/my-ratings');
    }
}
