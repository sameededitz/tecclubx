<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="{{ asset('admin_assets/images/logo.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('admin_assets/images/logo-light.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('admin_assets/images/logo-icon.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li>
                <a href="{{ route('admin-home') }}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-menu-group-title">Application</li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="iconoir:post" class="menu-icon"></iconify-icon>
                    <span>Blog</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('all-blogs') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Blogs</a>
                    </li>
                    <li>
                        <a href="{{ route('all-categories') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Categories</a>
                    </li>
                    <li>
                        <a href="{{route('all-tags')}}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Tags</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('all-portfolio') }}">
                    <iconify-icon icon="eos-icons:project-outlined" class="menu-icon"></iconify-icon>
                    <span>Portfolio</span>
                </a>
            </li>
            <li>
                <a href="{{ route('inbox') }}">
                    <iconify-icon icon="mdi:email-outline" class="menu-icon"></iconify-icon>
                    <span>Email</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all-users') }}">
                    <iconify-icon icon="ri:user-line" class="menu-icon"></iconify-icon>
                    <span>Manage Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all-admins') }}">
                    <iconify-icon icon="ri:admin-line" class="menu-icon"></iconify-icon>
                    <span>Manage Admins</span>
                </a>
            </li>
            <li>
                <a href="{{ route('all-options') }}">
                    <iconify-icon icon="solar:settings-broken" class="menu-icon"></iconify-icon>
                    <span>Settings</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="carbon:service-id" class="menu-icon"></iconify-icon>
                    <span>Misc.</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('section-images') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Section Images</a>
                    </li>
                    <li>
                        <a href="{{ route('all-teams') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                            Team</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
