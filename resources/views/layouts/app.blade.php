<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    
      $(document).ready
      (
        function()
        {
          $('.labelMenu').click
          (
            function()
            {
               $('.menu').css('left', 0);
               $('.opacMenu').fadeIn();
            }
          )
          
          $('.opacMenu').click
          (
            function()
            {
               $('.menu').css('left', '-205px');
               $('.opacMenu').fadeOut();
            }
          )
        }
      )
    </script>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link  rel="icon"   href="http://localhost/barespel/resources/views/img/icono2.png" type="image/png" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <header>
         <label class="labelMenu"><i class="fa fa-bars"></i></label>      
      </header>
    
    <div class="menu">
      <h1><i class="fa fa-address-card"></i></h1>
      <nav>
        <ul>
          <a href="{{route('campuses.index')}}">
            <li class="icone1"><i class="fa fa-university" aria-hidden="true"></i></li>
            <li>Campus</li>
          </a>
          
          <a href="{{route('bars.index')}}">
            <li class="icone2"><i class="fa fa-beer" aria-hidden="true"></i></li>
            <li>Bar</li>
          </a>
          
          <a href="{{route('menus.index')}}">
            <li class="icone3"><i class="fas fa-utensils"></i></li>
            <li>Menu</li>
          </a>
          
          <a href="{{route('snacks.index')}}">
            <li class="icone4"><i class="fas fa-cookie"></i></li>
            <li>Snack</li>
          </a>
          

        
          <a href="{{route('buzons.index')}}">
            <li class="icone5"><i class="fas fa-envelope"></i></li>
            <li>Buzon</li>
          </a>
          
          <a href="{{route('preferencias.index')}}">
            <li class="icone6"><i class="far fa-lightbulb"></i></li>
            <li>Preferencias</li>
          </a>
       
        </ul>
      </nav>
    </div>
    <div class="opacMenu"></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<style>

*
{
  margin: 0; 
  padding: 0; 
  box-sizing: border-box; 
  font-family: 'Poppins', sans-serif; 
  /* Google Fonts: https://fonts.google.com/?selection.family=Poppins*/
  list-style: none;
}

a { text-decoration: none; }

header 
{
   padding: 15px; 
}

header .labelMenu 
{ 
  color: gray; 
  tansition: all 0.2s; 
  width: 0px; 
  height: 0px; 
  display: inline-block;
  text-align: center;
  line-height: 40px;
  border-radius: 100px;
}

header .labelMenu:hover { background-color: #0099ff; cursor: pointer;  }

/* NAVGATION: */

.menu 
{
  position: fixed;
  top: 0; left: -205px; bottom: 0;
  min-width: 200px; max-width: 200px;
  min-height: 100vh; max-height: 100vh;
  background-color: #FAFAFA;
  box-shadow: 0 0 16px rgba(0, 0, 0, .28);
  transition: all 0.2s;
  z-index: 50;
}

.menu h1 
{
  background-color: #313a45;
  text-align: center;
  color: #DDD; 
  padding: 10px;
}

.menu ul a { display: flex; padding: 10px;  color: #444; transition: all 0.2s; }

.menu a:hover { background-color: #DDD; }

.menu ul:first-child { border-bottom: 1px solid #DDD; }
/* A primeira <ul> do menu (primeiro filho (first-child)) */

.menu ul a li:first-child { margin-right: 10px; }

/* A primeira <li> de cada <ul> do menu (primeiro filho (first-child)) (Icones) */

/* Cores Icones */

.menu ul a .icone2 { color: #ff9933; }
.menu ul a .icone3 { color: #6666cc; }
.menu ul a .icone4 { color: #663300; }

.menu ul:last-child a:hover li:first-child { color: #222; }

/* Na ultima <ul>, quando o mouse passas sobre os links de cada uma, a primeira <li> muda a cor para um cinza mais escuro */


/* Opacidade quando o menu é aberto */

.opacMenu
{
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100vh;
  background-color: rgba(0, 0, 0, 0.5);
  display: none;
  z-index: 40; 
}


p 
{
  text-align: center; padding: 40px; color: #DDD; font-size: 50px; text-shadow: 1px 1px 1px #222;
}


</style>
