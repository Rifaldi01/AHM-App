
<!DOCTYPE html>
<html lang="en">
@include('layouts.assets-admin.head')
<div id="wrapper">
@include('layouts.assets-admin.sidebar')
@include('layouts.assets-admin.header')

<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>


</div>

@include('layouts.assets-admin.js')


