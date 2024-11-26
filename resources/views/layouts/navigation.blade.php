<head>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Template main Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="navbar-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">

                            <ul class="list-unstyled list-inline header-contact">
                                <li> <i class="fa fa-envelope"></i> <a href="mailto:etibot2024@google.com">etibot2024@google.com</a> </li>
                            </ul> <!-- /.header-contact  -->

                        </div>

                        <div class="col-sm-6 col-xs-12 text-right">

                            <ul class="list-unstyled list-inline header-social">

                                <li> <a href="https://www.facebook.com/profile.php?id=61559674964164&locale=es_LA" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                                <li> <a href="https://www.facebook.com/profile.php?id=61559674964164&locale=es_LA" target="_blank"> <i class="fa fa-twitter"></i> </a> </li>
                            </ul> <!-- /.header-social  -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-main">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>

                        <a class="navbar-brand" href="{{ route('dashboard') }}">
                            <h4>ETIBOT</h4>
                        </a>

                    </div>
                    <div id="navbar" class="navbar-collapse collapse pull-right">
                        <ul class="nav navbar-nav">
                            <li><a class="is-active" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">{{ __('Home') }}</a></li>
                            @hasanyrole('Plan Premium|Administrador')
                            <li><a href="{{ route('posts.index') }}" :active="request()->routeIs('foro')">
                                    {{ __('Foros') }}
                                </a>
                            </li>
                            @endhasanyrole
                            @hasanyrole('Plan Premium|Administrador')
                            <li class="has-child">
                                <a href="{{ route('recursos') }}" :active="request()->routeIs('recursos')">{{ __('Recursos') }}</a>

                            </li>
                            @endhasanyrole
                            <li><a href="{{ route('nosotros') }}" :active="request()->routeIs('nosotros')">{{ __('Nosotros') }}</a></li>
                            <li><a href="#">{{ __('Contacto') }}</a></li>
                            <li>

                                <a href="#">

                                    <img src="{{ Auth::user()->avatar }}" alt="image" class="img-profile rounded-circle mr-1">

                                </a>
                                <ul class="submenu">
                                    <li class="submenu-item"><a href="{{ route('profile.edit') }}" :active="request()->routeIs('profile.edit')">{{ __('Configución') }}</a></li>
                                    <li class="submenu-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Salir Sesión') }}
                                            </a>
                                        </form>

                                    </li>
                                </ul>


                            </li>





                        </ul>

                    </div> <!-- /#navbar -->

                </div> <!-- /.container -->

            </div> <!-- /.navbar-main -->


        </nav>

    </header>


</nav>