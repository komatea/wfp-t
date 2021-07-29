@extends('layout.conquer')
@section('content')
    <h3 class="page-title">
        Welcome <small>Fellas</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary"
                data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i
                    class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="title m-b-md">
            Asnan's Bakery
        </div>

        <div class="links">
            <a href="/category">Category</a>
            <a href="/product">Product</a>
            <a href="https://laravel-news.com">News</a>
        </div>
    </div>
@endsection
