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
            ->where('published',1)
            ->where('discontinued',0)
            ->whereIn('type_id', array(2,3)) //Only show report and utility type customization to the end users
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

}
