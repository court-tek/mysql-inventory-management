<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html"><img src="/images/icon/logo.png" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-bar-chart"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="active"><a href="index.html">Report</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-package"></i><span>Products
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('product.all') }}">All Products</a></li>
                            <li><a href="{{ route('product.create') }}">Add New Product</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-shield"></i><span>Brands
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('product.all') }}">All Brands</a></li>
                            <li><a href="{{ route('product.create') }}">Add New Brand</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-credit-card"></i><span>Orders
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('product.all') }}">All Orders</a></li>
                            <li><a href="{{ route('product.create') }}">Add New Orders</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
