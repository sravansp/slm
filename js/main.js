const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  sidebarToggle = body.querySelector(".app-sidebar__toggle"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text"),
  dimmer = body.querySelector(".dimmer");

$(window).on("load", function () {
  $(dimmer).removeClass("active"); // Loding Animation
});
$(function () {
  toggleFullScreen();
  AddReadMore();
  navbarFixed();

  $(".sidebar li")
    .find("a")
    .each(function () {
      var text = $(this).attr("href");

      if (window.location.href.includes(text)) {
        $(this).parents("li").addClass("active");
      } else {
        $(this).parents("li").removeClass("active");
      }
    });
  //table row CLICKABLE
  $(".clickable-row").click(function () {
    window.location = $(this).data("href");
  });

  var side_close = localStorage.getItem("side_close");
  if (side_close == "open") {
    $(sidebar).removeClass("close");
    $(sidebar).addClass(side_close);
  }
  var dark_mode = localStorage.getItem("dark_mode");
  if (dark_mode == "dark") {
    $(body).addClass(dark_mode);
  }

  $("#btn_add_lesson").click(function (e) {
    $(".addlessoninput").css("display", "block");
    $("#btn_add_lesson").hide();
  });

  lessonAcco();
  partList();
  initPlayer(); //20/02/2023
  videoPlayList(); //20/02/2023
  // teacher page tabs
  $("#tile-1 .nav-tabs a").click(function () {
    var position = $(this).parent().position();
    var width = $(this).parent().width();
    $("#tile-1 .slider").css({
      left: +position.left,
      width: width,
    });
  });
  var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
  var actPosition = $("#tile-1 .nav-tabs .active").position();
  $("#tile-1 .slider").css({
    left: +actPosition.left,
    width: actWidth,
  });
});

$(toggle).click(function (e) {
  e.preventDefault();
  if ($(sidebar).hasClass("close")) {
    $(sidebar).removeClass("close");
    $(sidebar).addClass("open");
    localStorage.setItem("side_close", "open");
    var side_close = localStorage.getItem("side_close");
    // console.log(side_close);
  } else {
    $(sidebar).addClass("close");
    $(sidebar).removeClass("open");
    $(body).removeClass("sidenav-toggled");
    localStorage.setItem("side_close", "close");
    var side_close = localStorage.getItem("side_close");
    // console.log(side_close);
  }
});
$(body).click(function (e) {
  if ($(body).hasClass("sidenav-toggled") && screen.width < 992) {
    $(".overlay_section").addClass("overlay_home");
  } else {
    $(".overlay_section").removeClass("overlay_home");
  }
});
$(sidebarToggle).click(function (e) {
  e.preventDefault();
  if ($(body).hasClass("sidenav-toggled")) {
    $(body).removeClass("sidenav-toggled");
    $(sidebar).addClass("close");
    $(sidebar).removeClass("open");
  } else {
    $(body).addClass("sidenav-toggled");
    $(sidebar).removeClass("close");
    $(sidebar).addClass("open");
  }
});

$(modeSwitch).click(function (e) {
  e.preventDefault();
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    localStorage.setItem("dark_mode", "dark");
  } else {
    localStorage.setItem("dark_mode", "light");
  }
});

// File Upload
function uploader() {
  var fileUpload = document.querySelector(".upload");

  fileUpload.addEventListener("dragover", function () {
    this.classList.add("drag");
    this.classList.remove("drop", "done");
  });

  fileUpload.addEventListener("dragleave", function () {
    this.classList.remove("drag");
  });

  fileUpload.addEventListener("drop", start, false);
  fileUpload.addEventListener("change", start, false);

  function start() {
    this.classList.remove("drag");
    this.classList.add("drop");
    setTimeout(() => this.classList.add("done"), 3000);
  }
}
// pager

