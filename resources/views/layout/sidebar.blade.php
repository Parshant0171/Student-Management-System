<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{url('studentregisterform')}}"><i class="fa fa-home"></i> Student Registration </a>
                    
                  </li>
                  <li><a href="{{url('studentdetails')}}"><i class="fa fa-edit"></i> Student Details </a>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i> Course <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('addcourse')}}">Add course</a></li>
                      <li><a href="{{url('courseshow')}}">View courses</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Branch <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('addbranch')}}">Add Branch</a></li>
                      <li><a href="{{url('branchshow')}}">View Branches</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>

            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{!! asset('storage/app/images/img.jpg') !!}" alt="">Parshant Yadav
                    <span class=" fa fa-angle-down"></span>
                  </a>
                </li>

              </ul>
            </nav>
          </div>

        </div>