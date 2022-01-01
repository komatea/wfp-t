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
            <a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>

        </div>
    </div>

    <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">DISCLAIMER</h4>
              </div>
              <div class="modal-body">
                Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement. 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
         </div>
      </div>
      
@endsection
