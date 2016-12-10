<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Report;

class ReportDevController extends Controller
{
    /**
    * GET
    */
    public function index()
    {
        $page_header = "All Reports - Technical";

        $reports = Report::where('active',1)
            ->whereIn('type_id', array(2,3))
            ->orderby('name','asc')
            ->get();

        return view('reportdev.index')->with(['reports' => $reports, 'page_header' => $page_header]);
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
