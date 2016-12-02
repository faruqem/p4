<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Glossary;

use Session;

class GlossaryController extends Controller
{
    /**
    * GET
    */
    public function index()
    {
        $glossaries = Glossary::all();
        return view('glossary.index')->with(['glossaries' => $glossaries]);
    }

    /**
    * GET
    */
    public function create()
    {
        return view('glossary.create');
    }

    /**
    * POST
    */
    public function store(Request $request)
    {

        # Validate
        $this->validate($request, [
            'term' => 'required',
            'definition' => 'required'
        ]);

        # If there were errors, Laravel will redirect the
        # user back to the page that submitted this request
        # The validator will tack on the form data to the request
        # so that it's possible (but not required) to pre-fill the
        # form fields with the data the user had entered

        # If there were NO errors, the script will continue...

        #Create a new glossary object
        $glossary = new Glossary();

        # Get the data from the form
        $glossary->term = $request->input('term');
        $glossary->definition = $request->input('definition');
        $glossary->created_by = 1; //Grab the login user ID for this

        #Save the data
        $glossary->save();

        Session::flash('flash_message', 'Your glossary term '. $glossary->term .' was added.');

        return redirect('/glossaries');

    }


    /**
    * GET
    */
    public function show($id)
    {
        $glossary = Glossary::find($id);

        if(is_null($glossary)) {
            Session::flash('message','Glossary term not found');
            return redirect('/glossaries');
        }

        return view('glossary.show')->with(['glossary' => $glossary]);
    }


    /**
    * GET
    */
    public function edit($id)
    {
        $glossary = Glossary::find($id);

        return view('glossary.edit')->with(['glossary' => $glossary]);
    }


    /**
    * POST
    */
    public function update(Request $request, $id)
    {

        # Validate
        $this->validate($request, [
            'term' => 'required',
            'definition' => 'required'
        ]);

        # Find and update glossary term
        $glossary = Glossary::find($request->id);
        $glossary->term = $request->term;
        $glossary->definition = $request->definition;
        $glossary->updated_by = 1; //Replace this with login user id
        $glossary->save();

        # Finish
        Session::flash('flash_message', 'Your changes to '. $glossary->term .' were saved.');
        return redirect('/glossaries');
    }


    /**
	* GET
    * Page to confirm deletion
	*/
    public function delete($id) {

        $glossary = Glossary::find($id);

        return view('glossary.delete')->with('glossary', $glossary);
    }

    /**
    * POST
    */
    public function destroy($id)
    {
        # Get the glossary term to be deleted
        $glossary = Glossary::find($id);

        if(is_null($glossary)) {
            Session::flash('message','Glossary term not found.');
            return redirect('/glossaries');
        }

        # Then delete the glossary term
        $glossary->delete();

        # Finish
        Session::flash('flash_message', $glossary->term.' was deleted.');
        return redirect('/glossaries');
    }


}
