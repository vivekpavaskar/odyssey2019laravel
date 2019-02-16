<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="/index.html">Dashboard</a>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="media align-items-center">
                        <div class="media-body ml-2 mr-5 d-none d-lg-block">
                            <i class="ni ni-settings-gear-65"></i>
                            <span>Settings</span>
                        </div>
                    </div>
                </a>
                @include('dashboard.subnav')
            </li>
        </ul>
    </div>
</nav>
