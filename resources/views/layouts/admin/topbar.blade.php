<div class='page-topbar '>
    <div class='logo-area'>

    </div>
    <div class='quick-area'>
        <div class='pull-left'>
            <ul class="info-menu left-links list-inline list-unstyled">
                <li class="sidebar-toggle-wrap">
                    <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>


                <li class="hidden-sm hidden-xs searchform">
                    <div class="input-group">
                                <span class="input-group-addon input-focus">
                                    <i class="fa fa-search"></i>
                                </span>
                        <form action="search-page.html" method="post">
                            <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                            <input type='submit' value="">
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class='pull-right'>
            <ul class="info-menu right-links list-inline list-unstyled">
                <li class="profile">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        {!! HTML::image('images/data/profile/profile.png', "Imagen no encontrada", array('id' => 'principito', 'title' => 'El principito', 'class' => 'img-circle img-inline')) !!}

                        <span>{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu profile animated fadeIn">
                        <li>
                            <a href="#settings">
                                <i class="fa fa-wrench"></i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="#profile">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#help">
                                <i class="fa fa-info"></i>
                                Help
                            </a>
                        </li>
                        <li class="last">
                            <a href="{{ url('/auth/logout') }}">
                                <i class="fa fa-lock"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

</div>