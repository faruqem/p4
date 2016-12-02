@extends('layouts.master')

@section('title')
    Edit {{ $glossary->term }}
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
            <h2>Edit {{ $glossary->term }}</h2>
        </div>

        <form method='POST' action='/glossaries/{{ $glossary->id }}'>

            {{ method_field('PUT') }}

            {{ csrf_field() }}

            <input name='id' value='{{$glossary->id}}' type='hidden'>

            <div class='form-group'>
                <label for="term">Term</label>
                <input type='text' id='term' class="form-control" name='term'  value='{{ old('term', $glossary->term) }}'>
                <div class='error'>{{ $errors->first('term') }}</div>
            </div>

            <div class='form-group'>
                <label for="definition">Definition</label>
                <textarea id='definition' class="form-control" name='definition' rows="4" value='{{ old('definition', $glossary->definition) }}'>{{$glossary->definition}}</textarea>
                <div class='error'>{{ $errors->first('definition') }}</div>
            </div>

            <div class='text-muted'>
                All fields are required
            </div>

            <button type="submit" class="btn btn-primary">Save changes</button>

            <div class='error'>
                @if(count($errors) > 0)
                    Please correct the errors above and try again.
                @endif
            </div>
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
