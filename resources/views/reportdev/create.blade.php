@extends('layouts.master')

@section('title')
    Create a New Report Item
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
            <h2>Add New Report</h2>
        </div>
        <form method='POST' action='/reports-dev'>

            {{ csrf_field() }}

            <div class='form-group'>
                <label for="name">Name</label>
                <input type='text' id='naqme' class="form-control" name='name'  value='{{ old('name') }}'>
                <div class='text-danger'>{{ $errors->first('name') }}</div>
            </div>
            <div class='form-group'>
                <label for="description">Description</label>
                <textarea id='description' class="form-control" name='description' rows="3"></textarea>
                <div class='text-danger'>{{ $errors->first('description') }}</div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-collpsed">
                    <tbody>
                        <tr>
                            <td>
                                <div class='form-group'>
                                    <label for='category_id'>Category</label>
                                    <select name='category_id' id='category_id'>
                                        @foreach($categories_for_dropdown as $category_id => $category)
                                            <option value='{{ $category_id }}'>{{ $category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class='form-group'>
                                    <label for='type_id'>Type</label>
                                    <select name='type_id' id='type_id'>
                                        @foreach($types_for_dropdown as $type_id => $type)
                                            <option value='{{ $type_id }}'>{{ $type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class='form-group'>
                                    <label for='framework_id'>Framework</label>
                                    <select name='framework_id' id='framework_id'>
                                        @foreach($frameworks_for_dropdown as $framework_id => $framework)
                                            <option value='{{ $framework_id }}'>{{ $framework }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class='form-group'>
                <label for="keywords">Keywords (Comma Separated)</label>
                <input type='text' id='keywords' class="form-control" name='keywords'  value='{{ old("keywords") }}'>
                <div class='text-danger'>{{ $errors->first('keywords') }}</div>
            </div>

            <div class='form-group'>
                <label for="sql_proc">SQL Procedure</label>
                <input type='text' id='sql_proc' class="form-control" name='sql_proc'  value='{{ old("sql_proc") }}'>
                <div class='text-danger'>{{ $errors->first('sql_proc') }}</div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-collpsed">
                    <tbody>
                        <tr>
                            <td>
                                <div class='form-group'>
                                    <label for="definition_file">Report Definition File</label>
                                    <input type='text' id='definition_file' class="form-control" name='definition_file'  value='{{ old("definition_file") }}'>
                                    <div class='text-danger'>{{ $errors->first('definition_file') }}</div>
                                </div>
                            </td>
                            <td>
                                <div class='form-group'>
                                    <label for="tess_report_id">Tess Report Id</label>
                                    <input type='text' id='tess_report_id' class="form-control" name='tess_report_id'  value='{{ old("tess_report_id") }}'>
                                    <div class='text-danger'>{{ $errors->first('tess_report_id') }}</div>
                                </div>
                            </td>
                            <td>
                                <div class='form-group'>
                                    <label for="keywords">Database</label>
                                    <input type='text' id='database' class="form-control" name='database'  value='{{ old("database", "Impresario" )}}'>
                                    <div class='text-danger'>{{ $errors->first('database') }}</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-collpsed">
                    <tbody>
                        <tr>
                            <td>
                                <div class='form-group'>
                                    <label for="note_general">Note General</label>
                                    <textarea id='note_general' class="form-control" name='note_general' rows="3"></textarea>
                                    <div class='text-danger error'>{{ $errors->first('note_general') }}</div>
                                </div>
                            </td>
                            <td>
                                <div class='form-group'>
                                    <label for="note_technical">Note Technical</label>
                                    <textarea id='note_technical' class="form-control" name='note_technical' rows="3"></textarea>
                                    <div class='text-danger error'>{{ $errors->first('note_technical') }}</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-collpsed">
                    <tbody>
                        <tr>
                            <td rowspan="4">
                                <div class='form-group'>
                                    <label>Tess Areas</label><br>
                                    @foreach($tessareas_for_checkboxes as $tessarea_id => $tessarea_name)
                                        <input type='checkbox' value='{{ $tessarea_id }}' name='tessareas[]'> {{ $tessarea_name }} <br>
                                    @endforeach
                                </div>
                            </td>
                            <td>
                                <div class='form-group'>
                                    <label for="schedulable">Can be scheduled?</label><br>
                                    <input type="radio" name="schedulable" value="1" checked> Yes<br>
                                    <input type="radio" name="schedulable" value="0"> No<br>
                                    <div class='error'>{{ $errors->first('schedulable') }}</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class='form-group'>
                                    <label for="inhouse">In-house solution?</label><br>
                                    <input type="radio" name="inhouse" value="1" checked> Yes<br>
                                    <input type="radio" name="inhouse" value="0"> No<br>
                                    <div class='error'>{{ $errors->first('schedulable') }}</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class='form-group'>
                                    <label for="verified">Output verified?</label><br>
                                    <input type="radio" name="verified" value="1" checked> Yes<br>
                                    <input type="radio" name="verified" value="0"> No<br>
                                    <div class='error'>{{ $errors->first('verified') }}</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class='form-group'>
                                    <label for="published">Publish upon submission?</label><br>
                                    <input type="radio" name="published" value="1" checked> Yes<br>
                                    <input type="radio" name="published" value="0"> No<br>
                                    <div class='error'>{{ $errors->first('schedulable') }}</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-collpsed">
                    <tbody>
                        <tr>
                            <td>
                                <div class='form-group'>
                                    <label for='first_implementation_dt'>First Implementation Date</label>
                                    <input type='date' id='first_implementation_dt' class='form-control' name='first_implementation_dt'  value='{{ old("first_implementation_dt") }}'>
                                    <div class='text-danger'>{{ $errors->first('first_implementation_dt') }}</div>
                                </div>
                            </td>
                            <td>
                                <div class='form-group'>
                                    <label for='last_update_dt'>Last Update Date</label>
                                    <input type='date' id='last_update_dt' class='form-control' name='last_update_dt'  value='{{ old("last_update_dt") }}'>
                                    <div class='text-danger'>{{ $errors->first('last_update_dt') }}</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class='form-instructions'>
                Except technical and general note fields, all other fields are required.
            </div>

            <button type="submit" class="btn btn-primary">Save Report</button>
            <button type="reset" class="btn btn-primary">Reset</button>
            <p></p>
            <!--<a href='/reports-dev' class="btn btn-primary">Cancel</a>-->

            {{--
                <ul class=''>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            --}}

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
