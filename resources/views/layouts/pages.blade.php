<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <div class="navbar navbar-default">
            <a class="navbar-brand" href="/">Betson.pl</a>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li class="dropdown">
                                <a href="#"
                                   class="dropdown-toggle"
                                   data-toggle="dropdown"
                                   role="button"
                                   aria-haspopup="true"
                                   aria-expanded="false">{{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>
                                {{--<span>Hello,</span><a href="/users/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a>--}}
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/dashboard"><strong>Dashboard</strong></a>
                                    </li>
                                    <li><a href="/dashboard/profile">Your Profile</a></li>
                                    <li><a href="/dashboard/predictions">Your Predictions</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/dashboard/predictions/create">Create Prediction</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/logout">Logout</a></li>
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="#"
                                   class="dropdown-toggle"
                                   data-toggle="dropdown"
                                   role="button"
                                   aria-haspopup="true"
                                   aria-expanded="false">Login or Register
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('register') }}">Register</a>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
        @yield('content')
    </div>

<!-- Scripts -->

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
