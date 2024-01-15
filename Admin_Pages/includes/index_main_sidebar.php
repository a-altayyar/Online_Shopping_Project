<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Brand -->
            <a href="index.php" class="sidebar-brand">
                <img style="width:87px" src="./img/logo/Logo_Egoo.png" alt="">
            </a>
            <!-- END Brand -->

            <!-- User Info -->
            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                <div class="sidebar-user-avatar">
                    <a href="page_ready_user_profile.php">
                        <img style="width: 65px; height: 65px" src="img/Personal_Photos/<?= $_SESSION['A_Photo'] ?>" alt="avatar">
                    </a>
                </div>
                <div class="sidebar-user-name">
                    <?= $_SESSION['A_FName'] ?>
                </div>
                <div class="sidebar-user-links">
                    <a href="page_ready_user_profile.php" data-toggle="tooltip" data-placement="bottom"
                        title="Profile"><i class="gi gi-user"></i></a>
                    <a href="page_ready_inbox.php" data-toggle="tooltip" data-placement="bottom" title="Messages"><i
                            class="gi gi-envelope"></i></a>
                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings"
                        onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                    <a href="logout.php" data-toggle="tooltip" data-placement="bottom" title="Logout"><i
                            class="gi gi-exit"></i></a>
                </div>
            </div>
            <!-- END User Info -->


            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="index.php" <?= ($active == "index") ? "class=' active'" : "" ?>><i
                            class="gi gi-stopwatch sidebar-nav-icon"></i><span
                            class="sidebar-nav-mini-hide">Dashboard</span></a>
                </li>

                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix"><a href="#" data-toggle="tooltip"><i
                                class="gi gi-shopping_cart"></i></a></span>
                    <span class="sidebar-header-title">eCommerce</span>
                </li>
                <li>
                    <a href="page_ecom_dashboard.php" <?= ($active == "dashboard") ? "class=' active'" : "" ?>><span
                            class="sidebar-nav-mini-hide">Dashboard </span></a>
                </li>
                <li>
                    <a href="page_ecom_orders.php" <?= ($active == "Orders") ? "class=' active'" : "" ?>>Orders</a>
                </li>
                <li>
                    <a href="page_ecom_order_view.php" <?= ($active == "order_view") ? "class=' active'" : "" ?>>Order
                        View</a>
                </li>
                <li>
                    <a href="page_ecom_products.php" <?= ($active == "products") ? "class=' active'" : "" ?>>Products</a>
                </li>
                <li>
                    <a href="page_ecom_product_add.php" <?= ($active == "product_add") ? "class=' active'" : "" ?>>Product
                        Add</a>
                </li>
                <li>
                    <a href="page_ecom_Categories_add.php" <?= ($active == "Categories_add") ? "class=' active'" : "" ?>>Categories View and Add</a>
                </li>
                <li>
                    <a href="page_ecom_customer_view.php" <?= ($active == "customer_view") ? "class=' active'" : "" ?>>Customer View</a>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix"><a href="#" data-toggle="tooltip"
                            title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                    <span class="sidebar-header-title">Develop Kit</span>
                </li>
                <li>
                    <a href="page_ready_user_profile.php" <?= ($active == "user_profile") ? "class=' active'" : "" ?>>User
                        Profile</a>
                </li>
                <li>
                    <a href="page_ready_timeline.php" <?= ($active == "timeline") ? "class=' active'" : "" ?>>Timeline</a>
                </li>
                <li>
                    <a href="page_ready_faq.php" <?= ($active == "faq") ? "class=' active'" : "" ?>>FAQ</a>
                </li>
                <li>
                    <a href="page_ready_inbox.php" <?= ($active == "inbox") ? "class=' active'" : "" ?>>Inbox</a>
                </li>

                <?php
                if ($_SESSION['A_Type'] == "SY"):
                    ?>
                    <li class="sidebar-header">
                        <span class="sidebar-header-options clearfix"><a href="#" data-toggle="tooltip"
                                title="Quick Settings"><i class="fa fa-briefcase"></i></a></span>
                        <span class="sidebar-header-title">System Administrator</span>
                    </li>
                    <li>
                        <a href="register.php" <?= ($active == "Register_New_Emp") ? "class=' active'" : "" ?>>Register New
                            Employee</a>
                    </li>
                    <li>
                        <a href="page_ecom_Admin_view.php" <?= ($active == "Emp_list") ? "class=' active'" : "" ?>>Employees
                            List</a>
                    </li>
                    <li>
                        <a href="#" <?= ($active == "") ? "class=' active'" : "" ?>>User
                            Profile</a>
                    </li>

                    <?php
                endif;
                ?>
            </ul>
            <!-- END Sidebar Navigation -->

        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>