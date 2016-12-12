<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RatingController extends Controller
{
    /**
    * GET
    */
    public function my_ratings()
    {
        $user_id = \Auth::user()->id;
        $ratings = \DB::select("SELECT t.report_id,
                                        t.id AS rating_id,
                                        r.name AS report_name,
                                        t.favorite,
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
        return view('rating.my_ratings')->with(['ratings' => $ratings]);
    }
}
