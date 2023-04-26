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
            <div class="main teacher pb-4">
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
                                                    <span class="fw-bold">Ahmed!</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <span class="fs-12 text_black op-0-5">Your students completed</span>
                                                    <span class="fs-12 fw-bold text_primary_org op-1-0">91%</span>
                                                    <span class="fs-12 text_black op-0-5"> of the tasks.!<br>
                                                        Progress is
                                                    </span>
                                                    <span class="fs-12 fw-bold text_primary_org">Excellent!</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content_img w-80p d-flex flex-m flex-c">
                                            <img class="w-100" src="./assets/images/wlcm_img_4.png" alt="Welcome">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <div class="wrapper_card">
                                        <div class="row flex-m flex-c">
                                            <div class="col-4">
                                                <div class="circle_div bg_primary_org rounded-circle">
                                                    <span class="mdi mdi-account-school icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-8 total_">
                                                <span class="fs-20 fw-bold text_secondary">42</span><br>
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
                                            <div class="col-4">
                                                <div class="circle_div rounded-circle" style="background: #F97D5F;">
                                                    <span class="mdi mdi-text-box-check-outline icon"></span>
                                                </div>
                                            </div>
                                            <div class="col-8 total_">
                                                <span class="fs-20 fw-bold text_secondary">6</span><br>
                                                <span class="fs-12 text_secondary"> Pending Approval
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
                                            <div class="col-4">
                                                <div class="circle_div rounded-circle" style="background: #FFA600;">
                                                    <span class="material-symbols-rounded">
                                                        menu_book
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-8 total_">
                                                <span class="fs-20 fw-bold text_secondary">12</span><br>
                                                <span class="fs-12 text_secondary"> My courses
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
                            <div class="wrapper_second enroll_req">
                                <div class="wrapper_second_content px-4 py-4">
                                    <div class="row">
                                        <div class="head_content d-flex flex-sb">
                                            <div class="title_content">
                                                <span class="fs-15 fw-bold text_black">Enrollment Requests</span>
                                            </div>
                                            <div>
                                                <a class="fs-11 text_primary_org td-none" href="">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="notify_enroll flex-m gap-2">
                                            <i class="fas fa-exclamation-circle text-warning"></i>
                                            <span class="fs-13 text_black">Course Enrollment Request Pending</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="content_body p-2">
                                            <div class="content_items enrolled_Courses_req text_black">
                                                <div class="item_content pt-3">
                                                    <div class="items_list mb-2 p-3">
                                                        <div class="enroll_sec_1 pb-2">
                                                            <div class="row flex-m">
                                                                <div class="col-lg-3 col-md-2 col-sm-2 col-3">
                                                                    <div class="item_img">
                                                                        <img class="w-100 rounded" src="./assets/images/student2.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5 col-5">
                                                                    <div class="name_class text-nowrap">
                                                                        <span class="fs-13 fw-bold">
                                                                            Imran Ali
                                                                        </span>
                                                                        <div class="text-nowrap">
                                                                            <i class="fas fa-graduation-cap text_primary_org"></i>
                                                                            <span class="fs-12">7th</span>
                                                                            <span class="fs-12 text-muted">class</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-4">
                                                                    <div class="course_last_dots me-2">
                                                                        <a href="">
                                                                            <span class="mdi mdi-dots-horizontal"></span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="time_enroll float-end flex-m gap-2 text-nowrap">
                                                                        <i class="far fa-clock text_primary_org"></i>
                                                                        <span class="text-muted fs-12">7hr ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="flex-sb mt-2">
                                                            <span class="text-muted fs-12">Course </span>
                                                            <a class="td-none fs-12 fw-bold text_primary_white" href="">View Details</a>
                                                        </div>
                                                        <div class="d-flex mt-2">
                                                            <span class="fs-15">
                                                                Digital Fundamentals of Computer ..
                                                            </span>
                                                        </div> -->
                                                        <div class="approve_btns mt-3">
                                                            <div class="row g-2 gap-sm-0">
                                                                <div class="col-md-6 col-sm-6">
                                                                    <button class="btn_approve btn_approve_primary w-100 flex-c">
                                                                        <span class="mdi mdi-check pe-2 text_primary_org"></span>Approve
                                                                    </button>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <button class="btn_approve btn_approve_primary w-100 flex-c">
                                                                        <span class="mdi mdi-message-text-outline pe-2 text_primary_org"></span>Message
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="approve_btns_sure dis-none">
                                                            <span class="fs-10 text-muted">To give access Please confirm the approval </span>
                                                            <div class="row g-2 gap-sm-0">
                                                                <div class="col-md-6 col-sm-6">
                                                                    <button class="btn_approve btn_approve_primary w-100 flex-c yes_approve">
                                                                        <span class="mdi mdi-check pe-2 text_primary_org"></span>Yes, Sure
                                                                    </button>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <button class="btn_approve btn_approve_primary w-100 flex-c no_approve">
                                                                        <span class="mdi mdi-close pe-2 text_primary_org"></span>Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content pt-3">
                                                    <div class="items_list mb-2 p-3">
                                                        <div class="enroll_sec_1 pb-2">
                                                            <div class="row flex-m">
                                                                <div class="col-lg-3 col-md-2 col-sm-2 col-3">
                                                                    <div class="item_img">
                                                                        <img class="w-100 rounded" src="./assets/images/people.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5 col-5">
                                                                    <div class="name_class text-nowrap">
                                                                        <span class="fs-13 fw-bold">
                                                                            M Ali
                                                                        </span>
                                                                        <div class="text-nowrap">
                                                                            <i class="fas fa-graduation-cap text_primary_org"></i>
                                                                            <span class="fs-12">7th</span>
                                                                            <span class="fs-12 text-muted">class</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-4">
                                                                    <div class="course_last_dots me-2">
                                                                        <a href="">
                                                                            <span class="mdi mdi-dots-horizontal"></span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="time_enroll float-end flex-m gap-2 text-nowrap">
                                                                        <i class="far fa-clock text_primary_org"></i>
                                                                        <span class="text-muted fs-12">7hr ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="flex-sb mt-2">
                                                            <span class="text-muted fs-12">Course </span>
                                                            <a class="td-none fs-12 fw-bold text_primary_white" href="">View Details</a>
                                                        </div>
                                                        <div class="d-flex mt-2">
                                                            <span class="fs-15">
                                                                Digital Fundamentals of Computer ..
                                                            </span>
                                                        </div> -->
                                                        <div class=" mt-3">
                                                            <div class="row g-2 gap-sm-0">
                                                                <div class="col-md-6 col-sm-6">
                                                                    <button class="btn_approve btn_approve_primary w-100 flex-c">
                                                                        <span class="mdi mdi-check pe-2 text_primary_org"></span>Approve
                                                                    </button>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <button class="btn_approve btn_approve_primary w-100 flex-c">
                                                                        <span class="mdi mdi-message-text-outline pe-2 text_primary_org"></span>Message
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" dis-none">
                                                            <span class="fs-10 text-muted">To give access Please confirm the approval </span>
                                                            <div class="row g-2 gap-sm-0">
                                                                <div class="col-md-6 col-sm-6">
                                                                    <button class="btn_approve btn_approve_primary w-100 flex-c yes_approve">
                                                                        <span class="mdi mdi-check pe-2 text_primary_org"></span>Yes, Sure
                                                                    </button>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <button class="btn_approve btn_approve_primary w-100 flex-c no_approve">
                                                                        <span class="mdi mdi-close pe-2 text_primary_org"></span>Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper_second_content px-4 pt-4">
                                    <div class="row">
                                        <div class="head_content d-flex flex-sb">
                                            <div class="title_content">
                                                <span class="fs-15 fw-bold text_black">Student Reviews</span>
                                            </div>
                                            <div>
                                                <a class="fs-11 text_primary_org" href="">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="content_body p-2">
                                            <div class="fixed_content_items px-3 pt-3 mb-2">
                                                <div class="col-12">
                                                    <span class="fs-13 text_black">Overall Rating</span>
                                                </div>
                                                <div class="col-12 pos pt-1">
                                                    <div class="row flex-m">
                                                        <div class="col-2">
                                                            <span class="text_black fs-40 fw-bold">4.7</span>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="item_text ps-2">
                                                                <span class="mdi mdi-star text-warning"></span>
                                                                <span class="mdi mdi-star text-warning"></span>
                                                                <span class="mdi mdi-star text-warning"></span>
                                                                <span class="mdi mdi-star text-warning"></span>
                                                                <span class="mdi mdi-star text-secondary"></span>
                                                            </div>
                                                            <span class="fs-13 text_black text-muted ps-2">based on 44 reviews</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content_items">

                                                <div class="pos-relative">
                                                    <div class="item_content px-3 pt-3">
                                                        <div class="items_list pb-3">
                                                            <div class="item_image_text">
                                                                <div class="row">
                                                                    <div class="flex-m">
                                                                        <div class="item_img">
                                                                            <img class="rounded-circle w-35" src="./assets/images/student.png" alt="">
                                                                        </div>
                                                                        <div class="item_text ps-2">
                                                                            <span class="fs-14 text_black">Student Name</span><br>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-secondary"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="item_sub">
                                                                        <span class="fs-12 addReadMore showlesscontent text_black">Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item_content px-3 pt-3">
                                                        <div class="items_list pb-3">
                                                            <div class="item_image_text">
                                                                <div class="row">
                                                                    <div class="flex-m">
                                                                        <div class="item_img">
                                                                            <img class="rounded-circle w-35" src="./assets/images/student.png" alt="">
                                                                        </div>
                                                                        <div class="item_text ps-2">
                                                                            <span class="fs-14 text_black">Student Name</span><br>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-secondary"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="item_sub">
                                                                        <span class="fs-12 addReadMore showlesscontent text_black">Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item_content px-3 pt-3">
                                                        <div class="items_list pb-3">
                                                            <div class="item_image_text">
                                                                <div class="row">
                                                                    <div class="flex-m">
                                                                        <div class="item_img">
                                                                            <img class="rounded-circle w-35" src="./assets/images/student.png" alt="">
                                                                        </div>
                                                                        <div class="item_text ps-2">
                                                                            <span class="fs-14 text_black">Student Name</span><br>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-secondary"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="item_sub">
                                                                        <span class="fs-12 addReadMore showlesscontent text_black">Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item_content px-3 pt-3">
                                                        <div class="items_list pb-3">
                                                            <div class="item_image_text">
                                                                <div class="row">
                                                                    <div class="flex-m">
                                                                        <div class="item_img">
                                                                            <img class="rounded-circle w-35" src="./assets/images/student.png" alt="">
                                                                        </div>
                                                                        <div class="item_text ps-2">
                                                                            <span class="fs-14 text_black">Student Name</span><br>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-secondary"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="item_sub">
                                                                        <span class="fs-12 addReadMore showlesscontent text_black">Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item_content px-3 pt-3">
                                                        <div class="items_list pb-3">
                                                            <div class="item_image_text">
                                                                <div class="row">
                                                                    <div class="flex-m">
                                                                        <div class="item_img">
                                                                            <img class="rounded-circle w-35" src="./assets/images/student.png" alt="">
                                                                        </div>
                                                                        <div class="item_text ps-2">
                                                                            <span class="fs-14 text_black">Student Name</span><br>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-warning"></span>
                                                                            <span class="mdi mdi-star text-secondary"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="item_sub">
                                                                        <span class="fs-12 addReadMore showlesscontent text_black">Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand</span>
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

    <script>
        $(".btn_approve").click(function() {
            var $this = $(this);
            $(this).closest(".approve_btns").animate({
                opacity: 0
            }, 500, function() {
                $(this).hide();
                $(".approve_btns_sure").css("display", "block");
                $(".approve_btns_sure").css("opacity", "1");
            });
        });
        $(".yes_approve").click(function() {
            var $this = $(this);
            $(this).closest(".item_content").animate({
                opacity: 0
            }, 500, function() {
                $(this).hide();
            });
        });
        $(".no_approve").click(function() {
            $(this).closest(".approve_btns_sure").animate({
                opacity: 0
            }, 500, function() {
                $(this).hide();
                $(".approve_btns").css("display", "block");
                $(".approve_btns").css("opacity", "1");
            });
        });
    </script>

</body>

</html>