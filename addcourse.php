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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./assets/plugins/quill/quill.snow.css">
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style.responsive.css">
    <link rel="stylesheet" href="./css/util.css">
</head>

<body class="light mode">
    <?php include 'templates/sidebar.php'; ?>

    <div class="overlay_section"></div>
    <main class="home">
        <?php $title = 'Add Course';
        $backurl = './mycourses-teacher.php';
        include 'templates/navbar_back.php'; ?>

        <!-- Body Start  -->

        <section>
            <div class="main teacher pb-4">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-md-12 mt-4">
                            <div class="teachers_list h-full overflow-hidden">
                                <nav>
                                    <div class="nav nav-tabs nav-tabs-dropdown fs-11" id="nav-tab" role="tablist">
                                        <div class="d-flex justify-content-evenly w-100">
                                            <div class="w-100 t-center">
                                                <a class="nav-link active" id="nav-step1-tab" data-bs-toggle="tab" href="#step1" role="tab" aria-controls="step1" aria-selected="true">Step 1</a>
                                            </div>
                                            <div class="w-100 t-center">
                                                <a class="nav-link" id="nav-step2-tab" data-bs-toggle="tab" href="#nav-step2" role="tab" aria-controls="nav-step2" aria-selected="false">Step 2</a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                                <div class="lists_teachers addcourse p-4">
                                    <div class="tab-content mt-3" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="nav-step1-tab">
                                            <form class="g-3 needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="input_field pb-4 animate fadeRight">
                                                            <label class="mb-2 fs-11 fw-bold text_black" for="">Course Name <span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please Enter a Course Name.
                                                            </div>
                                                        </div>
                                                        <div class="input_field pb-4 pos-relative animate fadeRight delay-1">
                                                            <label class="mb-2 fs-11 fw-bold text_black" for="">Course Code</label>
                                                            <input class="form-control" placeholder="will auto generate for you" type="text">
                                                            <a class="reload_code" href=""><i class="fas fa-redo text-muted fs-20"></i></a>
                                                        </div>
                                                        <div class="input_field pb-4 animate fadeRight delay-2">
                                                            <label class="mb-2 fs-11 fw-bold text_black" for="">Photo</label>
                                                            <div class="col-ting mb-4">
                                                                <div class="control-group file-upload" id="file-upload1">
                                                                    <div class="image-box text-center">
                                                                        <p><i class="far fa-images fs-50"></i></p>
                                                                        <img src="" alt="">
                                                                    </div>
                                                                    <div class="controls" style="display: none;">
                                                                        <input type="file" name="contact_image_1" />
                                                                    </div>
                                                                </div>
                                                                <div class="pro_pic_text">
                                                                    <span>Image file size below 300kb</span>
                                                                    <span>File format : jpg, png, webp, avif</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input_field pb-4">
                                                            <div class="row g-sm-3 g-2">
                                                                <div class="col-lg-5 col-sm-5 col-12 animate fadeRight delay-3">
                                                                    <button class="btn_main btn_primary_org w-100 t-center" type="button" onclick="sweetAlert1(7)">Create</button>
                                                                </div>
                                                                <div class="col-lg-5 col-sm-5 col-12 animate fadeRight delay-4">
                                                                    <button class="btn_main btn_secondary_org w-100 t-center">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade text_black" id="nav-step2" role="tabpanel" aria-labelledby="nav-step2-tab">
                                            <form action="#" class="g-3 needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="input_field pb-4">
                                                                <label class="mb-2 fs-11 fw-bold text_black animate fadeRight" for="">About</label>
                                                                <div class="editor_section animate fadeRight delay-1">
                                                                    <div id="editor"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="input_field pb-4">
                                                                    <div class="form-group" data-select2-id="67">
                                                                        <label class="mb-2 fs-11 fw-bold text_black animate fadeRight delay-2" for="">Category</label>
                                                                        <select id="selectInput1" class="animate fadeRight delay-3 form-control select2-show-search form-select" name="name1" data-placeholder="Choose one" data-select2-id="11" tabindex="-1" aria-hidden="true">
                                                                            <option label="Choose one" data-select2-id="11"></option>
                                                                            <option value="AZ" data-select2-id="68">Arizona</option>
                                                                            <option value="CO" data-select2-id="69">Colorado</option>
                                                                            <option value="ID" data-select2-id="70">Idaho</option>
                                                                            <option value="MT" data-select2-id="71">Montana</option>
                                                                            <option value="NE" data-select2-id="72">Nebraska</option>
                                                                            <option value="NM" data-select2-id="73">New Mexico</option>
                                                                            <option value="ND" data-select2-id="74">North Dakota</option>
                                                                            <option value="UT" data-select2-id="75">Utah</option>
                                                                            <option value="WY" data-select2-id="76">Wyoming</option>
                                                                            <option value="AL" data-select2-id="77">Alabama</option>
                                                                            <option value="AR" data-select2-id="78">Arkansas</option>
                                                                            <option value="IL" data-select2-id="79">Illinois</option>
                                                                            <option value="IA" data-select2-id="80">Iowa</option>
                                                                            <option value="KS" data-select2-id="81">Kansas</option>
                                                                            <option value="KY" data-select2-id="82">Kentucky</option>
                                                                            <option value="LA" data-select2-id="83">Louisiana</option>
                                                                            <option value="MN" data-select2-id="84">Minnesota</option>
                                                                            <option value="MS" data-select2-id="85">Mississippi</option>
                                                                            <option value="MO" data-select2-id="86">Missouri</option>
                                                                            <option value="OK" data-select2-id="87">Oklahoma</option>
                                                                            <option value="SD" data-select2-id="88">South Dakota</option>
                                                                            <option value="TX" data-select2-id="89">Texas</option>
                                                                            <option value="TN" data-select2-id="90">Tennessee</option>
                                                                            <option value="WI" data-select2-id="91">Wisconsin</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input_field pb-4 pos-relative">
                                                                    <label class="mb-2 fs-11 fw-bold text_black animate fadeRight delay-4" for="">Sub Category</label>
                                                                    <select id="selectInput2" class="animate fadeRight delay-5 form-control select2-show-search form-select select2-hidden-accessible" name="name2" data-placeholder="Choose one" data-select2-id="14" tabindex="-1" aria-hidden="true">
                                                                        <option label="Choose one" data-select2-id="14"></option>
                                                                        <option value="AZ" data-select2-id="1">Arizona</option>
                                                                        <option value="CO" data-select2-id="2">Colorado</option>
                                                                        <option value="ID" data-select2-id="3">Idaho</option>
                                                                        <option value="MT" data-select2-id="4">Montana</option>
                                                                        <option value="NE" data-select2-id="5">Nebraska</option>
                                                                        <option value="NM" data-select2-id="6">New Mexico</option>
                                                                        <option value="ND" data-select2-id="7">North Dakota</option>
                                                                        <option value="UT" data-select2-id="8">Utah</option>
                                                                        <option value="WY" data-select2-id="9">Wyoming</option>
                                                                        <option value="AL" data-select2-id="10">Alabama</option>
                                                                        <option value="AR" data-select2-id="11">Arkansas</option>
                                                                        <option value="IL" data-select2-id="12">Illinois</option>
                                                                        <option value="IA" data-select2-id="13">Iowa</option>
                                                                        <option value="KS" data-select2-id="14">Kansas</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="animate fadeUp">
                                                                    <div class="container_accordian">
                                                                        <div class="wrapper animate fadeUp">
                                                                            <button type="button" class="toggle_acco_lesson">
                                                                                <span class="fs-14 fw-bold text_black" id="lesson_title">Lesson 1 : Getting Started</span>
                                                                                <div class="flex-m flex-sb gap-3 toggle_acco_icons">
                                                                                    <a class="text_primary_org op-0-4" href="">
                                                                                        <i class="fas fa-pencil-alt"></i>
                                                                                    </a>
                                                                                    <a class="text-danger op-0-4" href="">
                                                                                        <i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                    <i class="fas fa-chevron-down fs-13 icon_"></i>
                                                                                </div>
                                                                            </button>

                                                                            <div class="content_playlist_lesson subacco_start">
                                                                                <div class="sub_accordian_section p-3">
                                                                                    <div class="wrapper animate fadeRight">
                                                                                        <button type="button" class="toggle_acco_parts">
                                                                                            <span class="fs-14 fw-bold text_black">Part 1</span>
                                                                                            <div class="flex-m flex-sb gap-3 toggle_acco_icons">
                                                                                                <a class="text_primary_org op-0-4" href="">
                                                                                                    <i class="fas fa-pencil-alt"></i>
                                                                                                </a>
                                                                                                <a class="text-danger op-0-4" href="">
                                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                                </a>
                                                                                                <i class="fas fa-chevron-down fs-13 icon_parts"></i>
                                                                                            </div>
                                                                                        </button>

                                                                                        <div class="content_playlist_parts">
                                                                                            <div class="sub_accordian_section py-3">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-5">
                                                                                                        <div class="input_field pb-4 pos-relative animate fadeRight delay-1">
                                                                                                            <input class="form-control" placeholder="Enter a lesson part name" type="text">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-5">
                                                                                                        <div class="input_field">
                                                                                                            <div class="row g-sm-3 g-2">
                                                                                                                <div class="col-lg-5 col-md-6 col-sm-5 col-12 animate fadeRight delay-3">
                                                                                                                    <div class='file file--upload'>
                                                                                                                        <label for='input-file' class="btn_main w-100">
                                                                                                                            <span class="mdi mdi-play-box-multiple fs-20"></span>Upload Video
                                                                                                                        </label>
                                                                                                                        <input id='input-file' type='file' />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-lg-5 col-md-6 col-sm-5 col-12 animate fadeRight delay-4">
                                                                                                                    <div class='file file--upload'>
                                                                                                                        <label for='input-file' class="btn_main w-100">
                                                                                                                            <span class="mdi mdi-text-box-outline fs-20"></span>Assesment
                                                                                                                        </label>
                                                                                                                        <input id='input-file' type='file' />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <div class="col-md-2 mt-4">
                                                                                            <button type="button" id="addpart" class="btn_main btn_add_part trans_btn w-100 flex-c">
                                                                                                <span class="mdi mdi-plus pe-2"></span>
                                                                                                Add Part
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wrapper animate fadeUp">
                                                                            <button type="button" class="toggle_acco_lesson">
                                                                                <span class="fs-14 fw-bold text_black" id="lesson_title">Lesson 2 : Beginner Level</span>
                                                                                <div class="flex-m flex-sb gap-3 toggle_acco_icons">
                                                                                    <a class="text_primary_org op-0-4" href="">
                                                                                        <i class="fas fa-pencil-alt"></i>
                                                                                    </a>
                                                                                    <a class="text-danger op-0-4" href="">
                                                                                        <i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                    <i class="fas fa-chevron-down fs-13 icon_"></i>
                                                                                </div>
                                                                            </button>

                                                                            <div class="content_playlist_lesson subacco_start">
                                                                                <div class="sub_accordian_section p-3">
                                                                                    <div class="wrapper animate fadeRight">
                                                                                        <button type="button" class="toggle_acco_parts">
                                                                                            <span class="fs-14 fw-bold text_black">Part 1</span>
                                                                                            <div class="flex-m flex-sb gap-3 toggle_acco_icons">
                                                                                                <a class="text_primary_org op-0-4" href="">
                                                                                                    <i class="fas fa-pencil-alt"></i>
                                                                                                </a>
                                                                                                <a class="text-danger op-0-4" href="">
                                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                                </a>
                                                                                                <i class="fas fa-chevron-down fs-13 icon_parts"></i>
                                                                                            </div>
                                                                                        </button>

                                                                                        <div class="content_playlist_parts">
                                                                                            <div class="sub_accordian_section py-3">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-5">
                                                                                                        <div class="input_field pb-4 pos-relative animate fadeRight delay-1">
                                                                                                            <input class="form-control" placeholder="Enter a lesson part name" type="text">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-5">
                                                                                                        <div class="input_field">
                                                                                                            <div class="row g-sm-3 g-2">
                                                                                                                <div class="col-lg-5 col-md-6 col-sm-5 col-12 animate fadeRight delay-3">
                                                                                                                    <div class='file file--upload'>
                                                                                                                        <label for='input-file' class="btn_main w-100">
                                                                                                                            <span class="mdi mdi-play-box-multiple fs-20"></span>Upload Video
                                                                                                                        </label>
                                                                                                                        <input id='input-file' type='file' />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-lg-5 col-md-6 col-sm-5 col-12 animate fadeRight delay-4">
                                                                                                                    <div class='file file--upload'>
                                                                                                                        <label for='input-file' class="btn_main w-100">
                                                                                                                            <span class="mdi mdi-text-box-outline fs-20"></span>Assesment
                                                                                                                        </label>
                                                                                                                        <input id='input-file' type='file' />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="wrapper animate fadeRight">
                                                                                        <button type="button" class="toggle_acco_parts">
                                                                                            <span class="fs-14 fw-bold text_black">Part 2</span>
                                                                                            <div class="flex-m flex-sb gap-3 toggle_acco_icons">
                                                                                                <a class="text_primary_org op-0-4" href="">
                                                                                                    <i class="fas fa-pencil-alt"></i>
                                                                                                </a>
                                                                                                <a class="text-danger op-0-4" href="">
                                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                                </a>
                                                                                                <i class="fas fa-chevron-down fs-13 icon_parts"></i>
                                                                                            </div>
                                                                                        </button>

                                                                                        <div class="content_playlist_parts">
                                                                                            <div class="sub_accordian_section py-3">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-5">
                                                                                                        <div class="input_field pb-4 pos-relative animate fadeRight delay-1">
                                                                                                            <input class="form-control" placeholder="Enter a lesson part name" type="text">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-5">
                                                                                                        <div class="input_field">
                                                                                                            <div class="row g-sm-3 g-2">
                                                                                                                <div class="col-lg-5 col-md-6 col-sm-5 col-12 animate fadeRight delay-3">
                                                                                                                    <div class='file file--upload'>
                                                                                                                        <label for='input-file' class="btn_main w-100">
                                                                                                                            <span class="mdi mdi-play-box-multiple fs-20"></span>Upload Video
                                                                                                                        </label>
                                                                                                                        <input id='input-file' type='file' />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-lg-5 col-md-6 col-sm-5 col-12 animate fadeRight delay-4">
                                                                                                                    <div class='file file--upload'>
                                                                                                                        <label for='input-file' class="btn_main w-100">
                                                                                                                            <span class="mdi mdi-text-box-outline fs-20"></span>Assesment
                                                                                                                        </label>
                                                                                                                        <input id='input-file' type='file' />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 mt-4">
                                                                                        <button type="button" id="addpart" class="btn_main btn_add_part trans_btn w-100 flex-c">
                                                                                            <span class="mdi mdi-plus pe-2"></span>
                                                                                            Add Part
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="addlessoninput dis-none">
                                                                <div class="row">
                                                                    <div class="col-md-6 animate fadeUp">
                                                                        <div class="input_field pb-4 pos-relative">
                                                                            <input class="form-control" placeholder="Type a lesson name" id="lessonname" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 animate fadeUp delay-1">
                                                                        <div class="col-md-3">
                                                                            <div class="addlessonbtnmain flex-c">
                                                                                <button type="button" id="lesson_save" class="btn_main btn_add_lesson btn_secondary_org w-100 flex-c">
                                                                                    save
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="addlessonbtn flex-c">
                                                                <div class="col-md-2">
                                                                    <button id="btn_add_lesson" class="animate fadeUp btn_main btn_add_lesson btn_secondary_org w-100 flex-c" type="button">
                                                                        <span class="mdi mdi-plus pe-2"></span>
                                                                        Add lesson
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="input_field">
                                                            <div class="row g-sm-3 g-2 mt-5">
                                                                <div class="col-lg-5 col-sm-5 col-12 animate fadeRight delay-3">
                                                                    <button class="btn_main btn_primary_org w-100 t-center" type="button" onclick="sweetAlert1(8)">Create</button>
                                                                </div>
                                                                <div class="col-lg-5 col-sm-5 col-12 animate fadeRight delay-4">
                                                                    <button class="btn_main btn_secondary_org w-100 t-center">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
    <script src="./assets/plugins/quill/quill.min.js"></script>
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="./js/main.js"></script>

    <script>
        $(function() {

            var Defaults = $.fn.select2.amd.require('select2/defaults');

            $.extend(Defaults.defaults, {
                searchInputPlaceholder: ''
            });

            var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

            var _renderSearchDropdown = SearchDropdown.prototype.render;

            SearchDropdown.prototype.render = function(decorated) {

                // invoke parent method
                var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

                this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

                return $rendered;
            };

            $("#selectInput1").select2({
                searchInputPlaceholder: "Search here...",
            });
            $("#selectInput2").select2({
                searchInputPlaceholder: "Search here...",
            });

        });
    </script>
</body>

</html>