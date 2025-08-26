<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
    </title>
    <meta name="description" content="vch" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">
        var APP_URL = '{{ URL::to('/') }}';
    </script>
    @include('public.newlayout.style')
    @stack('commonstyle')
</head>

<!-- <body class="hold-transition layout-top-nav"> -->
<body class="sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('public.newlayout.header')
        @include('public.newlayout.sidebar')

        <!-- <div class="content-wrapper"> -->
        <div class="content-wrapper" style="background-color: #f4f6f9;">
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            @yield('content-header')
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                @yield('content')
            </section>
        </div>

        @include('public.newlayout.footer')
    </div>

    @include('public.newlayout.script')
    @stack('commonjs')
    @stack('pagescripts')
    <script>
    function memberLogout() {
        // check for confirm in sweetalert
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to logout!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, logout!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "{{ url('/member/logout') }}",
                    type: 'get',
                }).done(function(data) {
                    setTimeout(function() {
                        document.location.href = "{{ url('/member') }}"
                    }, 500);
                })
            }
        })
    }
    </script>
</body>

</html>
