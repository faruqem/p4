<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Report;

use App\Category;

use App\Type;

use App\Framework;

use App\Tessarea;

use App\Screenshot;

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
            'last_update_dt' => 'date',
            'file_name' => 'string|required_with:caption,ss_description',
            'caption' => 'string',
            'file_type' => 'string',
            'ss_description' => 'string'
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


        if($request->input('first_implementation_dt')){
            $report->first_implementation_dt = $request->input('first_implementation_dt');
        } else{
            $report->first_implementation_dt = \Carbon\Carbon::now()->toDateTimeString();
        }

        if($request->input('first_implementation_dt')){
            $report->last_update_dt = $request->input('last_update_dt');
        } else{
            $report->last_update_dt = \Carbon\Carbon::now()->toDateTimeString();
        }

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

        # Save Screenshots. Save if at least file name is supplied.
        if($request->input('file_name')){

            $screenshot = new Screenshot();

            $screenshot->file_name = $request->input('file_name');
            $screenshot->file_type = $request->input('file_type');
            $screenshot->caption = $request->input('caption');
            $screenshot->description = $request->input('ss_description');


            $report->screenshots()->save($screenshot);
        }

        # Show the sucess message
        Session::flash('flash_message', 'Your report '.$report->name.' has been saved.');

        # Redirect to  report list
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

        $screenshot = $report->screenshots->first();
        if(!$screenshot){
            $screenshot = new Screenshot();
        }


        return view('reportdev.edit')->with(
        [
            'report' => $report,
            'categories_for_dropdown' => $categories_for_dropdown,
            'types_for_dropdown' => $types_for_dropdown,
            'frameworks_for_dropdown' => $frameworks_for_dropdown,
            'tessareas_for_checkboxes' => $tessareas_for_checkboxes,
            'tessareas_for_this_report' => $tessareas_for_this_report,
            'screenshot' => $screenshot
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
            'last_update_dt' => 'date',
            'file_name' => 'string|required_with:caption,ss_description',
            'caption' => 'string',
            'file_type' => 'string',
            'ss_description' => 'string'
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

        #save screenshot
        if($request->ss_id) { //Update is a screenshot for this report is available
            $screenshot = Screenshot::find($request->ss_id);
            if($request->input('file_name')) {
                $screenshot->file_name = $request->file_name;
                $screenshot->file_type = $request->type;
                $screenshot->caption = $request->caption;
                $screenshot->description = $request->ss_description;
                $screenshot->save();
            } else {
                $screenshot->delete(); //If file name doesn't exist user intention is to delete the file.
            }
        } elseif($request->input('file_name')) { //If no screenshot is available right now and new one has to be created
                $screenshot = new Screenshot();

                $screenshot->file_name = $request->input('file_name');
                $screenshot->file_type = $request->input('file_type');
                $screenshot->caption = $request->input('caption');
                $screenshot->description = $request->input('ss_description');

                $report->screenshots()->save($screenshot);
        }

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

        # First remove any foreign table associated with this report
        #-----------------------------------------------------------
        #tessareas
        if($report->tessareas()) {
            $report->tessareas()->detach(); //Many to many relationship
        }

        #user comments
        if($report->comments()) {
            $report->comments()->delete(); //One to many relationship
        }

        #user ratings
        if($report->ratings()) {
            $report->ratings()->delete();
        }

        #developer revisions
        if($report->revisions()) {
            $report->revisions()->delete();
        }

        #report screenshots
        if($report->screenshots()) {
            $report->screenshots()->delete();
        }

        # Then delete the book
        $report->delete();

        # Finish
        Session::flash('flash_message', $report->name.' was deleted.');
        return redirect('/reports-dev');
    }

}
