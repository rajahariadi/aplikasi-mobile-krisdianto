<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">

            <!-- BEGIN LOGO -->
            <a href="index.html">
                <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt=""
                    data-src="{{ asset('assets/img/logo.png') }}" data-src-retina="{{ asset('assets/img/logo2x.png') }}"
                    width="106" height="21" />
            </a>
            <!-- END LOGO -->
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="#" class="" id="layout-condensed-toggle">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right">
                <div class="chat-toggler sm">
                    <div class="profile-pic">
                        <img src="{{ asset('assets/img/profiles/avatar_small.jpg') }}" alt=""
                            data-src="{{ asset('assets/img/profiles/avatar_small.jpg') }}"
                            data-src-retina="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}" width="35"
                            height="35" />
                        <div class="availability-bubble online"></div>
                    </div>
                </div>
                <ul class="nav quick-section ">
                    <li class="quicklinks">
                        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                            <i class="material-icons">tune</i>
                        </a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                            <li>
                                <form action="{{ route('logout') }}" method="post">@csrf
                                    <button class="btn btn-danger btn-block" type="submit"> &nbsp;&nbsp;Log
                                        Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