// $(".pager li").click(function () {
//   $(".active").removeClass("active");
//   $(this).addClass("active");
// });
function AddReadMore() {
  //This limit you can set after how much characters you want to show Read More.
  var carLmt = 80;
  // Text to show when text is collapsed
  var readMoreTxt = " ... Read More";
  // Text to show when text is expanded
  var readLessTxt = " Read Less";

  //Traverse all selectors with this class and manupulate HTML part to show Read More
  $(".addReadMore").each(function () {
    if ($(this).find(".firstSec").length) return;

    var allstr = $(this).text();
    if (allstr.length > carLmt) {
      var firstSet = allstr.substring(0, carLmt);
      var secdHalf = allstr.substring(carLmt, allstr.length);
      var strtoadd =
        firstSet +
        "<span class='SecSec'>" +
        secdHalf +
        "</span><span class='readMore'  title='Click to Show More'>" +
        readMoreTxt +
        "</span><span class='readLess' title='Click to Show Less'>" +
        readLessTxt +
        "</span>";
      $(this).html(strtoadd);
    }
  });
  //Read More and Read Less Click Event binding
  $(document).on("click", ".readMore,.readLess", function () {
    $(this)
      .closest(".addReadMore")
      .toggleClass("showlesscontent showmorecontent");
  });
}
function sweetAlert1(id) {
  if (id == 1) {
    Swal.fire({
      title: "Added Successfully",
      icon: "success",
      text: "You have been successfully added a teacher detail!",
      showCancelButton: true,
      confirmButtonText:
        '<a href="./teacherdetails.php"><span class="mdi mdi-content-save-check-outline pe-2"></span>View Profile</a>',
      cancelButtonText: '<span class="mdi mdi-close pe-2 pe-2"></span>Cancel',
      cancelButtonColor: "#4843e01a",
      showClass: {
        popup: "animate__animated animate__fadeIn",
      },
      hideClass: {
        popup: "animate__animated animate__fadeOut",
      },
    });
  } else if (id == 2) {
    Swal.fire({
      title: "Deactivate teacher",
      text: "Are you sure you want to deactivate this teacher  profile",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: '<span class="mdi mdi-close pe-2 pe-2"></span>Cancel',
      confirmButtonText: "Yes",
      showClass: {
        popup: "animate__animated animate__fadeIn",
      },
      hideClass: {
        popup: "animate__animated animate__fadeOut",
      },
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire("Deactivated!", "Deactivated Successfully.", "success");
      }
    });
  } else if (id == 3) {
    Swal.fire({
      title: "Added Successfully",
      icon: "success",
      text: "You have been successfully added a student details!",
      showCancelButton: true,
      confirmButtonText:
        '<a href="./studentdetails.php"><span class="mdi mdi-content-save-check-outline pe-2"></span>View Profile</a>',
      cancelButtonText: '<span class="mdi mdi-close pe-2 pe-2"></span>Cancel',
      cancelButtonColor: "#4843e01a",
      showClass: {
        popup: "animate__animated animate__fadeIn",
      },
      hideClass: {
        popup: "animate__animated animate__fadeOut",
      },
    });

    // 13/02/2023
  } else if (id == 4) {
    Swal.fire({
      title: "Deactivate Student",
      text: "Are you sure you want to deactivate this Student  profile",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: '<span class="mdi mdi-close pe-2 pe-2"></span>Cancel',
      confirmButtonText: "Yes",
      showClass: {
        popup: "animate__animated animate__fadeIn",
      },
      hideClass: {
        popup: "animate__animated animate__fadeOut",
      },
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire("Deactivated!", "Deactivated Successfully.", "success");
      }
    });
    // 15/02/2023
  } else if (id == 5) {
    Swal.fire({
      title: "Are you sure ?",
      text: "Please confirm before sending the enrollment request.",
      iconHtml: '<img src="../assets/images/popupAllCourse.svg">',
      customClass: {
        icon: "no-border",
      },

      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: '<span class="mdi mdi-close pe-2 pe-2"></span>Cancel',
      confirmButtonText: "Yes",
      showClass: {
        popup: "animate__animated animate__fadeIn",
      },
      hideClass: {
        popup: "animate__animated animate__fadeOut",
      },
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Enrollment Request Sent",
          text: "You will be notified when teacher approved the course!",
          icon: "success",
          showCancelButton: true,
          cancelButtonColor: "#3085d6",
          confirmButtonColor: "#d33",
          cancelButtonText: '<span class="mdi mdi-check pe-2"></span>Okay',
          confirmButtonText:
            '<a href="./mycourses.php"><span class="mdi mdi-play-box-multiple-outline pe-2"></span>My Courses</a>',
        });
      }
    });
    // 20/02/2023
  } else if (id == 6) {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "You need to complete the previous course first!",
      showClass: {
        popup: "animate__animated animate__fadeIn",
      },
      hideClass: {
        popup: "animate__animated animate__fadeOut",
      },
    });
  } else if (id == 7) {
    Swal.fire({
      title: "Course created Successfully",
      icon: "success",
      text: "Please complete all the required fields in the next screen. ",
      showCancelButton: true,
      confirmButtonText:
        '<a  href="./addcourse.php#nav-step2">Next<span class="mdi mdi-chevron-right ps-2"></span></a>',
      cancelButtonText:
        '<a href="./mycourses-teacher.php"><span class="mdi mdi-play-box-multiple-outline pe-2"></span>View Profile</a>',
      cancelButtonColor: "#4843e01a",
      reverseButtons: true,
      showClass: {
        popup: "animate__animated animate__fadeIn",
      },
      hideClass: {
        popup: "animate__animated animate__fadeOut",
      },
    });
  } else if (id == 8) {
    Swal.fire({
      title: "Course created Successfully",
      icon: "success",
      text: "You have added a new course !",
      showCancelButton: true,
      confirmButtonText:
        'Okay<span class="mdi mdi-chevron-right ps-2"></span>',
      cancelButtonText:
        '<a href="./mycourses-teacher.php"><span class="mdi mdi-play-box-multiple-outline pe-2"></span>My Courses</a>',
      cancelButtonColor: "#4843e01a",
      reverseButtons: true,
      showClass: {
        popup: "animate__animated animate__fadeIn",
      },
      hideClass: {
        popup: "animate__animated animate__fadeOut",
      },
    });
  }
}
function toggleFullScreen() {
  if (
    (document.fullScreenElement && document.fullScreenElement !== null) ||
    (!document.mozFullScreen && !document.webkitIsFullScreen)
  ) {
    if (document.documentElement.requestFullScreen) {
      document.documentElement.requestFullScreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullScreen) {
      document.documentElement.webkitRequestFullScreen(
        Element.ALLOW_KEYBOARD_INPUT
      );
    }
  } else {
    if (document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    }
  }
}
// Navbarbar top fixed 13/02/2023
function navbarFixed() {
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      document.getElementById("navbar_top").classList.add("fixed-top");
      // add padding top to show content behind navbar
      navbar_height = document.querySelector(".navbar").offsetHeight;
      document.body.style.paddingTop = navbar_height + "px";
    } else {
      document.getElementById("navbar_top").classList.remove("fixed-top");
      // remove padding top from body
      document.body.style.paddingTop = "0";
    }
  });
}

