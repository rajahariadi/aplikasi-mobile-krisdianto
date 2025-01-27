<!DOCTYPE html>
<html>


<!-- HEAD -->
@include('component.head')
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="">
    <!-- BEGIN HEADER -->
    @include('component.header')
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">

        <!-- BEGIN SIDEBAR -->
        @include('component.sidebar')
        <!-- END SIDEBAR -->

        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content">
            <div class="content">
              @yield('content')
            </div>

        </div>
    </div>
    <!-- END CONTAINER -->

    <!-- SCRIPT -->
    @include('component.script')
    <!-- END SCRIPT -->
</body>

</html>
