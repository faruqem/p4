<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Report;

use App\Comment;

use Session;

class CommentController extends Controller
{
    /**
    * GET
    */
    public function my_comments()
    {
        $user_id = \Auth::user()->id;
        $comments = \DB::select("SELECT c.report_id,
                                        c.id AS comment_id,
                                        r.name AS report_name,
                                        c.description AS comment,
                                        c.comment_dt
                                    FROM reports r
                                        INNER JOIN comments c ON r.id = c.report_id
                                    WHERE c.user_id = $user_id
                                        AND r.active = 1
                                        AND c.deleted_at IS NULL
                                        AND c.active = 1
                                    ORDER BY r.name"
                                );
        return view('comment.my_comments')->with(['comments' => $comments]);
    }

    /**
    * GET
    */
    public function create()
    {
        # Report
        $reports_for_dropdown = Report::getForDropdown();
        return view('comment.create')->with([
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

        #Create a new glossary object
        $comment = new Comment();

        # Get the data from the form
        $comment->description = $request->input('description');
        $comment->report_id = $request->report_id;
        $comment->comment_dt = \Carbon\Carbon::now()->toDateTimeString();
        $comment->user_id = \Auth::user()->id; //Grab the login user ID for this

        #Save the data
        $comment->save();

        Session::flash('flash_message', 'Your comment is saved.');

        return redirect('/my-comments');
    }

    /**
    * GET
    */
    public function show($id)
    {
        $comment = Comment::find($id);

        if(is_null($comment)) {
            Session::flash('message','Comment not found');
            return redirect('/my-comments');
        }

        return view('comment.show')->with(['comment' => $comment]);
    }

    /**
    * GET
    */
    public function edit($id)
    {
        $comment = Comment::find($id);

        # Report
        $reports_for_dropdown = Report::getForDropdown();

        return view('comment.edit')->with([
            'comment' => $comment,
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

        # Find and update comment
        $comment = Comment::find($request->id);

        $comment->description = $request->description;
        $comment->report_id = $request->report_id;

        $comment->save();

        # Finish
        Session::flash('flash_message', 'Your changes to comment is saved.');
        return redirect('/my-comments');
    }

    /**
	* GET
    * Page to confirm deletion
	*/
    public function delete($id) {

        $comment = Comment::find($id);

        return view('comment.delete')->with('comment', $comment);
    }

    /**
    * POST
    */
    public function destroy($id)
    {
        # Get the comment to be deleted
        $comment = Comment::find($id);

        if(is_null($comment)) {
            Session::flash('message','Comment not found.');
            return redirect('/my-comments');
        }

        # Then delete the comment
        $comment->delete();

        # Finish
        Session::flash('flash_message', 'Your comment is deleted.');
        return redirect('/my-comments');
    }
}
