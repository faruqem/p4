@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $report->term }}
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
            <h2>Confirm Deletion!</h2>
        </div>
        <form method='POST' action='/reports-dev/{{ $report->id }}'>

            {{ method_field('DELETE') }}

            {{ csrf_field() }}

            <p class="text-danger"><span><strong>WARNING:</strong></span> This will remove all related user comments, ratings, developers revision history etc. Deleted data is not recoverable. We highly recommend you edit the report to mark it inactive or dicontinued instead.</p><br>
            <h4 class="text-danger">Still you want to proceed with deleting item: <span><strong><em>{{ $report->name }}</em></strong></span>?.</h4><br>

            <input type='submit' class="btn btn-primary" value='Yes'>
            <a href='{{ url()->previous() }}' class="btn btn-primary">Cancel</a>
        </form>
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
