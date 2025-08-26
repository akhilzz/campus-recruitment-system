<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="{{url('member/member_home')}}" class="navbar-brand">
            <span class="brand-text font-weight-light"></span>
        </a>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class="nav-item">
              <a class="nav-link"  href="{{url('/member/member_home')}}">
                <i class="fa fa-home" aria-hidden="true"></i>Home
              </a>
          </li>
            <li class="nav-item">
                <a class="nav-link text-danger" data-widget="control-sidebar" data-slide="true" role="button"
                    onclick="memberLogout()">
                    Logout
                    <i class="fa fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
