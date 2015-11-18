@extends('layouts.menu')
@section('page_heading','Simple Sidebar')
@section('section')

    <div class="col-lg-12">
        {{ $member->first_name }}
        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
       <span data-toggle="collapse" data-target="#collapse" class="badge pull-right">Test</span>

        </div>

@stop