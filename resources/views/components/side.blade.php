<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">لوحة التحكم </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">

    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-users"></i>
        <span>المنتجات</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">المنتجات:</h6>
        <a class="collapse-item" href="{{route('productcat')}}">اقسام المنتجات</a>
        <a class="collapse-item" href="{{ route('product.index')}}">المنتجات</a>
        <a class="collapse-item" href="{{ route('Packages.index')}}">الزجاج</a>
        </div>
      </div>
    </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#expenses" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-money-bill-alt"></i>
                <span>المصروفات</span>
            </a>
            <div id="expenses" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">المصروفات:</h6>
                <a class="collapse-item" href="/Expenses">المصروفات اليومية</a>
                </div>
            </div>
        </li>

      
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-users "></i>
                <span>المستخدمين</span>
            </a>
            <div id="users" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">المستخدمين:</h6>
                <a class="collapse-item" href="{{ route('users.index')}}">قائمة المستخدمين</a>
                   

                </div>
            </div>
        </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">

    </div>

    <!-- Nav Item - ٍStudents Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Invoices" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-money-bill-alt"></i>
            <span>المبيعات</span>
        </a>
        <div id="Invoices" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">المبيعات:</h6>
            <a class="collapse-item" href="{{route('sales.invoices')}}">الفاتورة</a>
            <a class="collapse-item" href=" {{ route('sales.index') }}">منتجات الفاتورة</a>
            </div>
        </div>
    </li>
  


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
    <!-- End of Sidebar -->
