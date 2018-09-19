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
    <?php wp_footer(); ?>
    <script>
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
        $('#vertical').lightSlider({
          gallery:false,
          item:1,
          vertical:true,
          verticalHeight:500,
          vThumbWidth:50,
          thumbItem:8,
          thumbMargin:4,
          slideMargin:0,
          controls: false,
          pager: true,
          keypress: true,
          loop: true,
          auto: true,
          speed: 1000,
          pause: 5000,
          pauseOnHover: true,
        });
      });
    </script>
  </body>
</html>
