<?php
    include('head.php');
?>

<body>
    
    <?php
        include('es.php');
    ?>

    <!-- stat: Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3
              }
            }, {
              breakpoint: 580,
              settings: {
                slidesToShow: 2
              }
            }, {
              breakpoint: 480,
              settings: {
                slidesToShow: 1
              }
            }
          ]
          });

        });
    </script>
    <!-- end: Javascript -->


</body>
</html>
