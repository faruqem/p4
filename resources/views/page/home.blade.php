@extends('layouts.master')

@section('title','Home')

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
        <div class="jumbotron">
            <h1>Tessitura Report Catalog</h1>
            <p>Welcome to the Tessitura Report Catalog web application. This site is exclusivley for Ballet Tessitura end-users and developers to view and update Tessitura custom reports and utilities documentation.</p>
            <p>Please, contact National Ballet of Canada Software and Applications Team if you would like to gain access to the content of this site.</p>
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
