<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="/css/app.css" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header bg-custom">
                <h3 class="text-center">Menu</h3>
            </div>

            <ul class="components" id="menuItems">
                
            @foreach ($menuItems as $mi => $menuItem)

                <h6 class="text-center"><b>{{ $menuItems[$mi]->typeName }}</b></h6>

                @include('partials.sidebar-items')

            @endforeach

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">

                        <i class="fas fa-align-left"></i>

                        <span>Toggle Sidebar</span>

                    </button>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                        <i class="fas fa-align-justify"></i>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item"><a href="#" class="navlink">huh</a></li>
                            <li class="nav-item"><a href="#" class="navlink">huh</a></li>
                            <li class="nav-item"><a href="#" class="navlink">huh</a></li>
                            <li class="nav-item"><a href="#" class="navlink">huh</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid col-sm-12">

            @include('partials.jumbotron')

            <h3 class="text-center">Today's Specials</h3>

            <div class="row">

                @foreach ($featuredItems as $item)

                    @include('partials.featured-dish')

                @endforeach

            </div>

            @include('layouts.footer')

            </div>
        </div>
    </div>

    <script src='//maps.google.com/maps/api/js?key={{ env("GMAP_API_KEY") }}'></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vc.js') }}"></script>

</body>

</html>