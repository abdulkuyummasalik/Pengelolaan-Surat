<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/Dashboard*') ? 'active' : '' }}" href="/">
                    <i class="bi bi-grid-fill me-2"></i>
                    Dashboard
                </a>
            </li>

            <!-- Data User Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="#"
                    id="dataUserDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill me-2"></i>
                    Data User
                </a>
                <ul class="dropdown-menu" aria-labelledby="dataUserDropdown">
                    <li><a class="dropdown-item" href="{{ route('staff.index') }}">Data Staff Tata Usaha</a></li>
                    <li><a class="dropdown-item" href="{{ route('teacher.index') }}">Data Guru</a></li>
                </ul>
            </li>

            <!-- Data Surat Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('dashboard/surat*') ? 'active' : '' }}" href="#"
                    id="dataSuratDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-envelope-fill me-2"></i>
                    Data Surat
                </a>
                <ul class="dropdown-menu" aria-labelledby="dataSuratDropdown">
                    <li><a class="dropdown-item" href="{{ route('klasifikasi_letter.index') }}">Klasifikasi Surat</a>
                    </li>
                    <li><a class="dropdown-item" href="/letter/index">Data Surat</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
