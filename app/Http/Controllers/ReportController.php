<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Report;

class ReportController extends Controller
{
    /**
    * GET
    */
    public function index()
    {
        $reports = Report::where('active',1)
            ->whereIn('type_id', array(2,3))
            ->orderby('name','asc')
            ->get();

        return view('report.index')->with(['reports' => $reports]);
    }

    /**
    * GET
    */
    public function index_fav()
    {
        $user_id = \Auth::user()->id;
        $ratings = \App\Rating::all()->where('user_id',$user_id);
        $report_ids[] = 0;
        foreach($ratings as $rating) {
            $report_ids[]=$rating->report_id;
        }
        //$comments = App\Post::find(1)->comments()->where('title', 'foo')->first();
        //dd($report_ids);
        $reports = Report::where('active',1)
            ->whereIn('id', $report_ids)
            ->whereIn('type_id', array(2,3))
            ->orderby('name','asc')
            ->get();

        return view('report.index')->with(['reports' => $reports]);
    }

    /**
    * GET
    */
    public function comments()
    {
        $user_id = \Auth::user()->id;
        $comments = \App\Comment::all()->where('user_id',$user_id);
        $report_ids[] = 0;
        foreach($comments as $comment) {
            $report_ids[]=$comment->report_id;
        }
        //$comments = App\Post::find(1)->comments()->where('title', 'foo')->first();
        //dd($report_ids);
        $reports = Report::where('active',1)
            ->whereIn('id', $report_ids)
            ->whereIn('type_id', array(2,3))
            ->orderby('name','asc')
            ->get();

        dd($reports);
        return view('report.comments')->with(['comments' => $comments]);
    }

    /**
    * GET
    */
    public function show($id)
    {
        $report = Report::find($id);

        if(is_null($report)) {
            Session::flash('message','Report not found');
            return redirect('/reports');
        }

        return view('report.show')->with(['report' => $report]);
    }
}
