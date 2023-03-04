<div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
                <em class="icon ni ni-arrow-left"></em>
            </a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu">
                <em class="icon ni ni-menu"></em>
            </a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Feature</h6>
                    </li>
                    <div class="nk-menu-item list-menu
                            {{ App\Helpers\MenuHelper::checkActive('feature/keluarga') }}
                            {{ App\Helpers\MenuHelper::checkActive('feature/keluarga/*') }}
                        ">
                        <a href="{{ url('feature/keluarga') }}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-users-fill"></em>
                            </span>
                            <span class="nk-menu-text letter-space-1 ff-mono">Keluarga</span>
                        </a>
                    </div>

                    <div class="nk-menu-item list-menu
                            {{ App\Helpers\MenuHelper::checkActive('feature/tree') }}
                            {{ App\Helpers\MenuHelper::checkActive('feature/tree/*') }}
                        ">
                        <a href="{{ url('feature/tree') }}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-git"></em>
                            </span>
                            <span class="nk-menu-text letter-space-1 ff-mono">Visual Tree</span>
                        </a>
                    </div>

                    <div class="nk-menu-item list-menu
                            {{ App\Helpers\MenuHelper::checkActive('feature/api-docs') }}
                            {{ App\Helpers\MenuHelper::checkActive('feature/api-docs/*') }}
                        ">
                        <a href="{{ url('feature/api-docs') }}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-file-text-fill"></em>
                            </span>
                            <span class="nk-menu-text letter-space-1 ff-mono">Api Docs</span>
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
