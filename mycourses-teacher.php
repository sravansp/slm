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
            <div class="main teacher pb-4">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-md-8 mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="top_section_course">
                                        <div class="top_textarea">
                                            <div>
                                                <div class="row">
                                                    <span class="fs-20 fw-bold">Data Science</span>
                                                </div>
                                                <div class="row mt-2">
                                                    <span class="fs-14">Lorem ipsum texLorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="teachers_list pb-4 pos-relative mt-4">
                                        <div class="lists_teachers p-4">
                                            <div class="row">
                                                <div class="flex-m flex-sb">
                                                    <div class="titileheader">
                                                        <span class="text_black fs-16 fw-bold">Uploaded courses list</span>
                                                    </div>
                                                    <div class="rightsidebtn">
                                                        <a class="fs-11 float-end border-0 px-3 py-2 primary_btn fw-bold text-white" href="./addcourse.php"> Add Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="card_wrapper">
                                                    <div class="card mt-3">
                                                        <div class="img_title pos-relative">
                                                            <img src="./assets/images/courses/course1.png" class="card-img-top" alt="Course_img">
                                                            <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                        </div>

                                                        <div class="card-body">
                                                            <h5 class="card-title fs-12 fw-bold">MAC 20311 Analytic Geometry and Calculus 1</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6">
                                                                    <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text">
                                                                        <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text w-100">
                                                                        <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mt-3">
                                                        <div class="img_title pos-relative">
                                                            <img src="./assets/images/courses/course2.png" class="card-img-top" alt="Course_img">
                                                            <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                        </div>

                                                        <div class="card-body">
                                                            <h5 class="card-title fs-12 fw-bold">ACG 2022 Managerial Accounting</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6">
                                                                    <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text">
                                                                        <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text w-100">
                                                                        <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mt-3">
                                                        <div class="img_title pos-relative">
                                                            <img src="./assets/images/courses/course3.png" class="card-img-top" alt="Course_img">
                                                            <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                        </div>

                                                        <div class="card-body">
                                                            <h5 class="card-title fs-12 fw-bold">AST 3018 Astronomy and Astrophysics 1</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6">
                                                                    <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text">
                                                                        <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text w-100">
                                                                        <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mt-3">
                                                        <div class="img_title pos-relative">
                                                            <img src="./assets/images/courses/course4.png" class="card-img-top" alt="Course_img">
                                                            <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                        </div>

                                                        <div class="card-body">
                                                            <h5 class="card-title fs-12 fw-bold">STA 4210 Regression Analysis</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6">
                                                                    <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text">
                                                                        <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text w-100">
                                                                        <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mt-3">
                                                        <div class="img_title pos-relative">
                                                            <img src="./assets/images/courses/course5.png" class="card-img-top" alt="Course_img">
                                                            <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                        </div>

                                                        <div class="card-body">
                                                            <h5 class="card-title fs-12 fw-bold">ACG 2021 Financial Accounting</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6">
                                                                    <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text">
                                                                        <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text w-100">
                                                                        <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mt-3">
                                                        <div class="img_title pos-relative">
                                                            <img src="./assets/images/courses/course6.png" class="card-img-top" alt="Course_img">
                                                            <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                        </div>

                                                        <div class="card-body">
                                                            <h5 class="card-title fs-12 fw-bold">MAC 1140 Precalculus Algebra</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6">
                                                                    <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text">
                                                                        <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text w-100">
                                                                        <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mt-3">
                                                        <div class="img_title pos-relative">
                                                            <img src="./assets/images/courses/course7.png" class="card-img-top" alt="Course_img">
                                                            <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                        </div>

                                                        <div class="card-body">
                                                            <h5 class="card-title fs-12 fw-bold">QMB 3200 813 Quantitative Methods for Business</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6">
                                                                    <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text">
                                                                        <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text w-100">
                                                                        <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mt-3">
                                                        <div class="img_title pos-relative">
                                                            <img src="./assets/images/courses/course8.png" class="card-img-top" alt="Course_img">
                                                            <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                        </div>

                                                        <div class="card-body">
                                                            <h5 class="card-title fs-12 fw-bold">MAT 3503 Functions and Modeling</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6">
                                                                    <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text">
                                                                        <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text w-100">
                                                                        <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mt-3">
                                                        <div class="img_title pos-relative">
                                                            <img src="./assets/images/courses/course9.png" class="card-img-top" alt="Course_img">
                                                            <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                        </div>

                                                        <div class="card-body">
                                                            <h5 class="card-title fs-12 fw-bold">ECO 2013 Principles of Macroeconomics</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6">
                                                                    <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-lg-6 col-6 d-flex">
                                                                    <div class="card_body_text">
                                                                        <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-6 d-flex float-end">
                                                                    <div class="card_body_text w-100">
                                                                        <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="pagination_section d-flex flex-sb flex-m px-4">
                                                <div class="total_pages fs-12 text-muted text_black">Results 1-9 of 42</div>
                                                <div class="pagination_no">
                                                    <div class="wrapper">
                                                        <nav>
                                                            <ul class="pager">
                                                                <li class="pager__item pager__item--prev"><a class="pager__link" href="#">
                                                                        <span class="mdi mdi-chevron-left"></span></a></li>
                                                                <li class="pager__item"><a class="pager__link" href="#">...</a></li>
                                                                <li class="pager__item"><a class="pager__link" href="#">1</a></li>
                                                                <li class="pager__item active"><a class="pager__link" href="#">2</a></li>
                                                                <li class="pager__item"><a class="pager__link" href="#">3</a></li>
                                                                <li class="pager__item"><a class="pager__link" href="#">4</a></li>
                                                                <li class="pager__item"><a class="pager__link" href="#">5</a></li>
                                                                <li class="pager__item"><a class="pager__link" href="#">6</a></li>
                                                                <li class="pager__item"><a class="pager__link" href="#">...</a></li>
                                                                <li class="pager__item pager__item--next"><a class="pager__link" href="#">
                                                                        <span class="mdi mdi-chevron-right"></span></a></li>
                                                            </ul>
                                                        </nav>
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
                                                                <div class="col-lg-3 d-md-none d-lg-block col-md-2 col-sm-2 col-3">
                                                                    <div class="item_img">
                                                                        <img class="w-100 rounded" src="./assets/images/student2.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5 col-md-6 col-5">
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
                                                                <div class="col-lg-4 col-md-6 col-4">
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
                                                                <div class="col-lg-3  d-md-none d-lg-block  col-md-2 col-sm-2 col-3">
                                                                    <div class="item_img">
                                                                        <img class="w-100 rounded" src="./assets/images/people.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5 col-md-6 col-5">
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
                                                                <div class="col-lg-4 col-md-6 col-4">
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
                                                        <div class="col-md-4 col-lg-3 col-2">
                                                            <span class="text_black fs-40 fw-bold">4.7</span>
                                                        </div>
                                                        <div class="col-md-8 col-lg-9 col-2">
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
    <script src="./js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>