<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-text mx-3">{{ __('Homepage') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseTwo">
            <span>{{ __('Product Management') }}</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item active" href="product"> <i class="fa fa-briefcase mr-2"></i> {{ __('Products') }}</a>
                <a class="collapse-item active" href="category"> <i class="fa fa-briefcase mr-2"></i> {{ __('Categories') }}</a>
                <a class="collapse-item active" href="tags"> <i class="fa fa-briefcase mr-2"></i> {{ __('Tags') }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="" data-toggle="collapse" data-target="#collapseOrder" aria-expanded="true" aria-controls="collapseTwo">
            <span>{{ __('Order Management') }}</span>
        </a>
        <div id="collapseOrder" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item active" href="order"> <i class="fa fa-briefcase mr-2"></i> {{ __('Orders') }}</a>
                <a class="collapse-item active" href="#"> <i class="fa fa-briefcase mr-2"></i> {{ __('Shipments') }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseReports" aria-expanded="true" aria-controls="collapseTwo">
            <span>{{ __('Report Management') }}</span>
        </a>
        <div id="collapseReports" class="collapse active" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item " href="#"> <i class="fa fa-briefcase mr-2"></i> {{ __('Transaksi Stok') }}</a>
            </div>
        </div>
    </li>


</ul>
