<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presence App</title>
    <!-- ===== CSS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
    <body id="body-pd">

        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <center>
                <h1 style="color: white">
                    Presence App
                </h1>
            </center>
            <div class="header__img">
                <img src="{{asset('images/icons/icon-128x128.png')}}" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <img src="{{asset('images/icons/icon-128x128.png')}}" alt="" style="max-width: 050px;"> <br> <br>
                    {{-- <span class="nav__logo-name" style="color: white">{{auth::user()->name}}</span> --}}
                    <a href="#" class="nav__logo" >
                        {{-- <i class='bx bx-layer nav__logo-icon'></i> --}}

                    </a>

                    <div class="nav__list">

                        <a href="{{Route('dashboard')}}" class="nav__link active">
                            <i class='bx bx-grid-alt nav__icon' >

                            </i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="{{Route('studentlist')}}" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">students</span>
                        </a>
                        <a href="{{Route('lessonShow')}}" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">course</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">preparation</span>
                        </a>

                        <a href="{{Route('upcomingLesson')}}" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">Up comming</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                            <span class="nav__name">Analytics</span>
                        </a>
                    </div>
                </div>

                <a href="#">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="color: white">
                            <i class='bx bx-log-out nav__icon' ></i>
                            Out
                            {{-- {{ __('Log Out') }} --}}
                        </x-dropdown-link>
                    </form>
                    {{-- <span class="nav__name">Log Out</span> --}}
                </a>
            </nav>
        </div>

        {{-- <h1>Components</h1> <br> --}}
        @if(session()->has('message'))
            <div class="alert alert-success paddtop30">
                <center>
                    <h1>
                        {{ session()->get('message') }}
                    </h1>
                </center>
            </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger paddtop30">
            <center>
                <h1>
                    {{ session()->get('error') }}
                </h1>
            </center>
        </div>
    @endif
        @yield('content')

            <!--===== MAIN JS =====-->
            {{-- <div class="btn-group dropup floating-action-button">
                <button type="button" class="btn btn-info btn-fab btn-raised dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">saver</i></button>
                <ul class="dropdown-menu dropdown-menu-right" style="min-width:0; background-color:transparent;">
                    <li><a href="#" class="btn btn-danger btn-fab btn-raised"><i class="material-icons">clear</i></a></li>
                </ul>
            </div> --}}
        <script src="{{asset('asset/js/main.js')}}"></script>
    </body>
</html>
