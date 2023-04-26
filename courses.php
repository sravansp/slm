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
        <?php $title = 'Courses';
        $backurl = './mycourses';
        include 'templates/navbar_back.php'; ?>

        <!-- Body Start  -->

        <section>
            <div class="main student courses pb-4">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-md-8 mt-4">
                            <div class="teachers_list h-full">
                                <div class="lists_teachers p-4">
                                    <div class="row pos-relative">
                                        <div class="titileheader t-left">
                                            <span class="text_black fs-16 fw-bold">Introduction to Information Technology</span>
                                            <div class="course_last_dots me-2">
                                                <a href="">
                                                    <span class=" mdi mdi-dots-horizontal"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="rating_details d-flex flex-m">
                                            <span class="mdi mdi-star text-warning pe-1"></span>
                                            <span id="" class="fs-12 fw-bold pe-2 text_black">4.7</span>
                                            <span class="fs-12 me-3 text_black">Review(<span id="count_review">255</span>)</span>
                                            <span class="mdi mdi-account-school text_primary_org pe-1"></span>
                                            <span id="" class="fs-12 fw-bold pe-1 text_black">452</span>
                                            <span class="fs-12 text_black">Enrolled</span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="video-player_section">
                                            <div class="video-featured">
                                                <div class="flex-video">
                                                    <iframe class="video-frame" id="video-frame" src="./assets/images/iframe_d.png" frameborder="0" allow="autoplay" allowfullscreen="allowfullscreen"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="course_share">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8 col-8 fs-12 d-flex flex-m">
                                                    <a class="td-none" href="http://" target="_blank" rel="noopener noreferrer">
                                                        <div class="bookmark_c me-3 flex-m">
                                                            <span class="material-symbols-outlined fs-20 text_orange pe-1">
                                                                bookmark_add
                                                            </span>
                                                            <span class="text-muted">Bookmark</span>
                                                        </div>
                                                    </a>
                                                    <a class="td-none" href="http://" target="_blank" rel="noopener noreferrer">
                                                        <div class="share_c me-3 flex-m">
                                                            <span class="material-symbols-outlined fs-20 text_primary_org pe-1">
                                                                share
                                                            </span>
                                                            <span class="text-muted">Share</span>
                                                        </div>
                                                    </a>
                                                    <a class="td-none" href="http://" target="_blank" rel="noopener noreferrer">
                                                        <div class="issue_c flex-m">
                                                            <span class="material-symbols-outlined fs-20 text_orange pe-1">
                                                                flag
                                                            </span>
                                                            <span class="text-muted">Report</span>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="col-lg-4 col-md-4 col-4">
                                                    <div class="askQ  w-100">
                                                        <a href="" class="btn_main fs-12 float-end p-2 bg_secondary_org">
                                                            <span class="mdi mdi-message-text-outline pe-1"></span>
                                                            Ask Question
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2 t-left">
                                        <div>
                                            <img class="w-20" src="./assets/images/student.png" alt="">
                                            <span class="fs-12 text_black fw-bold text-muted">Nizamudheen</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <nav>
                                                <div class="nav nav-tabs nav-tabs-dropdown flex-sb fs-11" id="nav-tab" role="tablist">
                                                    <a class="nav-link active" id="nav-about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
                                                    <a class="nav-link" id="nav-attached-tab" data-bs-toggle="tab" href="#nav-attached" role="tab" aria-controls="nav-attached" aria-selected="false">Attached Files</a>
                                                    <a class="nav-link" id="nav-comments-tab" data-bs-toggle="tab" href="#nav-comments" role="tab" aria-controls="nav-comments" aria-selected="false">Comments</a>
                                                    <a class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" href="#nav-reviews" role="tab" aria-controls="nav-reviews" aria-selected="false">Reviews</a>
                                                    <a class="nav-link" id="nav-project-tab" data-bs-toggle="tab" href="#nav-project" role="tab" aria-controls="nav-project" aria-selected="false">Project</a>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="col-lg-12 text_black t-left">
                                            <div class="tab-content mt-3" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="nav-about-tab">
                                                    <div class="text-overflow">
                                                        <div class="row">
                                                            <div class="title_about">
                                                                <span class="fs-18 fw-bold ">Introduction to Information Technology</span>
                                                            </div>
                                                            <div class="details_about fs-13 pt-2">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="title_about">
                                                                <span class="fs-18 fw-bold">What you will learn</span>
                                                            </div>
                                                            <div class="details_about fa_ul fs-13 pt-2">
                                                                <ul>
                                                                    <li>Work as a freelance web developer.</li>
                                                                    <li>Learn the latest technologies, including Javascript, React, Node and even Web3 development.</li>
                                                                    <li>Build fully-fledged websites and web apps for your startup or business.</li>
                                                                    <li>Learn professional developer best practices.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="title_about">
                                                                <span class="fs-18 fw-bold">Requirements</span>
                                                            </div>
                                                            <div class="details_about fa_ul fs-13 pt-2">
                                                                <ul>
                                                                    <li>No programming experience needed - I'll teach you everything you need to know</li>
                                                                    <li>A computer with access to the internet</li>
                                                                    <li>No paid software required</li>
                                                                    <li>I'll walk you through, step-by-step how to get all the software installed and set up</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="title_about">
                                                                <span class="fs-18 fw-bold">Description</span>
                                                            </div>
                                                            <div class="details_about fa_ul fs-13 pt-2">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn-overflow fs-12 fw-bold">Show more</a>
                                                </div>
                                                <div class="tab-pane fade text_black" id="nav-attached" role="tabpanel" aria-labelledby="nav-attached-tab">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="title_about">
                                                                <span class="fs-18 fw-bold ">Download Files</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="download_files flex-m gap-3">
                                                                <div class="activity-img secondary_ac">
                                                                    <span class="fs-22 mdi mdi-language-html5"></span>
                                                                </div>
                                                                <div>
                                                                    <a class="fs-14 text_black td-none" href="./assets/samples/sample.html" download>basic_template.html</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="download_files flex-m gap-3">
                                                                <div class="activity-img primary_ac">
                                                                    <span class="fs-22 mdi mdi-file-pdf-box"></span>
                                                                </div>
                                                                <div>
                                                                    <a class="fs-14 text_black td-none" href="./assets/samples/sample.pdf" download>digital_ebook.pdf</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="download_files flex-m gap-3">
                                                                <div class="activity-img secondary_ac">
                                                                    <span class="fs-22 mdi mdi-language-html5"></span>
                                                                </div>
                                                                <div>
                                                                    <a class="fs-14 text_black td-none" href="./assets/samples/sample.html" download>hero_section.html</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="download_files flex-m gap-3">
                                                                <div class="activity-img third_ac">
                                                                    <span class="fs-22 mdi mdi-play-box-multiple-outline"></span>
                                                                </div>
                                                                <div>
                                                                    <a class="fs-14 text_black td-none" href="./assets/samples/sample.mp4" download>fundamentals_v1.mp4</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade text_black" id="nav-comments" role="tabpanel" aria-labelledby="nav-comments-tab">
                                                    <p>comments</p>
                                                    <p>comments</p>
                                                    <p>comments</p>
                                                </div>
                                                <div class="tab-pane fade text_black" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                                    <p>reviews</p>
                                                    <p>reviews</p>
                                                    <p>reviews</p>
                                                </div>
                                                <div class="tab-pane fade text_black" id="nav-project" role="tabpanel" aria-labelledby="nav-project-tab">
                                                    <p>project</p>
                                                    <p>project</p>
                                                    <p>project</p>
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
                                                <span class="fs-15 fw-bold text_black">Course Content</span>
                                            </div>
                                            <div>
                                                <a class="fs-11 text_primary_org" href="">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="content_body p-2">
                                            <div class="content_items">
                                                <div class="container_accordian">
                                                    <div class="wrapper">
                                                        <button class="toggle_acco">
                                                            <span class="fs-14 fw-bold text_black">Lesson 1 : Getting Started</span>
                                                            <i class="fas fa-chevron-down fs-13 icon_"></i>
                                                        </button>

                                                        <div class="content_playlist">
                                                            <div class="total_legnth_parts fs-9 fw-bold text_black">
                                                                <span>12 min</span>
                                                                <span>6 parts</span>
                                                            </div>
                                                            <ul class="video-list mobile-list hide">
                                                                <li class="play_li flex-m flex-sb my-3 active-video pause completed" data-url="https://www.youtube.com/embed/LXb3EKWsInQ">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <i class="fas fa-check icon_video_play"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Introduction</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">2:00</span>
                                                                </li>
                                                                <li class="play_li flex-m flex-sb my-3 pause" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <i class="fas fa-play icon_video_play"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Basic usage of html</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">4:00</span>
                                                                </li>
                                                                <li class=" flex-m flex-sb my-3 locked" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <!-- <i class="fas fa-play icon_video_play"></i> -->
                                                                            <i class="fas fa-lock"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Cascading style sheet</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">3:00</span>
                                                                </li>
                                                                <li class=" flex-m flex-sb my-3 locked" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <!-- <i class="fas fa-play icon_video_play"></i> -->
                                                                            <i class="fas fa-lock"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">What is Javascript ?</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">4:00</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="wrapper">
                                                        <button class="toggle_acco">
                                                            <span class="fs-14 fw-bold text_black">Lesson 2 : Beginner Level</span>
                                                            <i class="fas fa-chevron-down fs-13 icon_"></i>
                                                        </button>
                                                        <div class="content_playlist">
                                                            <div class="total_legnth_parts fs-9 fw-bold text_black">
                                                                <span>12 min</span>
                                                                <span>6 parts</span>
                                                            </div>
                                                            <ul class="video-list mobile-list hide">
                                                                <li class="play_li flex-m flex-sb my-3 active-video pause" data-url="https://www.youtube.com/embed/LXb3EKWsInQ">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <i class="fas fa-play icon_video_play"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Introduction</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">2:00</span>
                                                                </li>
                                                                <li class="play_li flex-m flex-sb my-3 pause" data-url="4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <i class="fas fa-play icon_video_play"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Basic usage of html</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">4:00</span>
                                                                </li>
                                                                <li class=" flex-m flex-sb my-3 locked" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <!-- <i class="fas fa-play icon_video_play"></i> -->
                                                                            <i class="fas fa-lock"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Cascading style sheet</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">3:00</span>
                                                                </li>
                                                                <li class=" flex-m flex-sb my-3 locked" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <!-- <i class="fas fa-play icon_video_play"></i> -->
                                                                            <i class="fas fa-lock"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">What is Javascript ?</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">4:00</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="wrapper">
                                                        <button class="toggle_acco">
                                                            <span class="fs-14 fw-bold text_black">Lesson 3 : Usage of GA4</span>
                                                            <i class="fas fa-chevron-down fs-13 icon_"></i>
                                                        </button>
                                                        <div class="content_playlist">
                                                            <div class="total_legnth_parts fs-9 fw-bold text_black">
                                                                <span>12 min</span>
                                                                <span>6 parts</span>
                                                            </div>
                                                            <ul class="video-list mobile-list hide">
                                                                <li class="play_li flex-m flex-sb my-3 active-video pause" data-url="https://www.youtube.com/embed/LXb3EKWsInQ">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <i class="fas fa-play icon_video_play"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Introduction</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">2:00</span>
                                                                </li>
                                                                <li class="play_li flex-m flex-sb my-3 pause" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <i class="fas fa-play icon_video_play"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Basic usage of html</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">4:00</span>
                                                                </li>
                                                                <li class=" flex-m flex-sb my-3 locked" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <!-- <i class="fas fa-play icon_video_play"></i> -->
                                                                            <i class="fas fa-lock"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Cascading style sheet</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">3:00</span>
                                                                </li>
                                                                <li class=" flex-m flex-sb my-3 locked" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <!-- <i class="fas fa-play icon_video_play"></i> -->
                                                                            <i class="fas fa-lock"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">What is Javascript ?</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">4:00</span>
                                                                </li>
                                                            </ul>
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
                                                <span class="fs-15 fw-bold text_black">Course Content</span>
                                            </div>
                                            <div>
                                                <a class="fs-11 text_primary_org" href="">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="content_body p-2">
                                            <div class="content_items">
                                                <div class="container_accordian">
                                                    <div class="wrapper">
                                                        <button class="toggle_acco">
                                                            <span class="fs-14 fw-bold text_black">Assessment 1 : HTML</span>
                                                            <i class="fas fa-chevron-down fs-13 icon_"></i>
                                                        </button>

                                                        <div class="content_playlist">
                                                            <div class="total_legnth_parts fs-9 fw-bold text_black">
                                                                <span>12 min</span>
                                                                <span>6 parts</span>
                                                            </div>
                                                            <ul class="video-list mobile-list hide">
                                                                <li class="play_li flex-m flex-sb my-3 active-video pause" data-url="https://www.youtube.com/embed/LXb3EKWsInQ">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <i class="fas fa-play icon_video_play"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Introduction</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">2:00</span>
                                                                </li>
                                                                <li class="play_li flex-m flex-sb my-3 pause" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <i class="fas fa-play icon_video_play"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Basic usage of html</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">4:00</span>
                                                                </li>
                                                                <li class=" flex-m flex-sb my-3 locked" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <!-- <i class="fas fa-play icon_video_play"></i> -->
                                                                            <i class="fas fa-lock"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">Cascading style sheet</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">3:00</span>
                                                                </li>
                                                                <li class=" flex-m flex-sb my-3 locked" data-url="https://www.youtube.com/embed/njX2bu-_Vw4">
                                                                    <div>
                                                                        <button class="play_small_btn me-2">
                                                                            <!-- <i class="fas fa-play icon_video_play"></i> -->
                                                                            <i class="fas fa-lock"></i>
                                                                        </button>
                                                                        <span class="fs-13 fw-bold text_primary_white">What is Javascript ?</span>
                                                                    </div>
                                                                    <span class="fs-13 fw-bold text_primary_white">4:00</span>
                                                                </li>
                                                            </ul>
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


    <!-- ==== Datatable js -->
    <!-- <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script> -->


    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>