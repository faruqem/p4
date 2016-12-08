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
            ->orderby('category_id','asc')
            ->get();

        return view('report.index')->with(['reports' => $reports]);
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
