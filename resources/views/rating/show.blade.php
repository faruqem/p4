@extends('layouts.master')

@section('title')
    View Rating
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
            <h2>Your Rating of the report <strong><em>{{ $revision->report->name }}</em></strong></h2>
        </div>
        <h4>Rating: {{ $rating->rating }}</h4>
        <h4>Marked as a Favorite: {{ ($rating->favorite == 1) ? 'Yes' : 'No' }}</h4><br>

        <a class='button' href='/ratings/{{ $rating->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
        <a class='button' href='/ratings/{{ $rating->id }}/delete'><i class='fa fa-trash'></i> Delete</a>

        <br><br>
        <a class='text-info' href='/my-ratings'>Return to <strong>My Ratings</strong> page</a>
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
