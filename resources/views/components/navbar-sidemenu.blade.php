<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left  text-light"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex text-light">
                <em class="icon ni ni-info"></em>
            </a>
        </div>

        <div class="nk-sidebar-brand text-light">
            <span id="title-sidemenu">
                    Welcome Back! 
                <b>{{ Str::substr(Auth::user()->name, 0, 14) }}</b>
                {{ Str::length(Auth::user()->name) >= 14 ? '...' : '' }}
            </span>
        </div>
        
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <center>
                        <img src="/images/logo.png?e" id="logo-sidemenu" style="height: 130px;  filter: drop-shadow(0 0 10px #000);" alt="">
                    </center>
                    <hr class="mt-4 mb-4">
                    <li class="nk-menu-heading pt-0">
                        <h6 class="overline-title text-primary-alt">menu</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/dashboard" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-add"></em></span>
                            <span class="nk-menu-text">Personal Information</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/transaction-logs" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-add"></em></span>
                            <span class="nk-menu-text">Transaction Logs</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/patientEnrollmentRecord" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-add"></em></span>
                            <span class="nk-menu-text">Patient Enrollment Record</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/prenatalVisitRecord" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-add"></em></span>
                            <span class="nk-menu-text">Prenatal Visit Record</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
