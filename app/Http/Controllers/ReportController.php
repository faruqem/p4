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
        $page_header = "All Reports";

        $reports = Report::where('active',1)
            ->whereIn('type_id', array(2,3))
            ->orderby('name','asc')
            ->get();

        return view('report.index')->with(['reports' => $reports, 'page_header' => $page_header]);
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
    
    /**
    * GET
    */
    public function my_ratings()
    {
        $user_id = \Auth::user()->id;
        $ratings = \DB::select("SELECT t.report_id,
                                        t.id AS rating_id,
                                        r.name AS report_name,
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
        return view('report.my_ratings')->with(['ratings' => $ratings]);
    }

    /**
    * GET
    */
    public function my_fav_reports()
    {
        $page_header = "My Favorite Reports";

        $user_id = \Auth::user()->id;
        $ratings = \App\Rating::all()->where('user_id',$user_id);
        $report_ids = [];
        foreach($ratings as $rating) {
            $report_ids[]=$rating->report_id;
        }

        $reports = Report::where('active',1)
            ->whereIn('id', $report_ids)
            ->whereIn('type_id', array(2,3))
            ->orderby('name','asc')
            ->get();

        return view('report.index')->with(['reports' => $reports, 'page_header' => $page_header]);
    }

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
        return view('report.my_comments')->with(['comments' => $comments]);
    }
}