// Video Player Start 20/02/2023

// $('.video-list').addClass('mobile-list hide');

function showList() {
  var windowWidth = $(window).width();

  if (windowWidth >= 1200) {
    $(".video-list").removeClass("mobile-list hide");
  } else if (windowWidth < 1200) {
    $(".video-list").addClass("mobile-list hide");
  }
}
// Initialize video player

function initPlayer() {
  // set to no autoplay
  var autoplay = 0;
  // Autoplay toggle function
  $(".autoplay-toggle").on("click", function () {
    // toggle circle
    $(this).toggleClass("autoplay-toggle-on");
    // if autoplay == yes
    if ($(".autoplay-toggle").hasClass("autoplay-toggle-on")) {
      // Change autoplay toggle color
      $(".autoplay-select h2").css({
        color: "#fff",
      });
      // Change autoplay in player
      autoplay = 1;
    } else {
      // reset color to original
      $(".autoplay-select h2").css({
        color: "#A7FFEB",
      });
      // Reset autoplay in player
      autoplay = 0;
    }
  });

  // Get the data-url attribute in the first li
  var video = $(".video-list li").first().attr("data-url");
  // Set the player to the first video in the li
  $(".video-frame").attr(
    "src",
    video + "?autoplay=" + autoplay + "&rel=0&amp;showinfo=0"
  );

  // Function for clicking a menu/list item
  $(".video-list li").on("click", function () {
    var $this = $(this);
    var icon = $(".icon_video_play");
    if ($this.hasClass("locked")) {
      sweetAlert1(6);
    } else {
      if ($this.hasClass("pause")) {
        var video = $this.attr("data-url");
        // Set player to clicked video url
        $(".video-frame").attr("src", video + "?autoplay=1");
        $this.addClass("play");
        $this.removeClass("pause");
        icon.removeClass("fa-stop");
        icon.addClass("fa-play");
        $this.find(".icon_video_play").removeClass("fa-play");
        $this.find(".icon_video_play").addClass("fa-stop");
      } else {
        var video = $this.attr("data-url");
        // Set player to clicked video url
        $(".video-frame").attr(
          "src",
          video + "?autoplay=" + autoplay + "&rel=0&amp;showinfo=0"
        );
        $this.addClass("pause");
        $this.removeClass("play");
        $this.find(".icon_video_play").removeClass("fa-stop");
        $this.find(".icon_video_play").addClass("fa-play");
      }
    }
    // $this.addClass("pause");
    // $this.removeClass("play");

    // Set active class on clicked element
    $(".video-list li").removeClass("active-video");
    $this.addClass("active-video");
  });

  showList();
}

// Function to control mobile menu/list trigger
$(".video-list-trigger").on("click", function () {
  $(".video-list").toggleClass("hide");
});

