<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        @php
            $PermissionUser = App\Models\PermissionRoleModel::getPermission('User', Auth::user()->role_id);
            $PermissionRole = App\Models\PermissionRoleModel::getPermission('Role', Auth::user()->role_id);
            $PermissionCategory = App\Models\PermissionRoleModel::getPermission('Category', Auth::user()->role_id);
            $PermissionSubCategory = App\Models\PermissionRoleModel::getPermission('Sub Category',Auth::user()->role_id);
            $PermissionProduct = App\Models\PermissionRoleModel::getPermission('Product', Auth::user()->role_id);
            $PermissionSetting = App\Models\PermissionRoleModel::getPermission('Setting', Auth::user()->role_id);
        @endphp

        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) != 'dashboard') collapsed @endif" href="{{ url('panel/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if (!empty($PermissionUser))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'user') collapsed @endif" href="{{ url('panel/user') }}">
                    <i class="bi bi-person"></i>
                    <span>Users</span>
                </a>
            </li>
        @endif
        @if (!empty($PermissionRole))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'role') collapsed @endif" href="{{ url('panel/role') }}">
                    <i class="bi bi-list-task"></i>
                    <span>Roles</span>
                </a>
            </li>
        @endif
        @if (!empty($PermissionCategory))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(3) != 'store_1') collapsed @endif" href="{{ url('panel/stores/store_1') }}">
                    <i class="bi bi-shop"></i>
                    <span>Store 1</span>
                </a>
            </li>
        @endif
        @if (!empty($PermissionSubCategory))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(3) != 'store_2') collapsed @endif"
                    href="{{ url('panel/stores/store_2') }}">
                    <i class="bi bi-shop"></i>
                    <span>Store 2</span>
                </a>
            </li>
        @endif
        @if (!empty($PermissionProduct))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(3) != 'store_3') collapsed @endif"
                    href="{{ url('panel/stores/store_3') }}">
                    <i class="bi bi-shop"></i>
                    <span>Store 3</span>
                </a>
            </li>
        @endif
        @if (!empty($PermissionSetting))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(3) != 'store_4') collapsed @endif"
                    href="{{ url('panel/stores/store_4') }}">
                    <i class="bi bi-shop"></i>
                    <span>Store 4</span>
                </a>
            </li>
        @endif
       
    </ul>
</aside>