@extends('layouts.master')

@section('title')
    Make a New Revision
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
            <h2>Report - New Revision</h2>
        </div>
        <form method='POST' action='/revisions'>

            {{ csrf_field() }}

            <div class='form-group'>
                <label for='report_id'>Select a Report</label>
                <select name='report_id' id='report_id'>
                    @foreach($reports_for_dropdown as $report_id => $report)
                        <option value='{{ $report_id }}'>{{ $report }}</option>
                    @endforeach
                </select>
            </div>

            <div class='form-group'>
                <label for="description">Revision</label>
                <textarea id='description' class="form-control" name='description' rows="4">{{ old('description') }}</textarea>
                <div class='text-danger'>{{ $errors->first('description') }}</div>
            </div>

            <div class='form-instructions'>
                All fields are required
            </div>

            <button type="submit" class="btn btn-primary">Save Revision</button>
            <a href='/my-revisions' class="btn btn-primary">Cancel</a>

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
