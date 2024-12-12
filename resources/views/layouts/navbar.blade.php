<nav class="mt-2"> <!--begin::Sidebar Menu-->
    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item"> <a href="{{ route('dashboard.index') }}" class="nav-link {{ Route::is('dashboard.index') ? 'active' : '' }}"> <i class="nav-icon bi bi-house"></i>
            <p>
                Dashboard
            </p>
        </a>
        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-credit-card-2-front-fill"></i>
                <p>
                    Inovice
                    {{-- <i class="nav-arrow bi bi-chevron-right"></i> --}}
                </p>
            </a>
        </li>
        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
            <p>
                Products
            </p>
        </a>
    </li>
    <li class="nav-item"> <a href="{{ route('artikel.index') }}" class="nav-link {{ Route::is('artikel.index') ? 'active' : '' }}"> <i class="nav-icon bi bi-book"></i>
        <p>
            Artikel
        </p>
    </a>
</li>
    </ul> <!--end::Sidebar Menu-->
</nav>