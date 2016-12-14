@extends('layouts.master')

@section('title')
    My Revisions
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
            <h2>My Revisions</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-collpsed">
                <thead>
                    <tr>
                        <th>Report</th>
                        <th>Revision</th>
                        <th>Revision Date</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($revisions as $revision)
                        <tr>
                            <td><a href='/reports-dev/{{ $revision->report_id }}'><h4 class="text-info">{{ $revision->report_name }}</h4></a></td>
                            <td><p>{{ $revision->revision }}</p></td>
                            <td>{{ $revision->revision_dt }}</td>
                            <td><a class='button' href='/revisions/{{ $revision->revision_id }}'><i class='fa fa-eye'></i> View</a></td>
                            <td><a class='button' href='/revisions/{{ $revision->revision_id }}/edit'><i class='fa fa-pencil'></i> Edit</a></td>
                            <td><a class='button' href='/revisions/{{ $revision->revision_id }}/delete'><i class='fa fa-trash'></i> Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a class='button' href='http://p4.loc/revisions/create'><i class='fa fa-pencil-square-o'></i> Add another Revision</a>
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
