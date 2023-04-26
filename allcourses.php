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
    <link rel="stylesheet" href="./assets/plugins/owlcarousel/dist/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style.responsive.css">
    <link rel="stylesheet" href="./css/util.css">
</head>

<body class="light mode">
    <?php include 'templates/sidebar.php'; ?>
    <div class="overlay_section"></div>

    <main class="home">
        <?php $title = 'All Courses';
        include 'templates/navbar.php'; ?>

        <!-- Body Start  -->

        <section>
            <div class="main pb-4">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-md-8 mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="top_section_course">
                                        <div class="top_textarea">
                                            <div>
                                                <div class="row">
                                                    <span class="fs-20 fw-bold">Learn amazing courses yourself</span>
                                                </div>
                                                <div class="row mt-2">
                                                    <span class="fs-14 fw-bold">Get to know all about courses.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-4">
                                    <div class="corousel_area">
                                        <div class="owl-carousel owl-theme" id="owlCategory">
                                            <div class="item">
                                                <a class="corousel_tabs td-none d-flex flex-m flex-c" href="#">
                                                    <span class="mdi mdi-code-tags pe-1 fs-28"></span>
                                                    <span class="text_carousel fs-14">Computer Science</span>
                                                    <span class="mdi mdi-chevron-right opacity-50 ps-1"></span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="corousel_tabs td-none d-flex flex-m flex-c" href="#">
                                                    <span class="mdi mdi-fountain-pen-tip pe-1 fs-28"></span>
                                                    <span class="text_carousel fs-14">Design</span>
                                                    <span class="mdi mdi-chevron-right opacity-50 ps-1"></span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="corousel_tabs td-none d-flex flex-m flex-c" href="#">
                                                    <span class="mdi mdi-calculator-variant-outline pe-1 fs-28"></span>
                                                    <span class="text_carousel fs-14">Mathematics</span>
                                                    <span class="mdi mdi-chevron-right opacity-50 ps-1"></span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="corousel_tabs td-none d-flex flex-m flex-c" href="#">
                                                    <span class="mdi mdi-briefcase-variant-outline pe-1 fs-28"></span>
                                                    <span class="text_carousel fs-14">Business</span>
                                                    <span class="mdi mdi-chevron-right opacity-50 ps-1"></span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="corousel_tabs td-none d-flex flex-m flex-c" href="#">
                                                    <span class="mdi mdi-code-tags pe-1 fs-28"></span>
                                                    <span class="text_carousel fs-14">Computer Science</span>
                                                    <span class="mdi mdi-chevron-right opacity-50 ps-1"></span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="corousel_tabs td-none d-flex flex-m flex-c" href="#">
                                                    <span class="mdi mdi-fountain-pen-tip pe-1 fs-28"></span>
                                                    <span class="text_carousel fs-14">Design</span>
                                                    <span class="mdi mdi-chevron-right opacity-50 ps-1"></span>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="corousel_tabs td-none d-flex flex-m flex-c" href="#">
                                                    <span class="mdi mdi-calculator-variant-outline pe-1 fs-28"></span>
                                                    <span class="text_carousel fs-14">Mathematics</span>
                                                    <span class="mdi mdi-chevron-right opacity-50 ps-1"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-5">
                                    <div class="teachers_list pb-4 h-full">
                                        <div class="lists_teachers p-4">
                                            <div class="row">
                                                <div class="titileheader">
                                                    <span class="text_black fs-16 fw-bold">Popular courses in Machine Learning</span>
                                                </div>
                                            </div>
                                            <div class="row text_black">
                                                <div class="card_wrapper_carousel">
                                                    <div class="owl-carousel owl-theme" id="owlPopular">
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide1.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide2.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide3.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide1.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide3.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide2.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="titileheader">
                                                    <span class="text_black fs-16 fw-bold">Recently Viewed Courses</span>
                                                </div>
                                            </div>
                                            <div class="row text_black">
                                                <div class="card_wrapper_carousel">
                                                    <div class="owl-carousel owl-theme" id="owlRecent">
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide4.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide5.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide6.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide5.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide6.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/slide1/slide4.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="titileheader">
                                                    <span class="text_black fs-16 fw-bold">Learn a new skill in 30 mins</span>
                                                </div>
                                            </div>
                                            <div class="row text_black">
                                                <div class="card_wrapper_carousel">
                                                    <div class="owl-carousel owl-theme" id="owlNewSkill">
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/course_img.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/course_img.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/course_img.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/course_img.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/course_img.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="card mt-3">
                                                                <div class="img_title pos-relative">
                                                                    <img src="./assets/images/course_img.png" class="card-img-top" alt="Course_img">
                                                                    <div class="subject_blur pos-absolute"><span class="fs-10 text-white ps-3">Web 3</span></div>
                                                                </div>

                                                                <div class="card-body">
                                                                    <h5 class="card-title fs-12 fw-bold">Machine learning fundamentals for Beginners</h5>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <span class="fs-10 text-muted">Rashid Muneer</span>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="text-muted card_body_text float-end"><span class="mdi mdi-star text-warning pe-2"></span><span class="fs-10">4.7</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-television-play text-success"></span><span class="fw-bold">11</span><span class="text-muted">Lessons</span></div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text fs-10"><span class="mdi mdi-text-box-outline text-success"></span><span class="fw-bold">4</span><span class="text-muted">Assignments</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-lg-6 d-flex">
                                                                            <div class="card_body_text">
                                                                                <div class="text-muted card_body_text fs-10"><span class="mdi mdi-clock-time-four-outline text-success"></span><span class="">4 hr 53 mins</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 d-flex float-end">
                                                                            <div class="card_body_text w-100">
                                                                                <a onclick="sweetAlert1(5);" href="#" class="fs-11 border-0 px-4 text-nowrap py-2 primary_btn w-100 fw-bold text-white flex-c">Enroll Now</a>
                                                                            </div>
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
    <script src="./assets/plugins/owlcarousel/dist/owl.carousel.min.js"></script>
    <script src="./js/carousel.js"></script>
    <script src="./js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>