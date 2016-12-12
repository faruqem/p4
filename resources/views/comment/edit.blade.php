@extends('layouts.master')

@section('title')
    Edit a Comment
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
            <h2>Edit Comment</h2>
        </div>

        <form method='POST' action='/comments/{{ $comment->id }}'>

            {{ method_field('PUT') }}

            {{ csrf_field() }}

            <input name='id' value='{{$comment->id}}' type='hidden'>

            <div class='form-group'>
                <label for="term">Comment</label>
                <textarea type='text' id='description' class="form-control" name='description'>{{ old('description', $comment->description) }}</textarea>
                <div class='error'>{{ $errors->first('description') }}</div>
            </div>

            <div class='form-group'>
                <label for='report_id'>Report</label>
                <select name='report_id' id='report_id'>
                    @foreach($reports_for_dropdown as $report_id => $report)
                        <option {{ ($report_id == $comment->report->id) ? 'SELECTED' : '' }} value='{{ $report_id }}'>{{ $report }}</option>
                    @endforeach
                </select>
            </div>

            <p><strong>Comment Date:</strong> {{ $comment->comment_dt }}</p>

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
