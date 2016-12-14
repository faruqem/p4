@extends('layouts.master')

@section('title')
    My Ratings
@endsection

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    {{--Place holder for page specific CSS file--}}
@endsection

@section('content')
<!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <h2>My Ratings</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-collpsed">
                <thead>
                    <tr>
                        <th>Report</th>
                        <th>Rating</th>
                        <th>Favorite</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ratings as $rating)
                        <tr>
                            <td><a href='/reports/{{ $rating->report_id }}'><h4 class="text-info">{{ $rating->report_name }}</h4></a></td>
                            <td><p>{{ $rating->rating }}</p></td>
                            <td><p>{{ ($rating->favorite == 1) ? 'Yes' : '' }}</p></td>
                            <!--<td><a class='button' href='/my-ratings/{{ $rating->rating_id }}'><i class='fa fa-eye'></i> View</a></td>-->
                            <td><a class='button' href='/ratings/{{ $rating->rating_id }}/edit'><i class='fa fa-pencil'></i> Edit</a></td>
                            <td><a class='button' href='/ratings/{{ $rating->rating_id }}/delete'><i class='fa fa-trash'></i> Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a class='button' href='http://p4.loc/ratings/create'><i class='fa fa-pencil-square-o'></i> Rate another Report</a>
    </div>
@endsection


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    {{--Place holder for page specific JS file--}}
@endsection
