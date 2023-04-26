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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style.responsive.css">
    <link rel="stylesheet" href="./css/util.css">
</head>

<body class="light mode">
    <?php include 'templates/sidebar.php'; ?>

    <div class="overlay_section"></div>
    <main class="home">
        <?php $title = 'Add Teacher';
        $backurl = './teachers.php';
        include 'templates/navbar_back.php'; ?>

        <!-- Body Start  -->

        <section>
            <div class="main pb-4">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-md-12 mt-4">
                            <div class="teachers_list h-full">
                                <div class="lists_teachers p-4">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="profile_pic">
                                                    <label class="mb-2 fs-11 fw-bold text_black" for="">Photo</label>
                                                    <div class="upload">
                                                        <input type="file" title="" class="drop-here">
                                                        <div class="text text-drop">drop here</div>
                                                        <div class="text text-upload">uploading</div>
                                                        <svg class="progress-wrapper" width="100" height="100">
                                                            <circle class="progress" r="30" cx="50" cy="50"></circle>
                                                        </svg>
                                                        <svg class="check-wrapper" width="130" height="130">
                                                            <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                                                        </svg>
                                                        <div class="shadow"></div>
                                                    </div>
                                                    <div class="pro_pic_text">
                                                        <span>Image file size below 300kb</span>
                                                        <span>File format : jpg, png, webp, avif</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input_field pb-4">
                                                    <label class="mb-2 fs-11 fw-bold text_black" for="">First Name</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="input_field pb-4">
                                                    <label class="mb-2 fs-11 fw-bold text_black" for="">Email</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="input_field pb-4">
                                                    <label class="mb-2 fs-11 fw-bold text_black" for="">Place</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="input_field pb-4">
                                                    <label class="mb-2 fs-11 fw-bold text_black" for="">Education</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="input_field pb-4">
                                                    <div class="btn_group d-flex">
                                                        <button onclick="sweetAlert1(1)" class="btn_main btn_primary_org me-3" type="button">
                                                            <span class="mdi mdi-content-save-check-outline pe-2"></span>Save</button>
                                                        <button class="btn_main btn_secondary_org" type="button"><span class="mdi mdi-close pe-2"></span>Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input_field pb-4">
                                                    <label class="mb-2 fs-11 fw-bold text_black" for="">Last Name</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="input_field pb-4">
                                                    <label class="mb-2 fs-11 fw-bold text_black" for="">Phone</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="input_field pb-4">
                                                    <label class="mb-2 fs-11 fw-bold text_black" for="">Status</label>
                                                    <div class="toggel_inputs">
                                                        <!-- Switch -->
                                                        <label class="text-muted fs-10 ms-4 text_black" for="s1">Active</label>
                                                        <input type="checkbox" class="switch" name="s1" id="s1">
                                                    </div>
                                                </div>
                                                <div class="input_field pb-4">
                                                    <label class="mb-2 fs-11 fw-bold text_black" for="">University</label>
                                                    <input class="form-control" type="text">
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
        </section>
    </main>


    <div class="dimmer active">
        <div class="lds-hourglass"></div>
    </div>

    <!-- plugins:js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        uploader()
    </script>
</body>

</html>