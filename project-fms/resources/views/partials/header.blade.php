<!-- header.blade.php -->

<header class="main-header">
    <a href="" class="logo">
        <span class="logo-mini"><b>C</b>MS</span>
        <span class="logo-lg"><b>System</b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('img/user8-128x128.jpg')}}" class="user-image" alt="User Image" />
                        @guest
                            <span class="hidden-xs"> Guest </span>
                        @else
                            <span class="hidden-xs"> {{ Auth::user()->name }} </span>
                        @endguest
                    </a>

                    <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{asset('img/user8-128x128.jpg')}}" class="img-circle" alt="User Image" />
                        <p>
                            {{ Auth::user()->name }} 
                        </p>
                    </li>
                    <li class="user-footer">
                        <div class="pull-right">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>