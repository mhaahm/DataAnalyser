<template>
    <div class="app has-fullwidth">
        <header class="app-header app-header-dark">
            <!-- .top-bar -->
            <div class="top-bar">
                <!-- .top-bar-brand -->
                <div class="top-bar-brand bg-transparent">
                    <!-- toggle menu -->
                    <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside" aria-label="toggle menu">
                        <span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                    <a href="index-2.html"><img src="assets/images/brand-inverse.png" alt="Data Analyser"
                                                style="height: 40px;width: 100px;"></a>
                </div><!-- /.top-bar-brand -->
                <!-- .top-bar-list -->
                <div class="top-bar-list">
                    <!-- .top-bar-item -->
                    <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                        <!-- toggle menu -->
                        <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="Menu"
                                aria-controls="navigation"><span class="hamburger-box"><span
                                class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                    </div><!-- /.top-bar-item -->

                    <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                        <!-- .nav -->
                        <ul class="header-nav nav">
                            <!-- .nav-item -->
                            <li class="nav-item dropdown header-nav-dropdown has-notified">
                                <a class="nav-link" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                        class="oi oi-wrench"></span></a>
                                <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                    <button class="btn btn-light btn-block" data-toggle="skin">Night mode <i class="fas fa-moon ml-1"></i></button>
                                </div>
                            </li>

                            <li class="nav-item dropdown header-nav-dropdown">
                                <a class="nav-link" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                        class="oi oi-info"></span></a>
                                <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                    <!-- .dropdown-sheets -->
                                    <div class="dropdown-sheets">
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i
                                                    class="oi oi-file"></i></span> <span
                                                    class="tile-peek">Help Import</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i
                                                    class="oi oi-data-transfer-upload"></i></span> <span
                                                    class="tile-peek">Help Data quality</span></a>
                                        </div>
                                        <div class="dropdown-sheet-item">
                                            <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i
                                                    class="fa fa-tasks"></i></span> <span class="tile-peek">Help Data Inventory</span></a>
                                        </div>
                                        <div class="dropdown-sheet-item">
                                            <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i
                                                    class="oi oi-dashboard"></i></span> <span class="tile-peek">Help dashboards</span></a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul><!-- /.nav -->
                        <!-- .btn-account -->
                        <div class="dropdown">
                            <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"></span>
                                <span class="account-summary pr-lg-4 d-none d-lg-block"><span
                                        class="account-name">MHA</span> <span class="account-description">Manager</span></span>
                            </button>
                            <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu">
                                <h6 class="dropdown-header d-none d-md-block d-lg-none"> MHA </h6>
                                <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a>
                                <a class="dropdown-item"> <span class="dropdown-icon oi oi-account-logout"></span> Logout</a>

                            </div>
                        </div>
                    </div>
                </div><!-- /.top-bar-list -->
            </div><!-- /.top-bar -->
        </header>
        <aside class="app-aside app-aside-light">
            <!-- .aside-content -->
            <div class="aside-content">
                <!-- .aside-header -->
                <header class="aside-header">
                    <!-- toggle menu -->
                    <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="Menu" aria-controls="navigation"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                    <!-- .btn-account -->
                    <button class="btn-account d-flex d-md-none" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
                    <!-- .dropdown-aside -->
                    <div id="dropdown-aside" class="dropdown-aside d-md-none collapse">
                        <!-- dropdown-items -->
                        <div class="pb-3">
                            <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Help Center</a> <a class="dropdown-item" href="#!">Ask Forum</a> <a class="dropdown-item" href="#!">Keyboard Shortcuts</a>
                        </div><!-- /dropdown-items -->
                    </div><!-- /.dropdown-aside -->
                    <!-- .top-bar-brand -->
                    <div class="top-bar-brand bg-primary">
                        <a href="index-2.html"><img src="assets/images/brand-inverse.png" height="32" alt=""></a>
                    </div><!-- /.top-bar-brand -->
                </header><!-- /.aside-header -->
                <!-- .aside-menu -->
                <section class="aside-menu">
                    <!-- .stacked-menu -->
                    <nav id="stacked-menu" class="stacked-menu">
                        <!-- .menu -->
                        <ul class="menu">
                            <!-- .menu-item -->
                            <li class="menu-item has-child has-open">
                                <a href="#" class="menu-link"><span class="menu-icon oi oi-wrench"></span>
                                    <span class="menu-text">Imports </span></a>
                                <ul class="menu">
                                    <li class="menu-item">
                                        <router-link class="nav-item" tag="li" to="/import" active-class="active">
                                            <a class="menu-link">Import</a>
                                        </router-link>
                                    </li>
                                    <li class="menu-item">
                                        <router-link class="nav-item" tag="li" to="/importList" active-class="active">
                                            <a class="menu-link">List Import</a>
                                        </router-link>
                                    </li>
                                    <li class="menu-item">
                                        <a href="page-project-gantt.html" class="menu-link">List file</a>
                                    </li>
                                </ul>
                            </li><!-- /.menu-item -->
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span class="menu-text">Dashboards</span> <span class="badge badge-warning">New</span></a> <!-- child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="page-clients.html" class="menu-link">Dashboards Configuration</a>
                                    </li>
                                    <li class="menu-item has-child">
                                        <a href="#" class="menu-link">Published dashboard</a>
                                        <ul class="menu">
                                            <li class="menu-item">
                                                <a href="page-team.html" class="menu-link">Dashboard 1</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="page-team-feeds.html" class="menu-link">Dashboard 2</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="page-team-projects.html" class="menu-link">Dashboard 3</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="page-team-members.html" class="menu-link">Dashboard 4</a>
                                            </li>
                                        </ul><!-- /grand child menu -->
                                    </li>

                                </ul>
                            </li>

                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span class="menu-icon oi oi-brush"></span>
                                    <span class="menu-text">Data Quality</span></a>
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="auth-comingsoon-v1.html" class="menu-link">Import data quality</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-comingsoon-v2.html" class="menu-link">Import data changes</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-cookie-consent.html" class="menu-link">Import Inconsistency</a>
                                    </li>
                                </ul><!-- /child menu -->
                            </li><!-- /.menu-item -->
                            <!-- .menu-item -->
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link"><span class="menu-icon oi oi-list"></span> <span class="menu-text">Data Inventory</span></a> <!-- child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="user-profile.html" class="menu-link">Data Inventory configuration</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="user-activities.html" class="menu-link">List Inventory</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </aside>

        <main class="app-main">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .page -->

                <div class="page">

                    <router-view></router-view>
                </div>
            </div><!-- /.wrapper -->
            <!-- .app-footer -->
            <footer class="app-footer">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="text-muted" href="#!">Support</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="#!">Help Center</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="#!">Privacy</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="#!">Terms of Service</a>
                    </li>
                </ul>
                <div class="copyright"> Copyright © 2018. All right reserved.</div>
            </footer>
        </main>
    </div>
</template>

<script>

    export default {
        name: 'app',
        components: {}
    }
</script>