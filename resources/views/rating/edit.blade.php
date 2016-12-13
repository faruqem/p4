@extends('layouts.master')

@section('title')
    Edit a Rating
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
            <h2>Edit Rating</h2>
        </div>

        <form method='POST' action='/ratings/{{ $rating->id }}'>

            {{ method_field('PUT') }}

            {{ csrf_field() }}

            <input name='id' value='{{$rating->id}}' type='hidden'>

            <div class='form-group'>
                <label for='report_id'>Report</label>
                <select name='report_id' id='report_id' readonly>
                    @foreach($reports_for_dropdown as $report_id => $report)
                        <option {{ ($report_id == $rating->report->id) ? 'SELECTED' : '' }} value='{{ $report_id }}'>{{ $report }}</option>
                    @endforeach
                </select>
            </div>
        
            <div class='form-group'>
                <label for="term">Rating</label>
                <input type='text' id='rating' class="form-control" name='rating' value='{{ old('rating', $rating->rating) }}'>
                <div class='error'>{{ $errors->first('rating') }}</div>
            </div>

            <div class='form-group'>
                <label for="favorite">Mark as a Favorite?</label><br>
                <input type="radio" name="favorite" value="1" {{ ($rating->favorite == 1) ? 'CHECKED' : '' }}> Yes<br>
                <input type="radio" name="favorite" value="0" {{ ($rating->favorite == 0) ? 'CHECKED' : '' }}> No<br>
                <div class='error'>{{ $errors->first('favorite') }}</div>
            </div>

            <div class='text-muted'>
                All fields are required
            </div>

            <button type="submit" class="btn btn-primary">Save changes</button>
            <a href='{{ url()->previous() }}' class="btn btn-primary">Cancel</a>

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
