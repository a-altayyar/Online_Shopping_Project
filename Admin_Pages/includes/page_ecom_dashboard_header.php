<div class="content-header">
    <ul class="nav-horizontal text-center">
        <li <?= ($act == "dashboard") ? "class=' active'" : "" ?>>
            <a href="page_ecom_dashboard.php"><i class="fa fa-bar-chart"></i> Dashboard</a>
        </li>
        <li <?= ($act == "Orders") ? "class=' active'" : "" ?>>
            <a href="page_ecom_orders.php"><i class="gi gi-shop_window"></i> Orders</a>
        </li>
        <li <?= ($act == "Order_View") ? "class=' active'" : "" ?>>
            <a href="page_ecom_order_view.php"><i class="gi gi-shopping_cart"></i> Order View</a>
        </li>
        <li <?= ($act == "Product") ? "class=' active'" : "" ?>>
            <a href="page_ecom_products.php"><i class="gi gi-shopping_bag"></i> Products</a>
        </li>
        <li <?= ($act == "Product_Add") ? "class=' active'" : "" ?>>
            <a href="page_ecom_product_add.php"><i class="gi gi-inbox_plus"></i> Product Add</a>
        </li>
        <li <?= ($act == "Categories_Add") ? "class=' active'" : "" ?>>
            <a href="page_ecom_Categories_add.php"><i class="gi gi-server_plus"></i> Categories Operations</a>
        </li>
        <li <?= ($act == "Customer") ? "class=' active'" : "" ?>>
            <a href="page_ecom_customer_view.php"><i class="gi gi-user"></i> Customer View</a>
        </li>
    </ul>
</div>