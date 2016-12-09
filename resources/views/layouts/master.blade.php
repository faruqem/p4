<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            {{-- Yield the title if it exists, otherwise default to 'Tessitura Report Catalog' --}}
            @yield('title','Tessitura Report Catalog')
        </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <!--<link href="css/app.css" rel="stylesheet">-->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/journal/bootstrap.min.css" rel="stylesheet">
        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet">
        <!--<link href="css/style.css" rel="stylesheet">-->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
        @yield('head')
    </head>
    <body>
        @if(Session::get('flash_message') != null)
            <div class='flash_message'>{{ Session::get('flash_message') }}</div>
        @endif
        <!-- Fixed navbar -->
        <header>
            <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/">Tessitura Report Catalog</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav"><!--left side of nav bar-->
                    <li class="active"><a href="/">Home</a></li>
                    @if (Auth::user())
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/reports">View All Reports</a></li>
                        <li><a href="/reports-fav">My Favorite Reports</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header"></li>
                        <li><a href="#">My Comments</a></li>
                        <li><a href="#">My Ratings</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Glossaries<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/glossaries">View All</a></li>
                        <li><a href="/glossaries/create">Create New</a></li>
                       </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Developers<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">View All Reports</a></li>
                        <li><a href="#">Create New Report</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header"></li>
                        <li><a href="#">My Revisions</a></li>
                      </ul>
                    </li>
                    @endif
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <!--End Left Side of nav bar-->

                <!-- Start Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Logged in as {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <!-- End Right Side Of Navbar -->

                </div><!--/.nav-collapse -->
              </div>
            </nav>
        </header>

        <!-- Begin page content -->
        <section>
            {{-- Main page content will be yielded here --}}
            @yield('content')
        </section>

        <footer class="footer">
          <div class="container">
            <p class="footer-text">&copy;Mo Faruqe 2016</p>
          </div>
        </footer>

        <!-- jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="{{ URL::asset('js/app.js') }}"></script>
        <script src="{{ URL::asset('js/utility.js') }}"></script>
        <script src="{{ URL::asset('js/dev_tools.js') }}"></script>
        <!--<script src="js/app.js"></script>
        <script src="js/utility.js"></script>
        <script src="js/dev_tools.js"></script>-->
        {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
        @yield('body')
    </body>
</html>
