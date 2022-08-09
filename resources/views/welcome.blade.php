<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcom Page</title>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
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
            <img src="assets/img/perfil.jpg" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">Bedimcode</span>
                </a>

                <div class="nav__list">
                    <a href="#" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-user nav__icon' ></i>
                        <span class="nav__name">Users</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon' ></i>
                        <span class="nav__name">Messages</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-bookmark nav__icon' ></i>
                        <span class="nav__name">Favorites</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-folder nav__icon' ></i>
                        <span class="nav__name">Data</span>
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

    <h1>Components</h1>
    <a href="login">login</a> <br>
    <a href="register">register</a>
    <!--===== MAIN JS =====-->
    <script src="{{asset('asset/js/main.js')}}"></script>
</body>
</html>




{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->

            <title>Sidebar menu responsive</title>
        </head>
        <body id="body-pd">


        </body>
        </html> --}}


        {{-- S2P8ER54EH
        sergericAPA12
, --}}
