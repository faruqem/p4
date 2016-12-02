@extends('layouts.master')

@section('title')
    {{ $glossary->term }}
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
            <h2>{{ $glossary->term }}</h2>
        </div>
        <p>{{ $glossary->definition }}</p><br>

        <a class='button' href='/glossaries/{{ $glossary->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
        <a class='button' href='/glossaries/{{ $glossary->id }}/delete'><i class='fa fa-trash'></i> Delete</a>

        <br><br>
        <a class='text-success' href='/glossaries'>&larr; Return to Glossaries page</a>
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
