<aside class="main-sidebar elevation-4 sidebar-light-primary" style="height: 100%">
    <a href="{{URL::to('/')}}" class="brand-link text-center h2 navbar-info">
        <span class="brand-text font-weight-light text-light">VCH</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('img/user.png')}}" class="img" alt="User Image">
            </div>
            <div class="info">
                <h5 href="#" class="d-block text-dark">{{ ucfirst(Session::get('member_name'))}}</h5>
                <!-- <h6 href="#" class="d-block text-dark">{{ ucfirst(Session::get('office_name'))}}</h6> -->
            </div>
        </div><!-- USER PANEL -->

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

              <li class="nav-item" style="cursor: pointer;">
                  <a href="{{URL('stud_reg')}}" class="nav-link">
                      <i class="nav-icon fas fa-user-edit"></i>
                      <p>
                          Registration
                      </p>
                  </a>
              </li>

              <li class="nav-item" style="cursor: pointer;">
                <a href="{{URL('/member/member_subscription')}}" class="nav-link">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                          Subscription
                      </p>
                  </a>
              </li>

              <li class="nav-item" style="cursor: pointer;">
                <a href="{{URL('/member/photo_sign_updation')}}" class="nav-link">
                      <i class="nav-icon fas fa-file-signature"></i>
                      <p>
                          Photo Updation
                      </p>
                  </a>
              </li>

              <li class="nav-item" style="cursor: pointer;">
                <a href="{{URL('/member/change_details')}}" class="nav-link">
                      <i class="nav-icon fa fa-edit"></i>
                      <p>
                          Change Details
                      </p>
                  </a>
              </li>

              <li class="nav-item" style="cursor: pointer;">
                  <a href="{{URL('/member/schemes')}}" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                          Schemes
                      </p>
                  </a>
              </li>

              <li class="nav-item" style="cursor: pointer;">
                  <a href="{{URL('/livecert_upload')}}" class="nav-link">
                      <i class="nav-icon fas fa-file"></i>
                      <p>
                          Live Certificate Upload
                      </p>
                  </a>
              </li>

              <li class="nav-item" style="cursor: pointer;">
                  <a href="{{URL('/member/member_status')}}" class="nav-link">
                      <i class="nav-icon fa fa-check-circle"></i>
                      <p>
                          Application Status
                      </p>
                  </a>
              </li>
              <!-- <i class="fa-solid fa-clipboard-list"></i> -->

              <li class="nav-item" style="cursor: pointer;">
                  <a href="{{URL('/member/member_scheme')}}" class="nav-link">
                      <i class="nav-icon fas fa-clipboard-check"></i>
                      <p>
                          Scheme Status
                      </p>
                  </a>
              </li>

          </ul>
      </nav>
    </div>
</aside>
