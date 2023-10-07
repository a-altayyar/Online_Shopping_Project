<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Brand -->
            <a href="index.php" class="sidebar-brand">
                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>Pro</strong>UI</span>
            </a>
            <!-- END Brand -->

            <!-- User Info -->
            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                <div class="sidebar-user-avatar">
                    <a href="page_ready_user_profile.php">
                        <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar">
                    </a>
                </div>
                <div class="sidebar-user-name">John Doe</div>
                <div class="sidebar-user-links">
                    <a href="page_ready_user_profile.php" data-toggle="tooltip" data-placement="bottom"
                        title="Profile"><i class="gi gi-user"></i></a>
                    <a href="page_ready_inbox.php" data-toggle="tooltip" data-placement="bottom" title="Messages"><i
                            class="gi gi-envelope"></i></a>
                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings"
                        onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                    <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i
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
                    <a href="page_ecom_product_edit.php" <?= ($active == "product_edit") ? "class=' active'" : "" ?>>Product Edit</a>
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
                    <a href="page_ready_user_profile.php" <?= ($active == "user_profile") ? "class=' active'" : "" ?>>User Profile</a>
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
            </ul>
            <!-- END Sidebar Navigation -->

        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>