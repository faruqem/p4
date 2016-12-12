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
                        <th>Category</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Framework</th>
                        <th>Origin</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                        <tr>
                            <td>{{ $report->category->name }}</td>
                            <td><a href='/reports/{{ $report->id }}'><h4 class="text-info">{{ $report->name }}</h4></a></td>
                            <td><p>{{ $report->description }}</p></td>
                            <td>{{ $report->type->name }}</td>
                            <td>{{ $report->framework->name }}</td>
                            <td>{{ $report->inhouse ? 'In-house' : 'Canned' }}</td>
                            <td><a class='button' href='/reports/{{ $report->id }}'><i class='fa fa-eye'></i> View</a></td>
                            <!--<td><a class='button' href='/reports/{{ $report->id }}/edit'><i class='fa fa-pencil'></i> Edit</a></td>
                            <td><a class='button' href='/reports/{{ $report->id }}/delete'><i class='fa fa-trash'></i> Delete</a></td>-->
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
