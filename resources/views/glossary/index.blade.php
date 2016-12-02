@extends('layouts.master')

@section('title')
    View all Glossarie Items
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
            <h2>Glossaries</h2>
        </div>
        @foreach($glossaries as $glossary)
            <div>
                <a href='/glossaries/{{ $glossary->id }}'><h4 class="text-info">{{ $glossary->term }}</h4></a>
                <p>{{ $glossary->definition }}</p>

                <a class='button' href='/glossaries/{{ $glossary->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
                <!--<a class='button' href='/glossaries/{{ $glossary->id }}'><i class='fa fa-eye'></i> View</a>-->
                <a class='button' href='/glossaries/{{ $glossary->id }}/delete'><i class='fa fa-trash'></i> Delete</a>
            </div><br>
        @endforeach
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
