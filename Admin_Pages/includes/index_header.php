<!-- Header -->
<!-- In the PHP version you can set the following options from inc/config file -->
<!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->



<header class="navbar navbar-default">
    <!-- Left Header Navigation -->
    <ul class="nav navbar-nav-custom">
        <!-- Main Sidebar Toggle Button -->
        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                <i class="fa fa-bars fa-fw"></i>
            </a>
        </li>
        <!-- END Main Sidebar Toggle Button -->
    </ul>
    <!-- END Left Header Navigation -->

    <!-- Search Form -->
    <form action="#" method="" class="navbar-form-custom">
        <div class="form-group">
            <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
        </div>
    </form>
    <!-- END Search Form -->

    <!-- Right Header Navigation -->
    <ul class="nav navbar-nav-custom pull-right">
        <!-- Alternative Sidebar Toggle Button -->
        <li>
            <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                <i class="gi gi-share_alt"></i>
                <span class="label label-primary label-indicator animation-floating">4</span>
            </a>
        </li>
        <!-- END Alternative Sidebar Toggle Button -->

        <!-- User Dropdown -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                <img style="width: 40px; height: 40px" src="img/Personal_Photos/<?= $_SESSION['A_Photo'] ?>" alt="avatar"> <i
                    class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                <li class="dropdown-header text-center">Account</li>
                <li>
                    <a href="page_ready_timeline.php">
                        <i class="fa fa-clock-o fa-fw pull-right"></i>
                        <span class="badge pull-right">10</span>
                        Updates
                    </a>
                    <a href="page_ready_inbox.php">
                        <i class="fa fa-envelope-o fa-fw pull-right"></i>
                        <span class="badge pull-right">5</span>
                        Messages
                    </a>

                    <a href="page_ready_faq.php"><i class="fa fa-question fa-fw pull-right"></i>
                        <span class="badge pull-right">11</span>
                        FAQ
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="page_ready_user_profile.php">
                        <i class="fa fa-user fa-fw pull-right"></i>
                        Profile
                    </a>
                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                    <a href="#modal-user-settings" data-toggle="modal">
                        <i class="fa fa-cog fa-fw pull-right"></i>
                        Settings
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                    <a href="logout.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                </li>

            </ul>
        </li>
        <!-- END User Dropdown -->
    </ul>
    <!-- END Right Header Navigation -->
</header>