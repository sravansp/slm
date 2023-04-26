<div class="container-fluid">
    <nav id="navbar_top" class="navbar navbar-fixed-top"> <!-- 13/02/2023 added id -->
        <div class="navbar_container navbar-menu-wrapper d-flex align-items-center">
            <a aria-label="hide-sidebar" class="d-lg-none app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0);">
                <span class="material-icons-outlined">
                    menu_open
                </span>
            </a>
            <div class="title_header"><span class="main_title d-flex text_black"><a href="<?php echo $backurl; ?>"><span class="mdi mdi-keyboard-backspace text_black pe-4 fs-40 fw-bold"></span></a><?php echo $title; ?></span></div>
            <div class="search_box align-self-center d-none d-lg-block ms-auto">
                <!-- SEARCH -->

                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group search_main">
                        <input type="text" class="form-control bg-transparent border-0 p-l-25 text_black" placeholder="Search ..  student name, courses, etc">
                        <div class="input-group-prepend bg-transparent hand">
                            <img class="input-group-text bg-transparent border-0 mdi mdi-magnify" src="./assets/images/search.png"></img>
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-flex ms-auto header-right-icons text_black">

                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mdi mdi-dots-vertical text-dark"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="navbar-collapse collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <div class="dropdown d-block d-lg-none"> <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown"> <i class="fas fa-search"></i> </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2"> <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary"> <i class="fa fa-search" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Theme-Layout -->
                            <div class="dropdown mode toggle-switch d-md-flex">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting sun-moon switch">
                                    <i class="material-symbols-outlined fs-24 dark_mode moon text_black">
                                        clear_night
                                    </i>
                                    <i class="material-symbols-outlined fs-24 sun text_black">
                                        light_mode
                                    </i>
                                </a>
                            </div>
                            <!-- FULL-SCREEN -->
                            <div class="dropdown d-md-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg" onclick="toggleFullScreen();">
                                    <i class="material-symbols-outlined fullscreen-button">
                                        fullscreen_exit
                                    </i>
                                </a>
                            </div>
                            <!-- NOTIFICATIONS -->
                            <div class="dropdown d-md-flex notifications">
                                <a class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="material-symbols-outlined">
                                        notifications
                                    </i>
                                    <span class=" pulse"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
                                            <div class="ms-auto"> <span class="badge bg-success rounded-pill">3</span> </div>
                                        </div>
                                    </div>
                                    <div class="notifications-menu">
                                        <a class="dropdown-item d-flex" href="chat.html">
                                            <div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
                                                <i class="fas fa-message-square"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">New review received</h5>
                                                <span class="notification-subtext">2 hours ago</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="chat.html">
                                            <div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
                                                <i class="fas fa-message-square"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">New review received</h5>
                                                <span class="notification-subtext">2 hours ago</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="chat.html">
                                            <div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
                                                <i class="fas fa-message-square"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">New review received</h5>
                                                <span class="notification-subtext">2 hours ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="javascript:void(0);" class="dropdown-item text-center p-3 text-muted">View all
                                        Notification</a>
                                </div>
                            </div>
                            <!-- MESSAGE-BOX -->
                            <div class="dropdown d-md-flex message">
                                <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                    <i class="material-symbols-outlined">
                                        mode_comment
                                    </i>
                                    <span class=" pulse-danger"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
                                            <div class="ms-auto">
                                                <span class="badge bg-danger rounded-pill">4</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-menu">
                                        <a class="dropdown-item d-flex" href="chat.html">
                                            <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="./assets/images/student2.png" style="background: url(./assets/images/student2.png) center center;"></span>
                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Madeleine</h5> <small class="text-muted ms-auto text-end"> 3 hours ago
                                                    </small>
                                                </div> <span>Hey! there I' am available....</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="chat.html">
                                            <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="./assets/images/student.png"></span>
                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Madeleine</h5> <small class="text-muted ms-auto text-end"> 3 hours ago
                                                    </small>
                                                </div> <span>Hey! there I' am available....</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="chat.html">
                                            <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="./assets/images/student.png"></span>
                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Madeleine</h5> <small class="text-muted ms-auto text-end"> 3 hours ago
                                                    </small>
                                                </div> <span>Hey! there I' am available....</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="chat.html">
                                            <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="./assets/images/student.png"></span>
                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Madeleine</h5> <small class="text-muted ms-auto text-end"> 3 hours ago
                                                    </small>
                                                </div> <span>Hey! there I' am available....</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="javascript:void(0);" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user_details align-self-center">
                <div class="name_email d-none d-md-grid pe-2">
                    <span class="author_name text-end text_black">Admin User</span>
                    <span class="author_email text-end text_black">admin@wisdomcloud.com</span>
                </div>
                <div class="dropdown d-md-flex profile-1"> <a href="javascript:void(0);" data-bs-toggle="dropdown" class="nav-link leading-none d-flex px-1"> <span> <img src="./assets/images/user1.png" alt="profile-user" class="avatar  profile-user brround cover-image"> </span> </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow text_black">
                        <div class="drop-heading">
                            <div class="text-center">
                                <h5 class="mb-0 author_name text_black">Admin User</h5>
                                <small class="text-muted text_black">admin@wisdomcloud.com</small>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="profile.html">
                            <span class="dropdown-icon mdi mdi-account me-2"></span>Profile
                        </a>
                        <a class="dropdown-item" href="faq.html">
                            <span class="dropdown-icon mdi mdi-help-circle-outline me-2"></span>Need help?
                        </a>
                        <a class="dropdown-item" href="login.html">
                            <span class="dropdown-icon mdi mdi-logout me-2"></span>Sign out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>