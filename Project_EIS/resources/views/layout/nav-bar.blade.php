
<nav role="navigation" class="nav-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav header-ul">
                    <li><a href="/">Home</a></li>
                    <li><a href="/meet-eis">Meet EIS</a></li>
                    <li><a href="/our-program">Our Program</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                    <li><a href="/ask-our-alumni">Ask Our Alumni</a></li>
                    @if(!is_null($auth = \Illuminate\Support\Facades\Auth::user()))
                        @if($auth->user_type == 'App\Admin')
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">{{ $auth->fname.' '.$auth->lname }} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ action('DashboardController@home') }}"><i class="fa fa-home">&nbsp;</i>Dashboard</a></li>
                                    <li><a href="{{ action('Auth\AuthController@logout') }}"><i class="fa fa-sign-out">&nbsp;</i>Logout</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">{{ $auth->fname.' '.$auth->lname }} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ action('DashboardUserController@home') }}"><i class="fa fa-home">&nbsp;</i>Dashboard</a></li>
                                    <li><a href="{{ action('Auth\AuthController@logout') }}"><i class="fa fa-sign-out">&nbsp;</i>Logout</a></li>
                                </ul>
                            </li>
                        @endif

                    @else
                        <li><a href="/login"><i class="fa fa-sign-in">&nbsp;</i>Login/Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>