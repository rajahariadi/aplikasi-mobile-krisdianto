<div class="page-sidebar " id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
        <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
                <img src="{{ asset('assets/img/profiles/avatar.jpg') }}" alt=""
                    data-src="{{ asset('assets/img/profiles/avatar.jpg') }}"
                    data-src-retina="{{ asset('assets/img/profiles/avatar2x.jpg') }}" width="69" height="69" />
                <div class="availability-bubble online"></div>
            </div>
            <div class="user-info sm">
                <div class="username">{{ Auth::user()->fullname }}</div>
                <div class="status">{{ Auth::user()->role }}</div>
            </div>
        </div>
        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU -->
        <br>
        <ul>
            <li class="start">
                <a href="{{ route('dashboard') }}"><i class="material-icons">home</i>
                    <span class="title">Dashboard</span></span>
                </a>
            </li>
        </ul>
        <p class="menu-title">Main <span class="pull-right"></span></p>
        <ul>
            <li>
                <a href="{{ route('mapel.index') }}"> <i class="material-icons">pages</i> <span
                        class="title">Mapel</span> </a>
            </li>
            <li>
                <a href="{{ route('kelas.index') }}"> <i class="material-icons">store</i> <span
                        class="title">Kelas</span> </a>
            </li>
            <li>
                <a href="{{ route('pengguna.index') }}"> <i class="material-icons">people</i> <span
                        class="title">Pengguna</span> </a>
            </li>
            <li>
                <a href="{{ route('materi.index') }}"> <i class="material-icons">books</i> <span
                        class="title">Materi</span> </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
