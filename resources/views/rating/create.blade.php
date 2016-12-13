@extends('layouts.master')

@section('title')
    Make a New Rating
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
            <h2>Report - New Rating</h2>
        </div>
        <form method='POST' action='/ratings'>

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
                <label for="rating">Rating (1 to 5)</label>
                <input type="text" id='rating' class="form-control" name='rating' value='{{ old('rating') }}'>
                <div class='text-danger'>{{ $errors->first('rating') }}</div>
            </div>

            <div class='form-group'>
                <label for="favorite">Mark as a Favorite?</label><br>
                <input type="radio" name="favorite" value="1"> Yes<br>
                <input type="radio" name="favorite" value="0" checked> No<br>
                <div class='error'>{{ $errors->first('favorite') }}</div>
            </div>

            <div class='form-instructions'>
                Rating field is required
            </div>

            <button type="submit" class="btn btn-primary">Save Rating</button>
            <a href='/my-ratings' class="btn btn-primary">Cancel</a>

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
