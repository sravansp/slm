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
        <?php $title = 'Students';
        include 'templates/navbar.php'; ?>

        <!-- Body Start  -->

        <section>
            <div class="main pb-4">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-md-8 mt-4">
                            <div class="teachers_list h-full">
                                <div class="lists_teachers p-4">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <nav>
                                                <div class="nav nav-tabs fs-11" id="nav-tab" role="tablist">
                                                    <a class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">All Students</a>
                                                    <a class="nav-link" id="nav-mathematics-tab" data-bs-toggle="tab" href="#nav-mathematics" role="tab" aria-controls="nav-mathematics" aria-selected="false">Mathematics</a>
                                                    <a class="nav-link" id="nav-science-tab" data-bs-toggle="tab" href="#nav-science" role="tab" aria-controls="nav-science" aria-selected="false">Science</a>
                                                    <a class="nav-link" id="nav-computer-tab" data-bs-toggle="tab" href="#nav-computer" role="tab" aria-controls="nav-computer" aria-selected="false">Computer Science</a>
                                                    <a class="nav-link" id="" data-bs-toggle="" href="" role="" aria-controls="" aria-selected="false">Filter</a>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="./addstudent.php" class="fs-11 float-end border-0 px-3 py-2 primary_btn fw-bold text-white"> Add Student</a>
                                        </div>
                                        <div class="tab-content mt-3" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                                                <div class="panal_table mt-2">
                                                    <table id="example" class="display" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Name <span class="mdi mdi-chevron-down ps-1 text_primary_org"></span></th>
                                                                <th>Id <span class="mdi mdi-chevron-down ps-1 text_primary_org"></span></th>
                                                                <th>Joining Date <span class="mdi mdi-chevron-down ps-1 text_primary_org"></span></th>
                                                                <th>Class <span class="mdi mdi-chevron-down ps-1 text_primary_org"></span></th>
                                                                <th>Phone <span class="mdi mdi-chevron-down ps-1 text_primary_org"></span></th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>
                                                            <tr class='clickable-row' data-href='./studentdetails.php'>
                                                                <td class=" d-flex gap-3 flex-m">
                                                                    <span class="item_img">
                                                                        <img class="rounded-circle w-30" src="./assets/images/student.png" alt="">
                                                                    </span>
                                                                    <span>Muhammad Ali</span>
                                                                </td>
                                                                <td>#001553</td>
                                                                <td>Jun 3, 2023</td>
                                                                <td>8th</td>
                                                                <td class="d-flex gap-3 flex-m">
                                                                    <span class="circle_div bg_primary_org rounded-circle">
                                                                        <span class="mdi mdi-phone icon"></span>
                                                                    </span>
                                                                    <span>+971 123456789</span>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade text_black" id="nav-mathematics" role="tabpanel" aria-labelledby="nav-mathematics-tab">
                                                <p>mathematics</p>
                                                <p>mathematics</p>
                                                <p>mathematics</p>
                                            </div>
                                            <div class="tab-pane fade text_black" id="nav-science" role="tabpanel" aria-labelledby="nav-science-tab">
                                                <p>science</p>
                                                <p>science</p>
                                                <p>science</p>
                                            </div>
                                            <div class="tab-pane fade text_black" id="nav-computer" role="tabpanel" aria-labelledby="nav-computer-tab">
                                                <p>computer</p>
                                                <p>computer</p>
                                                <p>computer</p>
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
                                                                <img class="rounded-circle w-30" src="./assets/images/people.png" alt="">
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
                                                                <img class="rounded-circle w-30" src="./assets/images/people.png" alt="">
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
                                                                <img class="rounded-circle w-30" src="./assets/images/people.png" alt="">
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
                                                                <img class="rounded-circle w-30" src="./assets/images/people.png" alt="">
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
                                <div class="wrapper_second_content px-4 py-4">
                                    <div class="row">
                                        <div class="head_content d-flex flex-sb">
                                            <div class="title_content">
                                                <span class="fs-15 fw-bold text_black">Recent Joiner</span>
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
                                                                <img class="rounded-circle w-30" src="./assets/images/people.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">12 June 2023 </span>
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
                                                                <img class="rounded-circle w-30" src="./assets/images/people.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">12 June 2023 </span>
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
                                                                <img class="rounded-circle w-30" src="./assets/images/people.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">12 June 2023 </span>
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
                                                                <img class="rounded-circle w-30" src="./assets/images/people.png" alt="">
                                                            </div>
                                                            <div class="item_text ps-2">
                                                                <span class="fs-14 text_black">John Doe</span><br>
                                                                <span class="fs-14 text_primary_org fw-bold">12 June 2023 </span>
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


    <!-- ==== Datatable js -->
    <!-- <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script> -->


    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>