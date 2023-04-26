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
        <?php $title = 'Teacher Details';
        $backurl = './teachers.php';
        include 'templates/navbar_back.php'; ?>

        <!-- Body Start  -->

        <section>
            <div class="main pb-4">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-md-8 mt-4">
                            <div class="teachers_list pos-relative">
                                <div class="lists_teachers p-4">
                                    <div class="row text_black">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="author_profile_pic">
                                                <img class="w-100" src="./assets/images/people.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                            <div class="row">
                                                <div class="text_main ps-2">
                                                    <h5 class="card-title fs-16 mt-2 fw-bold">John Doe</h5>
                                                    <h6 class="card-subtitle mb-2 fs-13">English Teacher</h6>
                                                    <div class="d-flex flex-m gap-5">
                                                        <span class="card-subtitle mb-2 fs-13"><span class="mdi mdi-star text-warning pe-2"></span>4.7</span>
                                                        <span class="card-subtitle mb-2 fs-13">Review (253)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3 flex-m flex-c">
                                                <div class="col-md-3 col-3">
                                                    <div class="circle_div bg_primary_org rounded-circle">
                                                        <span class="mdi mdi-phone icon"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <span class="fs-12">+12 345 6789 0
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row mt-1 flex-m flex-c">
                                                <div class="col-md-3 col-3">
                                                    <div class="circle_div bg_primary_org rounded-circle">
                                                        <span class="mdi mdi-email icon"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <span class="fs-12">johndoe@educraft.com
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="btn_edit">
                                                    <a href="./addteacher.php" class="btn_main float-end btn_secondary_org"><span class="mdi mdi-pencil-outline"></span> Edit</a>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="card_body_text fs-12"><span class="mdi mdi-shield-check text-success pe-2"></span><span class="text-muted">Active</span></div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="card_body_text fs-12"><span class="mdi mdi-account-school-outline text-success pe-2"></span><span class="fw-bold pe-2">452</span><span class="text-muted">enrolled</span></div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="card_body_text fs-12"><span class="fw-bold">Masters in Computer Science</span><br>
                                                    <span class="text-muted">Brookshied University, London</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="deactivating_btn d-flex gap-2">
                                            <div class="btn_deact">
                                                <button onclick="sweetAlert1(2)" type="button" class="btn_main2 btn-third">
                                                    <span class="mdi mdi-pencil-outline pe-3"></span>Deactivate</button>
                                            </div>
                                            <div class="btn_deact">
                                                <button class="btn_main btn_secondary_org" type="button"><span class="mdi mdi-close pe-2"></span>Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teachers_list pb-4 pos-relative mt-4">
                                <div class="lists_teachers p-4">
                                    <div class="row">
                                        <div class="titileheader"><span class="text_black fs-16 fw-bold">John Doe uploaded courses</span></div>
                                    </div>
                                    <div class="row ">
                                        <div class="card_wrapper">
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
                                                                <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                <a href="#" class="fs-11 border-0 px-4 py-2 primary_btn w-100 fw-bold text-white flex-c">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                        <div class="col-md-4 mt-4">
                            <div class="wrapper_second">
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
                                            <div class="content_items">
                                                <div class="item_content px-3 pt-4">
                                                    <div class="items_list d-flex flex-sb flex-m pb-4">
                                                        <div class="item_image_text d-flex flex-sb flex-m">
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
                                                                <div class="item_sub">
                                                                    <span class="fs-12 addReadMore showlesscontent text_black">Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-4">
                                                    <div class="items_list d-flex flex-sb flex-m pb-4">
                                                        <div class="item_image_text d-flex flex-sb flex-m">
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
                                                                <div class="item_sub">
                                                                    <span class="fs-12 addReadMore showlesscontent text_black">Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-4">
                                                    <div class="items_list d-flex flex-sb flex-m pb-4">
                                                        <div class="item_image_text d-flex flex-sb flex-m">
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
                                                                <div class="item_sub">
                                                                    <span class="fs-12 addReadMore showlesscontent text_black">Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-4">
                                                    <div class="items_list d-flex flex-sb flex-m pb-4">
                                                        <div class="item_image_text d-flex flex-sb flex-m">
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
                                                                <div class="item_sub">
                                                                    <span class="fs-12 addReadMore showlesscontent text_black">Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand.Excellent course for web development. Beginner friendly classes are easy to understand</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item_content px-3 pt-4">
                                                    <div class="items_list d-flex flex-sb flex-m pb-4">
                                                        <div class="item_image_text d-flex flex-sb flex-m">
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
                                <div class="wrapper_second_content px-4 py-4">
                                    <div class="row">
                                        <div class="head_content d-flex flex-sb">
                                            <div class="title_content">
                                                <span class="fs-15 fw-bold text_black">Enrolled Students</span>
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
                                                                <img class="rounded-circle w-35" src="./assets/images/student.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">Course Completion : 94%</span>
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
                                                                <img class="rounded-circle w-35" src="./assets/images/student.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">Course Completion : 94%</span>
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
                                                                <img class="rounded-circle w-35" src="./assets/images/student.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">Course Completion : 94%</span>
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
                                                                <img class="rounded-circle w-35" src="./assets/images/student.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">Course Completion : 94%</span>
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
    <script src="./js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>