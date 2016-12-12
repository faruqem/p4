<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RevisionController extends Controller
{
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
        return view('revision.my_revisions')->with(['revisions' => $revisions]);
    }
}
