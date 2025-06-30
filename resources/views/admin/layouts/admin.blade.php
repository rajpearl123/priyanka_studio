@php $websiteSetting = App\Models\WebsiteSetting::first(); @endphp
<!DOCTYPE html>
<html lang="en" class=" layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-skin="default"
    data-assets-path="../../assets/" data-template="vertical-menu-template" data-bs-theme="light">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- App favicon -->
    <link rel="shortcut icon"
        href="{{ $websiteSetting->favicon ? asset('assets/images/logo/' . $websiteSetting->favicon) : asset('assets/images/logo/default-favicon.ico') }}" />
    <!-- Bootstrap Css -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Icons Css -->
    <link href="{{ url('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- App js -->
    <script src="{{ url('js/plugin.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('libs/tui-time-picker/tui-time-picker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('libs/tui-date-picker/tui-date-picker.min.css') }}">
    <link href="{{ url('libs/tui-calendar/tui-calendar.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jodit@3.24.3/build/jodit.min.css">
    <!-- Select2 CSS -->
    <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>




<body data-bs-theme="light" data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin.layouts.partials.header')
        @include('admin.layouts.partials.sidebar')

        @yield('content')

        @include('admin.layouts.partials.footer')


    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/jodit@3.24.3/build/jodit.min.js"></script>
        <script src="{{url('libs/jquery/jquery.min.js')}}"></script>
        <script src="{{url('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{url('libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{url('libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('libs/moment/min/moment.min.js')}}"></script>
        <!-- <script src="{{asset('libs/jquery-ui-dist/jquery-ui.min.js')}}"></script>-->
        <script src="{{asset('libs/fullcalendar/index.global.min.js')}}"></script>
        <!-- <script src="{{asset('js/locales-all.global.min.js')}}"></script> -->
        <script src="{{asset('js/pages/calendars-full.init.js')}}"></script> 

        <!-- apexcharts -->
        <script src="{{url('libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- dashboard blog init -->
        <script src="{{url('js/pages/dashboard-blog.init.js')}}"></script>

        <script src="{{url('js/app.js')}}"></script>
        <!-- Toastr JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        
        <!-- Your Calendar Initialization -->
        <script src="{{ url('js/pages/calendar.init.js') }}"></script>
        <!-- Select2 JS -->
        <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('#permission_id').select2({
                    placeholder: "Select Permissions",
                    allowClear: true,
                    width: '100%'
                });
            });
        </script>

        <!-- Toastr Script -->
        {!! Toastr::message() !!}
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
        <script>
            $(document).ready(function() {
                
                // Initialize Summernote for textareas with the .summernote class
                $('.summernote').summernote({                   
                    height: 200, // Adjust the height as needed
                    
                    // Add more configurations as needed
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            @if ($errors->any())
                let errorMessages = "";
                @foreach ($errors->all() as $error)
                    errorMessages += "{{ $error }}\n";
                @endforeach
        
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error!',
                    text: errorMessages,
                });
            @endif
        </script>
        @stack('js')


</body>

</html>