$(".mobile-list").on("click", function () {
  $(".video-list").addClass("hide");
});

function videoPlayList() {
  let toggles = document.getElementsByClassName("toggle_acco");
  let contentDiv = document.getElementsByClassName("content_playlist");
  let icons = document.getElementsByClassName("icon_");

  for (let i = 0; i < toggles.length; i++) {
    toggles[i].addEventListener("click", () => {
      if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
        contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
        icons[i].classList.remove("fa-chevron-down");
        icons[i].classList.add("fa-chevron-up");
      } else {
        contentDiv[i].style.height = "0px";
        icons[i].classList.remove("fa-chevron-up");
        icons[i].classList.add("fa-chevron-down");
      }

      for (let j = 0; j < contentDiv.length; j++) {
        if (j !== i) {
          contentDiv[j].style.height = "0px";
          icons[j].classList.remove("fa-chevron-up");
          icons[j].classList.add("fa-chevron-down");
        }
      }
    });
  }

  // ============video js end  ==============

  var text = $(".text-overflow"),
    btn = $(".btn-overflow"),
    h = text[0].scrollHeight;

  if (h > 120) {
    btn.addClass("less");
    btn.css("display", "block");
  }

  btn.click(function (e) {
    e.stopPropagation();

    if (btn.hasClass("less")) {
      btn.removeClass("less");
      btn.addClass("more");
      btn.text("Show less");

      text.animate({ height: h });
    } else {
      btn.addClass("less");
      btn.removeClass("more");
      btn.text("Show more");
      text.animate({ height: "120px" });
    }
  });
}

function lessonAcco() {
  let toggles = document.getElementsByClassName("toggle_acco_lesson");
  let contentDiv = document.getElementsByClassName("content_playlist_lesson");
  let icons = document.getElementsByClassName("icon_");

  for (let i = 0; i < toggles.length; i++) {
    contentDiv[i].style.height = "0px";
    toggles[i].addEventListener("click", () => {
      if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
        contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
        icons[i].classList.remove("fa-chevron-down");
        icons[i].classList.add("fa-chevron-up");
      } else {
        contentDiv[i].style.height = "0px";
        icons[i].classList.remove("fa-chevron-up");
        icons[i].classList.add("fa-chevron-down");
      }

      for (let j = 0; j < contentDiv.length; j++) {
        if (j !== i) {
          contentDiv[j].style.height = "0px";
          icons[j].classList.remove("fa-chevron-up");
          icons[j].classList.add("fa-chevron-down");
        }
      }
    });
  }
}

function partList() {
  let toggles = document.getElementsByClassName("toggle_acco_parts");
  let contentDiv = document.getElementsByClassName("content_playlist_parts");
  let icons = document.getElementsByClassName("icon_parts");
  for (let i = 0; i < toggles.length; i++) {
    contentDiv[i].style.height = "0px";
    toggles[i].addEventListener("click", () => {
      if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
        contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
        icons[i].classList.remove("fa-chevron-down");
        icons[i].classList.add("fa-chevron-up");
      } else {
        contentDiv[i].style.height = "0px";
        icons[i].classList.remove("fa-chevron-up");
        icons[i].classList.add("fa-chevron-down");
      }

      for (let j = 0; j < contentDiv.length; j++) {
        if (j !== i) {
          contentDiv[j].style.height = "0px";
          icons[j].classList.remove("fa-chevron-up");
          icons[j].classList.add("fa-chevron-down");
        }
      }
    });
  }
}

(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

$(".image-box").click(function (event) {
  var previewImg = $(this).children("img");

  $(this).siblings().children("input").trigger("click");

  $(this)
    .siblings()
    .children("input")
    .change(function () {
      var reader = new FileReader();

      reader.onload = function (e) {
        var urll = e.target.result;
        $(previewImg).attr("src", urll);
        previewImg.parent().css("background", "transparent");
        previewImg.show();
        previewImg.siblings("p").hide();
      };
      reader.readAsDataURL(this.files[0]);
    });
});

var toolbarOptions = [
  ["bold", "italic", "underline"],
  [
    {
      align: [],
    },
  ],
  [
    {
      list: "ordered",
    },
    {
      list: "bullet",
    },
  ],
  [
    {
      indent: "-1",
    },
    {
      indent: "+1",
    },
  ],
  [
    {
      header: [1, 2, 3, 4, 5, 6, false],
    },
  ],

  ["clean"],
];

var quill = new Quill("#editor", {
  modules: {
    toolbar: toolbarOptions,
  },
  placeholder: "Write all about your course ",
  theme: "snow",
});
