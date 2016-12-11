@extends('layouts.master')

@section('title')
    {{ $report->name }} - Technical Info
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
            <h2>{{ $report->name }} - Technical Info</h2>
        </div>
        <a class='text-info' href='{{ url()->previous() }}'>Return to Previous Page</a>
        <h4>Description</h4>
        <p>{{ $report->description }}</p><br>
        <h4>Note Technical</h4>
        <p>{{ $report->note_technical }}</p><br>
        <h4>Note General</h4>
        <p>{{ $report->note_general }}</p><br>
        <h4>Keywords</h4>
        <p>{{ $report->keywords }}</p><br>
        <h4>Tessitura Application Areas</h4>
        <p>
            @foreach($report->tessareas as $tessarea)
                {{ $tessarea->name }} |
            @endforeach
        </p><br>
        <h4>Technical Details</h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-collpsed">
                <thead>
                    <tr>
                        <th>Report Definition File</th>
                        <th>SQL Procedure</th>
                        <th>Tessitura Report ID</th>
                        <th>Database</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $report->definition_file }}</td>
                        <td>{{ $report->sql_proc }}</td>
                        <td>{{ $report->tess_report_id }}</td>
                        <td>{{ $report->database }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4>Other Details</h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-collpsed">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Framework</th>
                        <th>Origin</th>
                        <th>First Implementation</th>
                        <th>Last Update</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $report->category->name }}</td>
                        <td>{{ $report->type->name }}</td>
                        <td>{{ $report->framework->name }}</td>
                        <td>{{ $report->inhouse ? 'In-house' : 'Canned' }}</td>
                        <td>{{ $report->first_implementation_dt }}</td>
                        <td>{{ $report->last_update_dt }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4>Screenshot(s)</h4>
        @foreach($report->screenshots as $screenshot)
            <div class="panel panel-default">
                <div class="panel-body">

                        <p><strong>Caption:</strong> {{ $screenshot->caption }}</p>
                        <p><strong>Description:</strong> {{ $screenshot->description }}</p><br>
                        <img src="/images/screenshots/{{ $screenshot->file_name }}" class="img-responsive" alt='A screenshot of {{$report->name}}'><br>
                </div>
            </div>
        @endforeach
        <br>
        <a class='button' href='/reports-dev/{{ $report->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
        <a class='button' href='/reports-dev/{{ $report->id }}/delete'><i class='fa fa-trash'></i> Delete</a>

        <br><br>
        <a class='text-info' href='{{ url()->previous() }}'>Return to Previous Page</a>
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
