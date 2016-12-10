@extends('layouts.master')

@section('title')
    {{ $page_header }}
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
            <h2>{{ $page_header }}</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-collpsed">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Framework</th>
                        <th>Report Definition</th>
                        <th>SQL Procedure</th>
                        <th>Action</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                        <tr>
                            <td><a href='/reports-dev/{{ $report->id }}'><h4 class="text-info">{{ $report->name }}</h4></a></td>
                            <td>{{ $report->framework->name }}</td>
                            <td  class="long-word">{{ $report->definition_file }}</td>
                            <td  class="long-word">{{ $report->sql_proc }}</td>
                            <td><a class='button' href='/reports-dev/{{ $report->id }}'><i class='fa fa-eye'></i> View</a></td>
                            <td><a class='button' href='/reports-dev/{{ $report->id }}/edit'><i class='fa fa-pencil'></i> Edit</a></td>
                            <td><a class='button' href='/reports-dev/{{ $report->id }}/delete'><i class='fa fa-trash'></i> Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
