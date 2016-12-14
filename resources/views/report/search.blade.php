@extends('layouts.master')

@section('title')
    Search Report(s)
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
            <h2>Search Report(s)</h2>
        </div>
        <form method='GET' action='/search-result'>

            {{ csrf_field() }}

            <div class="table-responsive">
                <table class="table table-bordered table-collpsed">
                    <tbody>
                        <tr>
                            <td  colspan="2">
                                <div class='form-group'>
                                    <label for='keyword'>Keyword, Name or Description Contains: </label>
                                    <input type="text", id="keyword", name="keyword" vale='{{ old('keyword')}}'>
                                </div>
                            </td>
                            <td>AND</td>
                            <td  colspan="4">
                                <div class='form-group'>
                                    <label for='origin'>Origin</label>
                                    <select name='origin' id='origin'>
                                        <option value='1'>Any</option>
                                        <option value='2'>In-house</option>
                                        <option value='3'>Canned</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>AND</td>
                            <td>
                                <div class='form-group'>
                                    <label for='category_id'>Category</label>
                                    <select name='category_id' id='category_id'>
                                        <option value='999'>Any</option>
                                        @foreach($categories_for_dropdown as $category_id => $category)
                                            <option value='{{ $category_id }}'>{{ $category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>AND</td>
                            <td>
                                <div class='form-group'>
                                    <label for='tessarea_id'>Tessitura Area</label>
                                    <select name='tessarea_id' id='tessarea_id'>
                                        <option value='999'>Any</option>
                                        @foreach($tessareas_for_checkboxes as $tessarea_id => $tessarea)
                                            <option value='{{ $tessarea_id }}'>{{ $tessarea }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>AND</td>
                            <td>
                                <div class='form-group'>
                                    <label for='framework_id'>Framework</label>
                                    <select name='framework_id' id='framework_id'>
                                        <option value='999'>Any</option>
                                        @foreach($frameworks_for_dropdown as $framework_id => $framework)
                                            <option value='{{ $framework_id }}'>{{ $framework }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>AND</td>
                            <td>
                                <div class='form-group'>
                                    <label for='type_id'>Type</label>
                                    <select name='type_id' id='type_id'>
                                        <option value='999'>Any</option>
                                        @foreach($types_for_dropdown as $type_id => $type)
                                            <option value='{{ $type_id }}'>{{ $type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>

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
