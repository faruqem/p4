@extends('layouts.master')

@section('title')
    View Comment
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
            <h2>Your Comment on report <strong><em>{{ $comment->report->name }}</em></strong></h2>
        </div>
        <h4>Comment</h4>
        <p>{{ $comment->description }}</p>
        <p><strong>Date:</strong> {{ $comment->comment_dt }}</p><br>

        <a class='button' href='/comments/{{ $comment->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
        <a class='button' href='/comments/{{ $comment->id }}/delete'><i class='fa fa-trash'></i> Delete</a>

        <br><br>
        <a class='text-info' href='/my-comments'>Return to <strong>My Comments</strong> page</a>
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
