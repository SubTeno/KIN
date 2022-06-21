<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/aos/dist/aos.js"></script>
<script src="slick/slick/slick.min.js"></script>
<script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script type="text/javascript">
  $(".slider").slick({
    dots: true,
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1431,
        settings: {
          slidesToShow: 3,

          infinite: false,
          dots: false,
        },
      },
      {
        breakpoint: 1175,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  AOS.init({
    once: true
  });
</script>