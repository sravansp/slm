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

    <main class="home">
        <nav class="navbar navbar-fixed-top">
            <div class="navbar_container navbar-menu-wrapper d-grid align-items-stretch">
                <div class="title_header"><span class="main_title text_black">Chats</span></div>
                <div class="search_box align-self-center d-none d-md-block">

                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group search_main">
                            <input type="text" class="form-control bg-transparent border-0 p-l-25" placeholder="Search ..  student name, courses, etc">
                            <div class="input-group-prepend bg-transparent hand">
                                <img class="input-group-text bg-transparent border-0 mdi mdi-magnify" src="./assets/images/search.png"></img>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="Notify_content align-self-center justify-self-center;">
                    <div class="mode toggle-switch">
                        <div class="sun-moon switch">
                            <i class="material-symbols-outlined dark_mode moon text_black">
                                clear_night
                            </i>
                            <i class="material-symbols-outlined sun text_black">
                                light_mode
                            </i>
                            <!-- <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i> -->
                        </div>
                    </div>
                    <span class="material-symbols-outlined text_black">
                        notifications_active
                    </span>
                    <span class="material-symbols-rounded text_black">
                        mail
                    </span>
                </div>
                <div class="user_details align-self-center">
                    <div class="Name_email d-grid">
                        <span class="author_name text-end text_black">Admin User</span>
                        <span class="author_email text-end text_black">admin@wisdomcloud.com</span>
                    </div>
                    <div class="user_image ms-3">
                        <img src="./assets/images/user1.png" class="rounded-circle" alt="">
                    </div>
                </div>
            </div>
        </nav>

        <!-- Body Start  -->

        <section>
            <div class="main pb-4">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-md-8 mt-4">
                            <div class="teachers_list h-full">
                                <div class="lists_teachers p-4">
                                    <div class="row">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="wrapper_second">

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