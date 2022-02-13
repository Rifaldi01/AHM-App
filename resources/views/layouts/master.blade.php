<!DOCTYPE html>
<html lang="en">
@include('layouts.component.admin.head')
<div id="wrapper">
    @include('layouts.component.admin.sidebar')
    @include('layouts.component.admin.header')

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.component.admin.js')


