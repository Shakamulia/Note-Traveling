<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
        <div class="sidebar-brand"> <!--begin::Brand Link-->
            <a href="/Dashboard" class="brand-link">
                 <!--begin::Brand Image-->
                 <img src="{{ asset('assets') }}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image-->
                 <!--begin::Brand Text-->
                 <span class="brand-text fw-light">AdminLTE 4</span>
                 <!--end::Brand Text-->
            </a> <!--end::Brand Link-->
        </div> <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2"><ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="/Dashboard" class="nav-link active">
                    <p>Dashboard</p>
                </a>
            </li>
                <li class="nav-item menu-open"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Note Traveling
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="/Catatan" class="nav-link active"> <i class="nav-icon bi bi-circle"></i>
                                <p>Data Traveling</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="/Catatan/create" class="nav-link active"> <i class="nav-icon bi bi-circle"></i>
                                <p>Isi Data Traveling</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                    <p>
                        Penduduk
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item"> <a href="penduduk" class="nav-link active"> <i class="nav-icon bi bi-circle"></i>
                            <p>Data Penduduk</p>
                        </a> </li>
                </ul>
            </li>
            </nav>
        </div> <!--end::Sidebar Wrapper-->
    </aside> <!--end::Sidebar--> <!--begin::App Main-->