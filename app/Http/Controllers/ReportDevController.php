<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Report;

use App\Category;

use App\Type;

use App\Framework;

use App\Tessarea;

use Session;

class ReportDevController extends Controller
{
    /**
    * GET
    */
    public function index()
    {
        $page_header = "All Reports - Technical Info";

        $reports = Report::all();

        return view('reportdev.index')->with(['reports' => $reports, 'page_header' => $page_header]);
    }

    /**
    * GET
    */
    public function create()
    {

        # Category
        $categories_for_dropdown = Category::getForDropdown();

        # Type
        $types_for_dropdown = Type::getForDropdown();

        # Framework
        $frameworks_for_dropdown = Framework::getForDropdown();

        # Tessitura Area
        $tessareas_for_checkboxes = Tessarea::getForCheckboxes();

        return view('reportdev.create')->with([
            'categories_for_dropdown' => $categories_for_dropdown,
            'types_for_dropdown' => $types_for_dropdown,
            'frameworks_for_dropdown' => $frameworks_for_dropdown,
            'tessareas_for_checkboxes' => $tessareas_for_checkboxes
        ]);
    }

    /**
    * POST
    */
    public function store(Request $request)
    {

        # Validate
        $this->validate($request, [
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'note_general' => 'min:10',
            'note_technical' => 'min:10',
            'first_implementation_dt' => 'date',
            'last_update_dt' => 'date'
        ]);

        # If there were errors, Laravel will redirect the
        # user back to the page that submitted this request
        # The validator will tack on the form data to the request
        # so that it's possible (but not required) to pre-fill the
        # form fields with the data the user had entered

        # If there were NO errors, the script will continue...

        $report = new Report();
        $report->name = $request->input('name');
        $report->description = $request->input('description');
        $report->tess_report_id = $request->input('tess_report_id');
        $report->definition_file = $request->input('definition_file');
        $report->sql_proc = $request->input('sql_proc');
        $report->database = $request->input('database');
        $report->keywords = $request->input('keywords');
        $report->note_general = $request->input('note_general');
        $report->note_technical = $request->input('note_technical');

        $report->first_implementation_dt = $request->input('first_implementation_dt');
        $report->last_update_dt = $request->input('last_update_dt');

        $report->type_id = $request->type_id;
        $report->framework_id = $request->framework_id;
        $report->category_id = $request->category_id;
        $report->created_by = $request->user()->id;

        $report->schedulable = $request->input('schedulable');
        $report->verified = $request->input('verified');
        $report->inhouse = $request->input('inhouse');
        $report->published = $request->input('published');

        $report->save();

        # Save Tessareas
        $tessareas = ($request->tessareas) ?: [];
        $report->tessareas()->sync($tessareas);
        $report->save();

        Session::flash('flash_message', 'Your report '.$report->name.' has been saved.');

        return redirect('/reports-dev');

    }


    /**
    * GET
    */
    public function show($id)
    {
        $report = Report::find($id);

        if(is_null($report)) {
            Session::flash('message','Report not found');
            return redirect('/reports-dev');
        }

        return view('reportdev.show')->with(['report' => $report]);
    }


    /**
    * GET
    */
    public function edit($id)
    {
        $report = Report::find($id);

        # Category
        $categories_for_dropdown = Category::getForDropdown();

        # Type
        $types_for_dropdown = Type::getForDropdown();

        # Framework
        $frameworks_for_dropdown = Framework::getForDropdown();

        # Tessitura Area
        $tessareas_for_checkboxes = Tessarea::getForCheckboxes();

        # Just the tessareas for this report
        $tessareas_for_this_report = [];
        foreach($report->tessareas as $tessarea) {
            $tessareas_for_this_report[] = $tessarea->name;
        }

        return view('reportdev.edit')->with(
        [
            'report' => $report,
            'categories_for_dropdown' => $categories_for_dropdown,
            'types_for_dropdown' => $types_for_dropdown,
            'frameworks_for_dropdown' => $frameworks_for_dropdown,
            'tessareas_for_checkboxes' => $tessareas_for_checkboxes,
            'tessareas_for_this_report' => $tessareas_for_this_report
        ]);
    }

    /**
    * POST
    */
    public function update(Request $request, $id)
    {
        # Validate
        $this->validate($request, [
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'note_general' => 'min:10',
            'note_technical' => 'min:10',
            'first_implementation_dt' => 'date',
            'last_update_dt' => 'date'
        ]);

        #Find and update report
        $report = Report::find($request->id);
        $report->name = $request->name;

        $report->description = $request->input('description');
        $report->tess_report_id = $request->input('tess_report_id');
        $report->definition_file = $request->input('definition_file');
        $report->sql_proc = $request->input('sql_proc');
        $report->database = $request->input('database');
        $report->keywords = $request->input('keywords');
        $report->note_general = $request->input('note_general');
        $report->note_technical = $request->input('note_technical');

        $report->first_implementation_dt = $request->input('first_implementation_dt');
        $report->last_update_dt = $request->input('last_update_dt');

        $report->type_id = $request->type_id;
        $report->framework_id = $request->framework_id;
        $report->category_id = $request->category_id;
        $report->created_by = $request->user()->id;

        $report->schedulable = $request->input('schedulable');
        $report->verified = $request->input('verified');
        $report->inhouse = $request->input('inhouse');
        $report->published = $request->input('published');
        $report->active = $request->input('active');
        $report->discontinued = $request->input('discontinued');

        $report->save();

        # Save Tessareas
        $tessareas = ($request->tessareas) ?: [];
        $report->tessareas()->sync($tessareas);
        $report->save();

        #Done
        Session::flash('flash_message', 'Your report '.$report->name.' has been updated.');

        return redirect('/reports-dev');
    }


    /**
	* GET
    * Page to confirm deletion
	*/
    public function delete($id) {

        $report = Report::find($id);

        return view('reportdev.delete')->with('report', $report);
    }

    /**
    * POST
    */
    public function destroy($id)
    {
        # Get the report to be deleted
        $report = Report::find($id);

        if(is_null($report)) {
            Session::flash('message','Report not found.');
            return redirect('/reports-dev');
        }

        # First remove any tessarea associated with this report
        if($report->tessareas()) {
            $report->tessareas()->detach();
        }

        # Then delete the book
        $report->delete();

        # Finish
        Session::flash('flash_message', $report->name.' was deleted.');
        return redirect('/reports-dev');
    }


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
        return view('reportdev.my_revisions')->with(['revisions' => $revisions]);
    }
}
