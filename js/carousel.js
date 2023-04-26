const owl1 = $("#owlCategory"),
    owl2 = $("#owlPopular"),
    owl3 = $("#owlRecent"),
    owl4 = $("#owlNewSkill");

owl1.owlCarousel({
  items: 3,
  margin: 10,
  responsiveClass: true,
  nav: true,
  autoWidth: true,
  navigation: false,
  dots: true,
  responsive: {
    0: {
      items: 1,
      nav: true,
    },
    600: {
      items: 3,
      nav: false,
    },
    1000: {
      items: 5,
      nav: true,
      loop: false,
    },
  },
});
owl2.owlCarousel({
  items: 3,
  margin: 15,
  responsiveClass: true,
  autoWidth: true,
  navigation: false,
  dots: true,
  loop: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      nav: false,
      loop: true,
    },
    600: {
      items: 3,
      nav: false,
      loop: true,
    },
    1000: {
      items: 5,
      nav: false,
      loop: true,
    },
  },
});
owl3.owlCarousel({
  items: 3,
  margin: 15,
  responsiveClass: true,
  autoWidth: true,
  navigation: false,
  dots: true,
  loop: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      nav: false,
      loop: true,
    },
    600: {
      items: 3,
      nav: false,
      loop: true,
    },
    1000: {
      items: 5,
      nav: false,
      loop: true,
    },
  },
});
owl4.owlCarousel({
  items: 3,
  margin: 15,
  responsiveClass: true,
  autoWidth: true,
  navigation: false,
  dots: true,
  loop: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      nav: false,
      loop: true,
    },
    600: {
      items: 3,
      nav: false,
      loop: true,
    },
    1000: {
      items: 5,
      nav: false,
      loop: true,
    },
  },
});
