<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLM Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- --------icons ------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.1.96/css/materialdesignicons.min.css">
    <!-- --------icons end ------ -->
    <link rel="stylesheet" href="./assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style.responsive.css">
    <link rel="stylesheet" href="./css/util.css">
</head>

<body class="light mode">
    <?php include 'templates/sidebar.php'; ?>
    <div class="overlay_section"></div>

    <main class="home">
        <?php $title = 'My Courses';
        include 'templates/navbar.php'; ?>

        <!-- Body Start  -->

        <section>
            <div class="main student mycourse pb-4">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-md-8 mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="welcome_wrapper p-2">
                                        <div class="content_text p-4">
                                            <div class="row text_black">
                                                <div class="col-md-12">
                                                    <span class="welcome_msg_1 fw-bold">List of Enrolled courses</span>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <span class="fs-14 text_black">
                                                        Lets complete the remaining</span>
                                                    <span class="fs-14 fw-bold text_black op-1-0">27%</span>
                                                    <span class="fs-14 text_black"> of your<br>
                                                        current curriculum to improve your progress!
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="content_img d-flex flex-m flex-c">
                                            <img class="w-100" src="./assets/images/wlcm_img_3i.png" alt="Welcome">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="teachers_list h-full">
                                        <div class="lists_teachers p-4">
                                            <div class="row">
                                                <div class="titileheader">
                                                    <span class="text_black fs-16 fw-bold">In Progress</span>
                                                </div>
                                            </div>
                                            <div class="row text_black">
                                                <div class="course_wrapper p-3">
                                                    <div class="courses_items p-2 pos-relative">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 m-auto d-none d-sm-block">
                                                                <img class="me-3 rounded w-100" src="./assets/images/course2.svg" alt="">
                                                            </div>
                                                            <div class="col-lg-10 col-md-9 col-sm-9 m-auto">
                                                                <div class="row flex-m">
                                                                    <div class="col-lg-8">
                                                                        <div class="image_text_course d-flex h-full">
                                                                            <div class="text_course m-auto">
                                                                                <span class="fs-14 fw-bold">Introduction to Information Technology</span>
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
                                                                                    <span class="progress_pers fs-12 fw-bold me-2">2%</span>
                                                                                    <div class="progress w-100" role="progressbar" aria-label="Basic example" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100">
                                                                                        <div class="progress-bar" style="width: 2%"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-6">
                                                                        <div class="d-grid">
                                                                            <span class="fs-10 fw-bold">GA 4 Basics</span>
                                                                            <span class="fs-9 text-muted">lesson 3</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-6">
                                                                        <div class="play_course me-3">
                                                                            <a href="./courses.php">
                                                                                <div class="play_course_btn text-center float-end m-2">
                                                                                <div class="plybtnd">
                                                                                    <svg version="1.1" id="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="20px" width="20px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                                                                        <path class="stroke-solid" fill="none" stroke="#065AD8" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                                        <path class="stroke-dotted" fill="none" stroke="#065AD8" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                                        <path class="icon" fill="#065AD8" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                                                    </svg>
                                                                                </div>
                                                                                <span class="fs-9 text-black">Continue</span>
                                                                            </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course_last_dots me-2">
                                                            <a href="">
                                                                <span class="mdi mdi-dots-horizontal"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="courses_items p-2 pos-relative">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 m-auto d-none d-sm-block">
                                                                <img class="me-3 rounded w-100" src="./assets/images/course1.svg" alt="">
                                                            </div>
                                                            <div class="col-lg-10 col-md-9 col-sm-9 m-auto">
                                                                <div class="row flex-m">
                                                                    <div class="col-lg-8">
                                                                        <div class="image_text_course d-flex h-full">
                                                                            <div class="text_course m-auto">
                                                                                <span class="fs-14 fw-bold">SEO Google analytics marketing course</span>
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
                                                                                        <div class="progress-bar" style="width: 63%"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-6">
                                                                        <div class="d-grid">
                                                                            <span class="fs-10 fw-bold">GA 4 Basics</span>
                                                                            <span class="fs-9 text-muted">lesson 3</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-6">
                                                                        <div class="play_course me-3">
                                                                            <a href="./courses.php">
                                                                                <div class="play_course_btn text-center float-end m-2">
                                                                                <div class="plybtnd">
                                                                                    <svg version="1.1" id="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="20px" width="20px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                                                                        <path class="stroke-solid" fill="none" stroke="#065AD8" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                                        <path class="stroke-dotted" fill="none" stroke="#065AD8" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                                        <path class="icon" fill="#065AD8" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                                                    </svg>
                                                                                </div>
                                                                                <span class="fs-9 text-black">Continue</span>
                                                                            </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course_last_dots me-2">
                                                            <a href="">
                                                                <span class="mdi mdi-dots-horizontal"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="courses_items p-2 pos-relative">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 m-auto d-none d-sm-block">
                                                                <img class="me-3 rounded w-100" src="./assets/images/course4.png" alt="">
                                                            </div>
                                                            <div class="col-lg-10 col-md-9 col-sm-9 m-auto">
                                                                <div class="row flex-m">
                                                                    <div class="col-lg-8">
                                                                        <div class="image_text_course d-flex h-full">
                                                                            <div class="text_course m-auto">
                                                                                <span class="fs-14 fw-bold">Web 3 Fundamentals 101</span>
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
                                                                                    <span class="progress_pers fs-12 fw-bold me-2">26%</span>
                                                                                    <div class="progress w-100" role="progressbar" aria-label="Basic example" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100">
                                                                                        <div class="progress-bar" style="width: 26%"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-6">
                                                                        <div class="d-grid">
                                                                            <span class="fs-10 fw-bold">GA 4 Basics</span>
                                                                            <span class="fs-9 text-muted">lesson 3</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-6">
                                                                        <div class="play_course me-3">
                                                                            <a href="./courses.php">
                                                                                <div class="play_course_btn text-center float-end m-2">
                                                                                <div class="plybtnd">
                                                                                    <svg version="1.1" id="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="20px" width="20px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                                                                        <path class="stroke-solid" fill="none" stroke="#065AD8" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                                        <path class="stroke-dotted" fill="none" stroke="#065AD8" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                                                        <path class="icon" fill="#065AD8" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                                                    </svg>
                                                                                </div>
                                                                                <span class="fs-9 text-black">Continue</span>
                                                                            </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="course_last_dots me-2">
                                                            <a href="">
                                                                <span class="mdi mdi-dots-horizontal"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="teachers_list h-full">
                                        <div class="lists_teachers p-4">
                                            <div class="row">
                                                <div class="titileheader">
                                                    <span class="text_black fs-16 fw-bold">Enrolled Courses</span>
                                                </div>
                                            </div>
                                            <div class="row text_black">
                                                <div class="enrolled_course pt-3">
                                                    <div class="item_content px-3">
                                                        <div class="items_list mb-2 py-2">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 flex-c">
                                                                    <div class="item_img px-2 py-2">
                                                                        <span class="mdi mdi-image-search-outline fs-30 text_primary_white"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-6 col-sm-6 col-9 flex-m">
                                                                    <div class="item_text w-100">
                                                                        <span class="fs-13 text_black fw-bold d-flex">SEO Certificate course</span>
                                                                        <div class="d-flex flex-m flex-sb">
                                                                            <div>
                                                                                <span class="mdi mdi-check-circle text-success"></span>
                                                                                <span class="fs-12 fw-bold text_black">Approved</span>
                                                                            </div>
                                                                            <span class="text-muted fs-12">3 days ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-4 col-12 flex-m">
                                                                    <div class="item_sub px-3 py-2 w-100">
                                                                        <a class="fs-12 fw-normal btn_main btn_secondary_org" href="">
                                                                            <span class="mdi mdi-open-in-new pe-2"> </span>Start
                                                                        </a>
                                                                    </div>
                                                                    <div class="course_last_dots me-2">
                                                                        <a href="">
                                                                            <span class="mdi mdi-dots-horizontal"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item_content px-3">
                                                        <div class="items_list mb-2 py-2">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 flex-c">
                                                                    <div class="item_img px-2 py-2">
                                                                        <span class="mdi mdi-image-search-outline fs-30 text_primary_white"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-6 col-sm-6 col-9 flex-m">
                                                                    <div class="item_text w-100">
                                                                        <span class="fs-13 text_black fw-bold d-flex">SEO Certificate course</span>
                                                                        <div class="d-flex flex-m flex-sb">
                                                                            <div>
                                                                                <span class="mdi mdi-alert-circle text-danger"></span>
                                                                                <span class="fs-12 fw-bold text_black">Waiting</span>
                                                                            </div>
                                                                            <span class="text-muted fs-12">3 days ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-4 col-12 flex-m">
                                                                    <div class="item_sub px-3 py-2 w-100">
                                                                        <a class="fs-12 fw-normal btn_main btn_secondary_org" href="">
                                                                            <span class="mdi mdi-message-outline pe-2"> </span>Message
                                                                        </a>
                                                                    </div>
                                                                    <div class="course_last_dots me-2">
                                                                        <a href="">
                                                                            <span class="mdi mdi-dots-horizontal"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item_content px-3">
                                                        <div class="items_list mb-2 py-2">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 flex-c">
                                                                    <div class="item_img px-2 py-2">
                                                                        <span class="mdi mdi-image-search-outline fs-30 text_primary_white"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-6 col-sm-6 col-9 flex-m">
                                                                    <div class="item_text w-100">
                                                                        <span class="fs-13 text_black fw-bold d-flex">SEO Certificate course</span>
                                                                        <div class="d-flex flex-m flex-sb">
                                                                            <div>
                                                                                <span class="mdi mdi-check-circle text-success"></span>
                                                                                <span class="fs-12 fw-bold text_black">Approved</span>
                                                                            </div>
                                                                            <span class="text-muted fs-12">3 days ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-4 col-12 flex-m">
                                                                    <div class="item_sub px-3 py-2 w-100">
                                                                        <a class="fs-12 fw-normal btn_main btn_secondary_org" href="">
                                                                            <span class="mdi mdi-open-in-new pe-2"> </span>Start
                                                                        </a>
                                                                    </div>
                                                                    <div class="course_last_dots me-2">
                                                                        <a href="">
                                                                            <span class="mdi mdi-dots-horizontal"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item_content px-3">
                                                        <div class="items_list mb-2 py-2">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 flex-c">
                                                                    <div class="item_img px-2 py-2">
                                                                        <span class="mdi mdi-image-search-outline fs-30 text_primary_white"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-6 col-sm-6 col-9 flex-m">
                                                                    <div class="item_text w-100">
                                                                        <span class="fs-13 text_black fw-bold d-flex">SEO Certificate course</span>
                                                                        <div class="d-flex flex-m flex-sb">
                                                                            <div>
                                                                                <span class="mdi mdi-check-circle text-success"></span>
                                                                                <span class="fs-12 fw-bold text_black">Approved</span>
                                                                            </div>
                                                                            <span class="text-muted fs-12">3 days ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-4 col-12 flex-m">
                                                                    <div class="item_sub px-3 py-2 w-100">
                                                                        <a class="fs-12 fw-normal btn_main btn_secondary_org" href="">
                                                                            <span class="mdi mdi-open-in-new pe-2"> </span>Start
                                                                        </a>
                                                                    </div>
                                                                    <div class="course_last_dots me-2">
                                                                        <a href="">
                                                                            <span class="mdi mdi-dots-horizontal"></span>
                                                                        </a>
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
                        <div class="col-md-4 mt-4">
                            <div class="wrapper_second">
                                <div class="wrapper_second_content px-4 py-4">
                                    <div class="row">
                                        <div class="head_content d-flex flex-sb">
                                            <div class="title_content">
                                                <span class="fs-15 fw-bold text_black">Recent Uploads</span>
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
                                                                <div class="watched_count text-muted text_black">
                                                                    <span class="mdi mdi-eye text_primary_org pe-1"></span>
                                                                    <span id="count_watched" class="fs-12 fw-bold">342</span>
                                                                    <span class="fs-12">watched</span>
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
                                                                <div class="watched_count text-muted text_black">
                                                                    <span class="mdi mdi-eye text_primary_org pe-1"></span>
                                                                    <span id="count_watched" class="fs-12 fw-bold">342</span>
                                                                    <span class="fs-12">watched</span>
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
                                                                <div class="watched_count text-muted text_black">
                                                                    <span class="mdi mdi-eye text_primary_org pe-1"></span>
                                                                    <span id="count_watched" class="fs-12 fw-bold">342</span>
                                                                    <span class="fs-12">watched</span>
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
                                                                <div class="watched_count text-muted text_black">
                                                                    <span class="mdi mdi-eye text_primary_org pe-1"></span>
                                                                    <span id="count_watched" class="fs-12 fw-bold">342</span>
                                                                    <span class="fs-12">watched</span>
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
                                                                <div class="watched_count text-muted text_black">
                                                                    <span class="mdi mdi-eye text_primary_org pe-1"></span>
                                                                    <span id="count_watched" class="fs-12 fw-bold">342</span>
                                                                    <span class="fs-12">watched</span>
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
                                                <span class="fs-15 fw-bold text_black">Recommended</span>
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
                                                                <div class="watched_count text-muted text_black">
                                                                    <span class="mdi mdi-eye text_primary_org pe-1"></span>
                                                                    <span id="count_watched" class="fs-12 fw-bold">342</span>
                                                                    <span class="fs-12">watched</span>
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
                                                                <div class="watched_count text-muted text_black">
                                                                    <span class="mdi mdi-eye text_primary_org pe-1"></span>
                                                                    <span id="count_watched" class="fs-12 fw-bold">342</span>
                                                                    <span class="fs-12">watched</span>
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
                                                                <div class="watched_count text-muted text_black">
                                                                    <span class="mdi mdi-eye text_primary_org pe-1"></span>
                                                                    <span id="count_watched" class="fs-12 fw-bold">342</span>
                                                                    <span class="fs-12">watched</span>
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
                                                                <div class="watched_count text-muted text_black">
                                                                    <span class="mdi mdi-eye text_primary_org pe-1"></span>
                                                                    <span id="count_watched" class="fs-12 fw-bold">342</span>
                                                                    <span class="fs-12">watched</span>
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
                                                                <div class="watched_count text-muted text_black">
                                                                    <span class="mdi mdi-eye text_primary_org pe-1"></span>
                                                                    <span id="count_watched" class="fs-12 fw-bold">342</span>
                                                                    <span class="fs-12">watched</span>
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
    <script src="./js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>