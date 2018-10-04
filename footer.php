      <div class="footer fixed-bottom">
        <div class="row">
          <div class="col-md-12 text-center">
            <!-- <p>Theme powered by BadDevs, more at <a href="http://baddevs.com/">BadDevs.com</a>. Thanks to <font color="red"><3</font> for energy.</p> -->
          </div>
          <div class="ribbon"><span>Theme powered by BadDevs, more at <a href="http://baddevs.com/">BadDevs.com</a>.<br> Thanks to <font color="red"><3</font> for energy.</span></div>
        </div>
      </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/lightslider.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.pagepiling.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.immersive-slider.js"></script>
    <?php wp_footer(); ?>
    <script>
    $("#immersive_slider").immersive_slider({
        animation: "bounce", // As usual, you can change the animation to these: slide (default), bounce, fade, slideUp, and bounceUp
        slideSelector: ".slide", // This option will let you assign custom selector for each slides in case .slide is already taken
        container: ".projects_slider", // This option lets you define the container of which the background will appear. Make sure the slider is inside this container as well.
        cssBlur: true, // Experimental: In case you don't want to keep adding new data-blurred attributes, trigger this to true and it will generate the blur image on the fly (more info below).
        pagination: true, // Toggle this to false if you don't want a pagination
        loop: true, // Toggle to false if you don't want the slider to loop. Default is true.
        autoStart: 0 // Define the number of milliseconds before it navigates automatically. Change this to 0 or false to disable autoStart. The default value is 5000.
    });
      $(document).ready(function() {
        $('#pagepiling').pagepiling({
          direction: 'horizontal',
          scrollingSpeed: 50,
          keyboardScrolling: true,
          anchors: ['home', 'services', 'projects', 'team', 'contact'],
          menu: '#hormenu',
          animateAnchor: false,
          navigation: {
            'textColor': '#000',
            'bulletsColor': '#000',
            'position': 'right',
            'tooltips': [' Strona główna', ' Usługi', ' Projekty', ' Ekipa', ' Kontakt']
        },
        });
        var mgrTop = $("#navi").height() + 16;
        $('.row').css({"margin-top": mgrTop});
        $('#vertical').lightSlider({
          gallery:true,
          item:1,
          vertical:true,
          verticalHeight:($(window).height() - $("#navi").height()),
          vThumbWidth:50,
          thumbItem:8,
          thumbMargin:4,
          slideMargin:0,
          controls: false,
          pager: true,
          keypress: false,
          loop: true,
          auto: false,
          speed: 1000,
          pause: 5000,
          pauseOnHover: true,
        //   responsive : [
        //     {
        //         breakpoint:700,
        //         settings: {
        //             item:1,
        //             slideMove:1,
        //             verticalHeight:400
        //           }
        //     },
        //     {
        //         breakpoint:318,
        //         settings: {
        //             item:2,
        //             slideMove:1
        //           }
        //     }
        // ]
        });
      });
    </script>
  </body>
</html>
