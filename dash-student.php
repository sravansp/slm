<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLM Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- --------  apex chart --------- -->
    <link rel="stylesheet" href="./assets/plugins/apexchart/dist/apexcharts.css">
    <!-- --------icons ------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./assets/plugins/feather-icons/feather.css">

    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.1.96/css/materialdesignicons.min.css">
    <!-- --------icons end ------ -->
    <link rel="stylesheet" href="./assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style.responsive.css">
    <link rel="stylesheet" href="./css/util.css">
    <link rel="stylesheet" href="./css/custom.css">
</head>

<body class="light mode">

    <?php include 'templates/sidebar.php'; ?>
    <div class="overlay_section"></div>
    <main class="home">
        <?php $title = 'Dashboard';
        include 'templates/navbar.php'; ?>

        <!-- Body Start  -->

        <section>
            <div class="main student pb-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="welcome_wrapper p-2">
                                        <div class="content_text p-4">
                                            <div class="row text_black">
                                                <div class="col-md-12">
                                                    <span class="welcome_msg_1">Welcome Back, </span>
                                                    <span class="fw-bold">Sameer Ali!</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <span class="fs-12 text_black op-0-5">
                                                        You’ve learned</span>
                                                    <span class="fs-12 fw-bold text_primary_org op-1-0">80%</span>
                                                    <span class="fs-12 text_black op-0-5"> of your goal this week!<br>
                                                        Keep it up and improve your progress!
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content_img d-flex flex-m flex-c">
                                            <img class="w-160" src="./assets/images/wlcm_img_2.svg" alt="Welcome">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <div class="wrapper_card">
                                        <div class="row flex-m flex-c">
                                            <div class="col-md-3">
                                                <div class="circle_div bg_primary_org rounded-circle">
                                                    <span class="mdi mdi-account-school icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-5 total_">
                                                <span class="fs-20 fw-bold text_secondary">18</span><br>
                                                <span class="fs-12 text_secondary"> Completed Course
                                                </span>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="card_img">
                                                    <img src="./assets/images/Vector.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <div class="wrapper_card">
                                        <div class="row flex-m flex-c">
                                            <div class="col-md-3">
                                                <div class="circle_div rounded-circle" style="background: #F97D5F;">
                                                    <span class="mdi mdi-text-box-check-outline icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-5 total_">
                                                <span class="fs-20 fw-bold text_secondary">6</span><br>
                                                <span class="fs-12 text_secondary"> Approved Courses
                                                </span>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="card_img">
                                                    <img src="./assets/images/Vector2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <div class="wrapper_card">
                                        <div class="row flex-m flex-c">
                                            <div class="col-md-3">
                                                <div class="circle_div rounded-circle" style="background: #FFA600;">
                                                    <span class="material-symbols-rounded">
                                                        menu_book
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-5 total_">
                                                <span class="fs-20 fw-bold text_secondary">12</span><br>
                                                <span class="fs-12 text_secondary"> Enrolled courses
                                                </span>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="card_img">
                                                    <img src="./assets/images/Vector3.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="student_insight p-4">
                                        <div class="row">
                                            <div class="head_content d-flex flex-sb">
                                                <div class="title_content">
                                                    <span class="fs-18 fw-bold text_black">Daily Insight</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="chart_apex of-hidden text_black">
                                                <div id="chart_student_insight"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="published_courses p-4 text_black">
                                        <div class="row pb-2">
                                            <div class="head_content d-flex flex-sb flex-m">
                                                <div class="title_content">
                                                    <span class="fs-18 fw-bold text_black">Completed courses</span>
                                                </div>
                                                <div>
                                                    <a class="fs-13 td-none text-muted hov-pointer" href="">View all <span class="mdi mdi-chevron-right ps-1"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="pub_course_body px-2">
                                                <div class="row tb_row py-2 flex-m">
                                                    <div class="col-lg-3 col-6 d-flex flex-m">
                                                        <div class="activity-img">
                                                            <span class="fs-16 fw-bold p-2">9A</span>
                                                        </div>
                                                        <span class="col_text fs-13 fw-bold">Visual Effect</span>
                                                    </div>
                                                    <div class="col-lg-3 col-6 d-flex flex-m">
                                                        <span class="mdi mdi-play-box-multiple-outline p-2"></span>
                                                        <span class="col_text text-muted fs-12">How to use Ed...</span>
                                                    </div>
                                                    <div class="col-lg-3 col-6 d-flex flex-m">
                                                        <span class="mdi mdi-eye-outline p-2"></span>
                                                        <span class="col_text text-muted fs-12">350 views</span>
                                                    </div>
                                                    <div class="col-lg-3 col-6 d-flex flex-m">
                                                        <span class="mdi mdi-account-school-outline p-2"> </span>
                                                        <span class="col_text text-muted fs-12">45 Enrolled</span>
                                                    </div>
                                                </div>
                                                <div class="row tb_row py-2 flex-m">
                                                    <div class="col-lg-3 col-6 d-flex flex-m">
                                                        <div class="activity-img">
                                                            <span class="fs-16 fw-bold p-2">9A</span>
                                                        </div>
                                                        <span class="col_text fs-13 fw-bold">Multimedia</span>
                                                    </div>
                                                    <div class="col-lg-3 col-6 d-flex flex-m">
                                                        <span class="mdi mdi-play-box-multiple-outline p-2"></span>
                                                        <span class="col_text text-muted fs-12">Fundamental Ed...</span>
                                                    </div>
                                                    <div class="col-lg-3 col-6 d-flex flex-m">
                                                        <span class="mdi mdi-eye-outline p-2"></span>
                                                        <span class="col_text text-muted fs-12">210 views</span>
                                                    </div>
                                                    <div class="col-lg-3 col-6 d-flex flex-m">
                                                        <span class="mdi mdi-account-school-outline p-2"> </span>
                                                        <span class="col_text text-muted fs-12">10 Enrolled</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="wrapper_second">
                                <div class="wrapper_second_content px-4 py-4">
                                    <div class="row">
                                        <div class="head_content d-flex flex-sb">
                                            <div class="title_content">
                                                <span class="fs-15 fw-bold text_black">In Progress</span>
                                            </div>
                                            <div>
                                                <a class="fs-11 text_primary_org td-none" href="">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="content_body p-2">
                                            <div class="content_items text_black">
                                                <div class="item_content px-2 pt-3">
                                                    <div class="items_list d-flex flex-m pb-4">
                                                        <div class="item_image_text w-100 d-flex gap-2 flex-m">
                                                            <div class="item_img">
                                                                <img class="w-60 rounded" src="./assets/images/course1.svg" alt="">
                                                            </div>
                                                            <div class="item_text ps-2 w-100">
                                                                <span class="fs-14 text_black fw-bold">SEO Certificate course</span><br>
                                                                <div class="mt-1 d-flex flex-sb">
                                                                    <div>
                                                                        <span class="mdi mdi-clock-time-four-outline text_primary_org pe-1"></span>
                                                                        <span class="fs-12 text_black fw-bold">5h 12m</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-12 text_black fw-bold text-muted">Nizamudheen</span>
                                                                        <img class="w-20" src="./assets/images/student.png" alt="">
                                                                        <span class="mdi mdi-chevron-right"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="progress_bar_section d-flex flex-m mt-1">
                                                                    <span class="progress_pers fs-12 fw-bold me-2">63%</span>
                                                                    <div class="progress w-100" role="progressbar" aria-label="Basic example" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: 50%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-2 pt-3">
                                                    <div class="items_list d-flex flex-m pb-4">
                                                        <div class="item_image_text w-100 d-flex gap-2 flex-m">
                                                            <div class="item_img">
                                                                <img class="w-60 rounded" src="./assets/images/course2.svg" alt="">
                                                            </div>
                                                            <div class="item_text ps-2 w-100">
                                                                <span class="fs-14 text_black fw-bold">Intro to Information Technol..</span><br>
                                                                <div class="mt-1 d-flex flex-sb">
                                                                    <div>
                                                                        <span class="mdi mdi-clock-time-four-outline text_primary_org pe-1"></span>
                                                                        <span class="fs-12 text_black fw-bold">2h 17m</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-12 text_black fw-bold text-muted">Salih Suleiman</span>
                                                                        <img class="w-20" src="./assets/images/student.png" alt="">
                                                                        <span class="mdi mdi-chevron-right"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="progress_bar_section d-flex flex-m mt-1">
                                                                    <span class="progress_pers fs-12 fw-bold me-2">45%</span>
                                                                    <div class="progress w-100" role="progressbar" aria-label="Basic example" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: 45%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-2 pt-3">
                                                    <div class="items_list d-flex flex-m pb-4">
                                                        <div class="item_image_text w-100 d-flex gap-2 flex-m">
                                                            <div class="item_img">
                                                                <img class="w-60 rounded" src="./assets/images/course3.svg" alt="">
                                                            </div>
                                                            <div class="item_text ps-2 w-100">
                                                                <span class="fs-14 text_black fw-bold">Web 3 Fundamentals 101</span><br>
                                                                <div class="mt-1 d-flex flex-sb">
                                                                    <div>
                                                                        <span class="mdi mdi-clock-time-four-outline text_primary_org pe-1"></span>
                                                                        <span class="fs-12 text_black fw-bold">4h 09m</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-12 text_black fw-bold text-muted">Muneer Shah</span>
                                                                        <img class="w-20" src="./assets/images/student.png" alt="">
                                                                        <span class="mdi mdi-chevron-right"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="progress_bar_section d-flex flex-m mt-1">
                                                                    <span class="progress_pers fs-12 fw-bold me-2">90%</span>
                                                                    <div class="progress w-100" role="progressbar" aria-label="Basic example" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: 90%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-2 pt-3">
                                                    <div class="items_list d-flex flex-m pb-4">
                                                        <div class="item_image_text w-100 d-flex gap-2 flex-m">
                                                            <div class="item_img">
                                                                <img class="w-60 rounded" src="./assets/images/course4.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2 w-100">
                                                                <span class="fs-14 text_black fw-bold">NFT Blockchain Development..</span><br>
                                                                <div class="mt-1 d-flex flex-sb">
                                                                    <div>
                                                                        <span class="mdi mdi-clock-time-four-outline text_primary_org pe-1"></span>
                                                                        <span class="fs-12 text_black fw-bold">7h 10m</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-12 text_black fw-bold text-muted">Nizamudheen</span>
                                                                        <img class="w-20" src="./assets/images/student.png" alt="">
                                                                        <span class="mdi mdi-chevron-right"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="progress_bar_section d-flex flex-m mt-1">
                                                                    <span class="progress_pers fs-12 fw-bold me-2">75%</span>
                                                                    <div class="progress w-100" role="progressbar" aria-label="Basic example" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: 75%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-2 pt-3">
                                                    <div class="items_list d-flex flex-m pb-4">
                                                        <div class="item_image_text w-100 d-flex gap-2 flex-m">
                                                            <div class="item_img">
                                                                <img class="w-60 rounded" src="./assets/images/course1.svg" alt="">
                                                            </div>
                                                            <div class="item_text ps-2 w-100">
                                                                <span class="fs-14 text_black fw-bold">SEO Certificate course</span><br>
                                                                <div class="mt-1 d-flex flex-sb">
                                                                    <div>
                                                                        <span class="mdi mdi-clock-time-four-outline text_primary_org pe-1"></span>
                                                                        <span class="fs-12 text_black fw-bold">5h 12m</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-12 text_black fw-bold text-muted">Nizamudheen</span>
                                                                        <img class="w-20" src="./assets/images/student.png" alt="">
                                                                        <span class="mdi mdi-chevron-right"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="progress_bar_section d-flex flex-m mt-1">
                                                                    <span class="progress_pers fs-12 fw-bold me-2">63%</span>
                                                                    <div class="progress w-100" role="progressbar" aria-label="Basic example" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: 50%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper_second_content px-4 py-4">
                                    <div class="row">
                                        <div class="head_content d-flex flex-sb">
                                            <div class="title_content">
                                                <span class="fs-15 fw-bold text_black">Enrolled Courses</span>
                                            </div>
                                            <div>
                                                <a class="fs-11 text_primary_org" href="">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="content_body p-2">
                                            <div class="content_items enrolled_Courses">
                                                <div class="item_content px-3 pt-3">
                                                    <div class="items_list d-flex flex-sb flex-m mb-2 py-2">
                                                        <div class="item_image_text w-100 d-flex flex-sb flex-m">
                                                            <div class="item_img px-3 py-2">
                                                                <span class="mdi mdi-image-search-outline fs-30 text_clr_primary"></span>
                                                            </div>
                                                            <div class="item_text w-100">
                                                                <span class="fs-13 text_black fw-bold">SEO Certificate course</span><br>
                                                                <div class="d-flex flex-m flex-sb">
                                                                    <div>
                                                                        <span class="mdi mdi-check-circle text-success"></span>
                                                                        <span class="fs-12 fw-bold text_black">Approved</span>
                                                                    </div>
                                                                    <span class="text-muted fs-12">3 days ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="item_sub px-3 py-2">
                                                                <span class="mdi mdi-open-in-new fs-25 text-muted"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-3">
                                                    <div class="items_list d-flex flex-sb flex-m mb-2 py-2">
                                                        <div class="item_image_text w-100 d-flex flex-sb flex-m">
                                                            <div class="item_img px-3 py-2">
                                                                <span class="mdi mdi-image-search-outline fs-30 text_clr_primary"></span>
                                                            </div>
                                                            <div class="item_text w-100">
                                                                <span class="fs-13 text_black fw-bold">SEO Certificate course</span><br>
                                                                <div class="d-flex flex-m flex-sb">
                                                                    <div>
                                                                    <span class="mdi mdi-alert-circle text-danger"></span>
                                                                        <span class="fs-12 fw-bold text_black">Waiting</span>
                                                                    </div>
                                                                    <span class="text-muted fs-12">3 days ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="item_sub px-3 py-2">
                                                                <span class="mdi mdi-open-in-new fs-25 text-muted"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-3">
                                                    <div class="items_list d-flex flex-sb flex-m mb-2 py-2">
                                                        <div class="item_image_text w-100 d-flex flex-sb flex-m">
                                                            <div class="item_img px-3 py-2">
                                                                <span class="mdi mdi-image-search-outline fs-30 text_clr_primary"></span>
                                                            </div>
                                                            <div class="item_text w-100">
                                                                <span class="fs-13 text_black fw-bold">SEO Certificate course</span><br>
                                                                <div class="d-flex flex-m flex-sb">
                                                                    <div>
                                                                        <span class="mdi mdi-check-circle text-success"></span>
                                                                        <span class="fs-12 fw-bold text_black">Approved</span>
                                                                    </div>
                                                                    <span class="text-muted fs-12">3 days ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="item_sub px-3 py-2">
                                                                <span class="mdi mdi-open-in-new fs-25 text-muted"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-3">
                                                    <div class="items_list d-flex flex-sb flex-m mb-2 py-2">
                                                        <div class="item_image_text w-100 d-flex flex-sb flex-m">
                                                            <div class="item_img px-3 py-2">
                                                                <span class="mdi mdi-image-search-outline fs-30 text_clr_primary"></span>
                                                            </div>
                                                            <div class="item_text w-100">
                                                                <span class="fs-13 text_black fw-bold">SEO Certificate course</span><br>
                                                                <div class="d-flex flex-m flex-sb">
                                                                    <div>
                                                                        <span class="mdi mdi-check-circle text-success"></span>
                                                                        <span class="fs-12 fw-bold text_black">Approved</span>
                                                                    </div>
                                                                    <span class="text-muted fs-12">3 days ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="item_sub px-3 py-2">
                                                                <span class="mdi mdi-open-in-new fs-25 text-muted"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-3">
                                                    <div class="items_list d-flex flex-sb flex-m mb-2 py-2">
                                                        <div class="item_image_text w-100 d-flex flex-sb flex-m">
                                                            <div class="item_img px-3 py-2">
                                                                <span class="mdi mdi-image-search-outline fs-30 text_clr_primary"></span>
                                                            </div>
                                                            <div class="item_text w-100">
                                                                <span class="fs-13 text_black fw-bold">SEO Certificate course</span><br>
                                                                <div class="d-flex flex-m flex-sb">
                                                                    <div>
                                                                        <span class="mdi mdi-check-circle text-success"></span>
                                                                        <span class="fs-12 fw-bold text_black">Approved</span>
                                                                    </div>
                                                                    <span class="text-muted fs-12">3 days ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="item_sub px-3 py-2">
                                                                <span class="mdi mdi-open-in-new fs-25 text-muted"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <div class="dimmer active">
        <div class="lds-hourglass"></div>
    </div>

    <!-- plugins:js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/plugins/apexchart/dist/apexcharts.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/chart.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</body>

</html>