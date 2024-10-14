@guest
    <script>
        window.location = "/login";
    </script>
    @php

    return redirect()->route('home');
    @endphp
@endguest
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{auth()->user()->theme_mode == "darkmode"?"dark-theme":''}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('admin_assets') }}/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="{{ asset('admin_assets') }}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('admin_assets') }}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('admin_assets') }}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('admin_assets') }}/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('admin_assets') }}/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/css/{{ app()->getLocale() == 'ar' ? 'app-ar' : 'app' }}.css" />
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/css/dark-sidebar.css" />
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/css/dark-theme.css" />






    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css"
        integrity="sha512-RPxGl20NcAUAq1+Tfj8VjurpvkZaep2DeCgOfQ6afXSEgcvrLE6XxDG2aacvwjdyheM/bkwaLVc7kk82+mafkQ=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css"
        integrity="sha512-pDpLmYKym2pnF0DNYDKxRnOk1wkM9fISpSOjt8kWFKQeDmBTjSnBZhTd41tXwh8+bRMoSaFsRnznZUiH9i3pxA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">   

    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
        crossorigin="anonymous" />



    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet">

    <link href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.1/dist/bootstrap-float-label.min.css"
        rel="stylesheet">


    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css"
        integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA=="
        crossorigin="anonymous" data-turbolinks-eval="false" data-turbo-eval="false" />

        
    <!-- Scripts -->


    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="{{ asset('admin_assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('admin_assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('admin_assets') }}/js/bootstrap.min.js"></script>


    @livewireScripts
    @livewireChartsScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"
        integrity="sha512-2RLMQRNr+D47nbLnsbEqtEmgKy67OSCpWJjJM394czt99xj3jJJJBQ43K7lJpfYAYtvekeyzqfZTx2mqoDh7vg=="
        crossorigin="anonymous" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <style>
        td,
        tr,
        th {
            white-space: normal;
        }

    </style>
</head>

<body>
    <div id="app">
        <div class="wrapper">

            <x-admin.sidebar />

            <x-admin.header />



            <div class="page-wrapper">
                <!--page-content-wrapper-->
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <section class="section">
                            <x-jet-banner />

                      
                                <!-- Page Heading -->
                                @if (isset($header))
                                    <header class="bg-white shadow">
                                        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                                            {{ $header }}
                                        </div>
                                    </header>
                                @endif

                                <!-- Page Content -->
                                <main>
                              

                                    @yield('content')
                                    {{ $slot ?? '' }}
                                </main>
                            </div>
                            <livewire:offline />
                        </section>
                      

                    </div>
                </div>
            </div>

            <div class="overlay toggle-btn-mobile"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                    class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
            <!--footer -->
            <div class="footer">
                <p class="mb-0">rusukh @2021 | Developed By : <a href="https://rusukh.com"
                        target="_blank">rusukh</a>
                </p>
            </div>
        </div>
    </div>
    {{-- <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="custom-control custom-radio">
                    <input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="darkmode">Dark Mode</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
                    <label class="custom-control-label" for="lightmode">Light Mode</label>
                </div>
            </div>
            <hr />
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="DarkSidebar">
                <label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
            </div>
            <hr />
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="ColorLessIcons">
                <label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
            </div>
        </div>
    </div> --}}
    {{-- @stack('modals') --}}

    {{-- <script src="{{ asset('admin_assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('admin_assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('admin_assets') }}/js/bootstrap.min.js"></script> --}}
    <!--plugins-->

    <script src="{{ asset('admin_assets') }}/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ asset('admin_assets') }}/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="{{ asset('admin_assets') }}/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    {{-- <script src="{{ asset('admin_assets') }}/js/index.js"></script> --}}
    <!-- App JS -->
    <script src="{{ asset('admin_assets') }}/js/app.js"></script>
    <script>
        // new PerfectScrollbar('.dashboard-social-list');
        // new PerfectScrollbar('.dashboard-top-countries');
    </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script> --}}


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


    <!-- JS Libraies -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"
        integrity="sha512-3PRVLmoBYuBDbCEojg5qdmd9UhkPiyoczSFYjnLhFb2KAFsWWEMlAPt0olX1Nv7zGhDfhGEVkXsu51a55nlYmw=="
        crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
        integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"
        integrity="sha512-+cXPhsJzyjNGFm5zE+KPEX4Vr/1AbqCUuzAS8Cy5AfLEWm9+UI9OySleqLiSQOQ5Oa2UrzaeAOijhvV/M4apyQ=="
        crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/chocolat/0.4.8/js/jquery.chocolat.min.js"></script> --}}

    <!-- Page Specific JS File -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>


    <!-- Template JS File -->
    {{-- <script src="{{ asset('admin_assets/js/scripts.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin_assets/js/custom.js') }}"></script> --}}


    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"
        integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g=="
        crossorigin="anonymous"></script>


    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>




    <script>
        const observer = lozad();
        observer.observe();
    </script>


    @yield('scripts')
    @stack('scripts')
    <script>
        window.livewire.on('closeModalAdd', event => {
            $('#modalAdd').modal('hide');
            $('#exampleModal').modal('hide');
            $('#promoteModal').modal('hide');
            $('#forcedelete').modal('hide');
        })
    </script>

    {{-- <script src="{{ asset('admin_assets/js/page/index.js') }}"></script> --}}

<div style="display:none;">
	<a href="https://www.chatinzone.com/">gates of olympus</a>
	<a href="https://www.388macan.com/">slot scatter hitam</a>
	<a href="https://jakartaphotoclub.net/">starlight princess</a>
	<a href="https://reservationsdeltaairlines.org/">jkltoto login</a>
	<a href="https://www.albertbray.com/">slot server thailand</a>
	<a href="https://www.acinorge.com/">slot88</a>
   	<a href="https://lenremont.moscow/">akun pro hongkong</a>
  	<a href="https://www.lenzapchasti.ru/">akun pro vietnam</a>
	<a href="https://revesurbains.fr/">scatter slot</a>
	<a href="https://www.caffini.com/">mesin slot</a>
</div>
</body>

</html>
