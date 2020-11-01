<header id="header" style="position: relative;z-index: 2">
    <!-- header top search -->
    <div class="header-top">
        <div class="container">
            <form action="">
                <div id="search">
                    <input type="text" placeholder="کلمه مورد نظر را نوشته و اینتر را بزنید..." name="s" id="m_search" style="display: inline-block;outline: none">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="header-contact">
                        <ul>
                            <li>
                                <div class="phone" style="direction: ltr;">
                                    <i class="fa fa-phone"></i>
                                    &nbsp; +98 920 &nbsp; 452 &nbsp; 0112
                                </div>
                            </li>
                            <li>
                                <div class="mail" style="direction: ltr">
                                    <i class="fa fa-envelope"></i>
                                    iam@domain.com
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    @auth
                        <div class="header-login">
                            <label class="login modal-form" style="border: none;">{{ Auth::user()->name }}</label>
                            <a class="login modal-form" style="border:none;font-weight: bolder" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('خروج') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endauth
                    @guest
                        <div class="header-login">
                            <a class="login modal-form" href="{{route('login')}}?intended=1">ورود / عضویت</a>
                        </div>
                    @endguest


                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header -->

