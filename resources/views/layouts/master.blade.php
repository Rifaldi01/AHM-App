<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->

<head>
    @include('layouts.component.admin.header')
</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('layouts.component.admin.sidebar')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('layouts.component.admin.navbar')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumb-->
                <div class="row pt-2 pb-2 mb-3">
                    <div class="col-sm-9">
                        <h4 class="page-title">@yield('page-title')</h4>
                    </div>
                </div>
                <!-- End Breadcrumb-->
                @yield('content')

            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

    </div>
    <!--End wrapper-->
    @include('layouts.component.admin.js')
</body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->

</html>
