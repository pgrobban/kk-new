<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>:: Kodknackaren -- guider för webbprogrammering ::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" lang="sv" content="En sida för dig som vill lära dig programmering, skapa hemsidor eller spel.">
        <meta name="author" content="Robert Sebescen">
        <meta name="robots" content="index, follow">

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- icons -->
        <link rel="apple-touch-icon" href="{{ URL::asset('assets/img/apple-touch-icon.png') }}">
        <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
        
        <!-- js -->
        <script src="{{ URL::asset('assets/js/jquery-1.11.2.min.js') }}"></script>
        <script src="{{URL::asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

        <!--[if lt IE 9]>
                <script src="{{ URL::asset('assets/js/html5.js') }} "></script>
                <script src="{{ URL::asset('assets/js/respond.min.js') }}"></script>
        <![endif]-->
        
        @section("headextra")
        
        @show
    </head>
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top navbar-inverse" id="navbar-top" role="navigation">
            <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Visa/dölj meny</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to('/hem') }}"><img src="{{ URL::asset('assets/img/logo.png')}}" id="logo" alt="Logo"/></a>
                </div>
                <!-- /.navbar-header -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-top" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{URL::to('/kurs/1') }}">Kurs 1: Introduktion</a></li>
                        <li><a href="{{URL::to('/kurs/2') }}">Kurs 2: Programmering</a></li>
                        <li><a href="#">Kurs 3: Hemsidor</a></li>
                        <li><a href="#">Kurs 4: Servrar och databaser</a></li>
                    </ul>
                    <a href="#" class="pull-right contact">Om/Kontakt</a>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->

        <!-- Page Content -->

        <div class="container-fluid" id="main">
            @yield("headerextra")

            <div class="row">
                <div class="col-sm-8">
                    @yield("content")
                </div>

                <div class="col-sm-4">
                    @section("sidebar")
                    <!-- Search -->
                    <div class="well">
                        <h4 class="margin-t-0">Sök</h4>
                        <form action="#">
                            <div class="input-group">
                                <label class="sr-only" for="search-form">Sök på sidan</label>
                                <input type="text" class="form-control" id="search-form">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-search"></span>
                                        <span class="sr-only">Sök</span>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    @show
                </div>
            </div>

            <hr>
            <footer>
                <p>&copy; Robert Sebescen <?= date("Y"); ?></p>
            </footer>

        </div>
        
        <script type="text/javascript">
            @section("extrajavascript")
            @show
        </script>

    </body>
</html>

