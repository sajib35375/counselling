<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('admin/images/favicon.ico') }}">

    <title>Admin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('admin/css/vendors_css.css') }}">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/skin_color.css') }}">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
    @include('sweetalert::alert')
    @include('admin.body.header')

    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.body.left_sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
   @include('admin.body.footer')

    <!-- Control Sidebar -->
    @include('admin.body.right_sidebar')
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!-- Vendor JS -->
<script src="{{ asset('admin/js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
<script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
<script src="{{ asset('assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
<script src="{{ asset('admin/js/pages/editor.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    jQuery(document).ready(function (){
        jQuery(document).on('click','#delete',function (e){
            e.preventDefault();
            let link = $(this).attr('href');
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })


        })
    })



</script>
<!-- Sunny Admin App -->
<script src="{{ asset('admin/js/template.js') }}"></script>
<script src="{{ asset('admin/js/pages/dashboard.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>
</body>
</html>
