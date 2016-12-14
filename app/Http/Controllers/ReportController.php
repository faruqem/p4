<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Report;

use App\Category;

use App\Type;

use App\Framework;

use App\Tessarea;

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
        $ratings = \App\Rating::all()->where('user_id',$user_id)->where('favorite',1);
        $report_ids = [];
        foreach($ratings as $rating) {
            $report_ids[]=$rating->report_id;
        }

        $reports = Report::where('active',1)
            ->whereIn('id', $report_ids)
            //->whereIn('type_id', array(2,3))
            ->orderby('name','asc')
            ->get();

        return view('report.index')->with(['reports' => $reports, 'page_header' => $page_header]);
    }

    /**
    * GET
    */
    public function search(){
        # Category
        $categories_for_dropdown = Category::getForDropdown();

        # Type
        $types_for_dropdown = Type::getForDropdown();

        # Framework
        $frameworks_for_dropdown = Framework::getForDropdown();

        # Tessitura Area
        $tessareas_for_checkboxes = Tessarea::getForCheckboxes();

        return view('report.search')->with([
            'categories_for_dropdown' => $categories_for_dropdown,
            'types_for_dropdown' => $types_for_dropdown,
            'frameworks_for_dropdown' => $frameworks_for_dropdown,
            'tessareas_for_checkboxes' => $tessareas_for_checkboxes
        ]);
    }

    /**
    * POST
    */
    public function search_result(Request $request){
        # Validate
        $this->validate($request, [
            'keyword' => 'string|min:3',
            'origin' => 'integer|min:1|max:3',
            'category_id' => 'integer',
            'tessarea_id' => 'integer',
            'framework_id' => 'integer',
            'type_id' => 'integer'
        ]);

        $keyword = $request->input('keyword');
        $origin = $request->origin;
        $category = $request->category_id;
        $tessarea = $request->tessarea_id;
        $framework= $request->framework_id;
        $type = $request->type_id;


        $page_header = 'Search Result';

        $report_ids = Report::search($keyword, $origin, $category, $tessarea, $framework, $type);



        $report_ids_arr = [];
        foreach($report_ids as $report_id) {
            $report_ids_arr[]=$report_id->id;
        }

        $reports = Report::whereIn('id', $report_ids_arr)
        ->where('active',1)
        ->where('published',1)
        ->where('discontinued',0)
        //->whereIn('type_id', array(2,3)) //Only show report and utility type customization to the end users
        ->orderby('name','asc')
        ->get();

        return view('report.index')->with(['reports' => $reports, 'page_header' => $page_header]);
    }

}
