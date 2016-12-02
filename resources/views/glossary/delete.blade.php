@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $glossary->term }}
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
            <h2>Confirm deletion</h2>
        </div>
        <form method='POST' action='/glossaries/{{ $glossary->id }}'>

            {{ method_field('DELETE') }}

            {{ csrf_field() }}

            <h4>Are you sure you want to delete <em>{{ $glossary->term }}</em>?</h4><br>

            <input type='submit' class="btn btn-primary" value='Yes'>
            <a href='/glossaries' class="btn btn-primary">Cancel</a>
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
