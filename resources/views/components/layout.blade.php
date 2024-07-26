<!DOCTYPE html>
<html lang="en">

<!--begin::Head-->
<x-header>{{ $heading }}</x-header>

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <x-navbar></x-navbar>

        <!--begin::Sidebar-->
        <x-side-bar></x-side-bar>

        <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
                <div class="app-content-header"> <!--begin::Container-->
                    <div class="container-fluid"> <!--begin::Row-->
                     <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">{{ $heading }}</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $page }}
                                </li>
                            </ol>
                        </div>
                        </div> <!--end::Row-->
                    </div> <!--end::Container-->
                </div> <!--end::App Content Header--> <!--begin::App Content-->
                {{ $slot }}
        </main> <!--end::App Main-->

    </div>

    <x-script></x-script>
</body><!--end::Body-->
</html>
