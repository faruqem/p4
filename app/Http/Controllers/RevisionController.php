<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Report;

use App\Revision;

use Session;

class RevisionController extends Controller
{
    /**
    * GET
    */
    public function my_revisions()
    {
        $user_id = \Auth::user()->id;
        $revisions = \DB::select("SELECT s.report_id,
                                        s.id AS revision_id,
                                        r.name AS report_name,
                                        s.description AS revision,
                                        s.revision_dt
                                    FROM reports r
                                        INNER JOIN revisions s ON r.id = s.report_id
                                    WHERE s.user_id = $user_id
                                        AND r.active = 1
                                        AND s.deleted_at IS NULL
                                        AND s.active = 1
                                    ORDER BY r.name"
                                );
        return view('revision.my_revisions')->with(['revisions' => $revisions]);
    }

    /**
    * GET
    */
    public function create()
    {
        # Report
        $reports_for_dropdown = Report::getForDropdown();
        return view('revision.create')->with([
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

            'description' => 'required'
        ]);

        #Create a new revision object
        $revision = new Revision();

        # Get the data from the form
        $revision->description = $request->input('description');
        $revision->report_id = $request->report_id;
        $revision->revision_dt = \Carbon\Carbon::now()->toDateTimeString();
        $revision->user_id = \Auth::user()->id; //Grab the login user ID for this

        #Save the data
        $revision->save();

        Session::flash('flash_message', 'Your revision is saved.');

        return redirect('/my-revisions');
    }

    /**
    * GET
    */
    public function show($id)
    {
        $revision = Revision::find($id);

        if(is_null($revision)) {
            Session::flash('message','Revision not found');
            return redirect('/my-revisions');
        }

        return view('revision.show')->with(['revision' => $revision]);
    }

    /**
    * GET
    */
    public function edit($id)
    {
        $revision = Revision::find($id);

        # Report
        $reports_for_dropdown = Report::getForDropdown();

        return view('revision.edit')->with([
            'revision' => $revision,
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
            'description' => 'required'
        ]);

        # Find and update revision
        $revision = Revision::find($request->id);

        $revision->description = $request->description;
        $revision->report_id = $request->report_id;

        $revision->save();

        # Finish
        Session::flash('flash_message', 'Your changes to revision is saved.');
        return redirect('/my-revisions');
    }

    /**
	* GET
    * Page to confirm revision
	*/
    public function delete($id) {

        $revision = Revision::find($id);

        return view('revision.delete')->with('revision', $revision);
    }

    /**
    * POST
    */
    public function destroy($id)
    {
        # Get the revision to be deleted
        $revision = Revision::find($id);

        if(is_null($revision)) {
            Session::flash('message','Revision not found.');
            return redirect('/my-revisions');
        }

        # Then delete the revision
        $revision->delete();

        # Finish
        Session::flash('flash_message', 'Your revision is deleted.');
        return redirect('/my-revisions');
    }
}
