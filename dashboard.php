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
            <div class="main pb-4">
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
                                                    <span class="fw-bold">Admin</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <span class="fs-12 text_black op-0-5">
                                                        Average students completed</span>
                                                    <span class="fs-12 fw-bold text_primary_org op-1-0">91%</span>
                                                    <span class="fs-12 text_black op-0-5"> of the tasks.<br>
                                                        12 new courses uploaded this week.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content_img d-flex flex-m flex-c">
                                            <img class="w-160" src="./assets/images/wlcm_img_1.png" alt="Welcome">
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
                                                    <span class="mdi mdi-account-school-outline icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-5 total_">
                                                <span class="fs-20 fw-bold text_secondary">248</span><br>
                                                <span class="fs-12 text_secondary"> Total Students
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
                                                    <span class="mdi mdi-human-male-board icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-5 total_">
                                                <span class="fs-20 fw-bold text_secondary">19</span><br>
                                                <span class="fs-12 text_secondary"> Total Teachers
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
                                                <span class="fs-20 fw-bold text_secondary">46</span><br>
                                                <span class="fs-12 text_secondary"> Total Courses
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
                                                    <span class="fs-18 fw-bold text_black">Students Insight</span>
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
                                                    <span class="fs-18 fw-bold text_black">Published courses</span>
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
                                <div class="wrapper_second_content px-4 pt-4">
                                    <div class="row">
                                        <div class="head_content d-flex flex-sb">
                                            <div class="title_content">
                                                <span class="fs-15 fw-bold text_black">Recent Activities</span>
                                            </div>
                                            <div>
                                                <a class="fs-11 text_primary_org" href="">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="content_body p-2">
                                            <div class="timeline_content">
                                                <div class="item_content px-3 pt-4">
                                                    <div class="activity-blog">
                                                        <div class="activity-img">
                                                            <span class="material-symbols-outlined p-2">
                                                                menu_book
                                                            </span>
                                                        </div>
                                                        <div class="activity-details d-flex ">
                                                            <div>
                                                                <div class="title_timeline fs-12">
                                                                    <span class="text_black "> <b>Yasir Muhammad Yahya </b>
                                                                        finished a course - <b> Advanced React JS course</b></span>
                                                                </div>
                                                                <span class="d-flex text-muted fs-11 mt-3">
                                                                    <span class="mdi mdi-calendar-month pe-1"></span>
                                                                    <span class="date_activity">Mar 22, 2023 - 03:47PM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="activity-blog">
                                                        <div class="activity-img">
                                                            <span class="material-symbols-outlined p-2">
                                                                menu_book
                                                            </span>
                                                        </div>
                                                        <div class="activity-details d-flex ">
                                                            <div>
                                                                <div class="title_timeline fs-12">
                                                                    <span class="text_black "> <b>Yasir Muhammad Yahya </b>
                                                                        finished a course - <b> Advanced React JS course</b></span>
                                                                </div>
                                                                <span class="d-flex text-muted fs-11 mt-3">
                                                                    <span class="mdi mdi-calendar-month pe-1"></span>
                                                                    <span class="date_activity">Mar 22, 2023 - 03:47PM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="activity-blog">
                                                        <div class="activity-img">
                                                            <span class="material-symbols-outlined p-2">
                                                                menu_book
                                                            </span>
                                                        </div>
                                                        <div class="activity-details d-flex ">
                                                            <div>
                                                                <div class="title_timeline fs-12">
                                                                    <span class="text_black "> <b>Yasir Muhammad Yahya </b>
                                                                        finished a course - <b> Advanced React JS course</b></span>
                                                                </div>
                                                                <span class="d-flex text-muted fs-11 mt-3">
                                                                    <span class="mdi mdi-calendar-month pe-1"></span>
                                                                    <span class="date_activity">Mar 22, 2023 - 03:47PM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="activity-blog">
                                                        <div class="activity-img">
                                                            <span class="material-symbols-outlined p-2">
                                                                menu_book
                                                            </span>
                                                        </div>
                                                        <div class="activity-details d-flex ">
                                                            <div>
                                                                <div class="title_timeline fs-12">
                                                                    <span class="text_black "> <b>Yasir Muhammad Yahya </b>
                                                                        finished a course - <b> Advanced React JS course</b></span>
                                                                </div>
                                                                <span class="d-flex text-muted fs-11 mt-3">
                                                                    <span class="mdi mdi-calendar-month pe-1"></span>
                                                                    <span class="date_activity">Mar 22, 2023 - 03:47PM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="activity-blog">
                                                        <div class="activity-img">
                                                            <span class="material-symbols-outlined p-2">
                                                                menu_book
                                                            </span>
                                                        </div>
                                                        <div class="activity-details d-flex ">
                                                            <div>
                                                                <div class="title_timeline fs-12">
                                                                    <span class="text_black "> <b>Yasir Muhammad Yahya </b>
                                                                        finished a course - <b> Advanced React JS course</b></span>
                                                                </div>
                                                                <span class="d-flex text-muted fs-11 mt-3">
                                                                    <span class="mdi mdi-calendar-month pe-1"></span>
                                                                    <span class="date_activity">Mar 22, 2023 - 03:47PM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="activity-blog">
                                                        <div class="activity-img">
                                                            <span class="material-symbols-outlined p-2">
                                                                menu_book
                                                            </span>
                                                        </div>
                                                        <div class="activity-details d-flex ">
                                                            <div>
                                                                <div class="title_timeline fs-12">
                                                                    <span class="text_black "> <b>Yasir Muhammad Yahya </b>
                                                                        finished a course - <b> Advanced React JS course</b></span>
                                                                </div>
                                                                <span class="d-flex text-muted fs-11 mt-3">
                                                                    <span class="mdi mdi-calendar-month pe-1"></span>
                                                                    <span class="date_activity">Mar 22, 2023 - 03:47PM</span>
                                                                </span>
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
                                                <span class="fs-15 fw-bold text_black">Top Students</span>
                                            </div>
                                            <div>
                                                <a class="fs-11 text_primary_org" href="">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="content_body p-2">
                                            <div class="content_items">
                                                <div class="item_content px-3 pt-4">
                                                    <div class="items_list d-flex flex-sb flex-m pb-4">
                                                        <div class="item_image_text d-flex flex-sb flex-m">
                                                            <div class="item_img">
                                                                <img class="rounded-circle w-35" src="./assets/images/people.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">Course
                                                                    Completion : 94%</span>
                                                            </div>
                                                        </div>
                                                        <div class="item_sub">
                                                            <span class="text-muted fs-12">7th class</span><br>
                                                            <span class="text-warning fs-12"><span class="mdi mdi-text-box-outline"></span><span>41</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-4">
                                                    <div class="items_list d-flex flex-sb flex-m pb-4">
                                                        <div class="item_image_text d-flex flex-sb flex-m">
                                                            <div class="item_img">
                                                                <img class="rounded-circle w-35" src="./assets/images/people.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">Course
                                                                    Completion : 94%</span>
                                                            </div>
                                                        </div>
                                                        <div class="item_sub">
                                                            <span class="text-muted fs-12">7th class</span><br>
                                                            <span class="text-warning fs-12"><span class="mdi mdi-text-box-outline"></span><span>41</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-4">
                                                    <div class="items_list d-flex flex-sb flex-m pb-4">
                                                        <div class="item_image_text d-flex flex-sb flex-m">
                                                            <div class="item_img">
                                                                <img class="rounded-circle w-35" src="./assets/images/people.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">Course
                                                                    Completion : 94%</span>
                                                            </div>
                                                        </div>
                                                        <div class="item_sub">
                                                            <span class="text-muted fs-12">7th class</span><br>
                                                            <span class="text-warning fs-12"><span class="mdi mdi-text-box-outline"></span><span>41</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-4">
                                                    <div class="items_list d-flex flex-sb flex-m pb-4">
                                                        <div class="item_image_text d-flex flex-sb flex-m">
                                                            <div class="item_img">
                                                                <img class="rounded-circle w-35" src="./assets/images/people.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">Course
                                                                    Completion : 94%</span>
                                                            </div>
                                                        </div>
                                                        <div class="item_sub">
                                                            <span class="text-muted fs-12">7th class</span><br>
                                                            <span class="text-warning fs-12"><span class="mdi mdi-text-box-outline"></span><span>41</span></span>
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