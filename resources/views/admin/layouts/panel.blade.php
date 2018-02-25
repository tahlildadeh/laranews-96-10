<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.partials.head')
</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        @include('admin.partials.sidebar')

        <!-- top navigation -->
        @include('admin.partials.navigation')
        <!-- /top navigation -->
        <!-- page content -->
        @include('admin.partials.main')
        <!-- /page content -->
    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>


@include('admin.partials.scripts')
@stack('before-body-end')
<script>
    $('#flash-overlay-modal').modal();
</script>
</body>

</html>
