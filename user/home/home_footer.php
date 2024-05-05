 <!-- footer-66 -->
  <footer class="w3l-footer-66">
    <section class="footer-inner-main">
      <div class="footer-hny-grids py-5">
        <div class="container py-lg-4">
          <div class="text-txt">
            <div class="row newsletter-grids-footer">
              <div class="col-lg-6 newsletter-text pr-lg-5">
                <h3 class="hny-title two">Newsletter</h3>
                <h4>Sign up for our monthly newsletter to get the latest news, volunteer opportunities,
                </h4>
              </div>
              <div class="col-lg-6 newsletter-right">
               <!--  <form action="#" method="post" class="footer-newsletter">

                  <input type="email" name="email" class="form-input" placeholder="Enter your email..">

                  <button type="submit" class="btn">Subscribe</button>
                </form> -->
              </div>
            </div>
            <div class="right-side">
              <div class="row sub-columns">
                <div class="col-lg-4 col-md-6 sub-one-left pr-lg-4">
                  <h2><a class="navbar-brand" href="index.html">
                    <span>C</span>ar-Rent
                  </a></h2>
                  <!-- if logo is image enable this   
										<a class="navbar-brand" href="#index.html">
											<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
										</a> -->
                  <p class="pr-lg-4">Our main motive is to provide a good quality car at low rate.Since then we are proud to say that we have got a lot of regular overseas clients which shows the trust they have in our venture.We are all set and ready to assist you.</p>
                  <div class="columns-2">
                    <ul class="social">
                      <li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      </li>
                      <li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                      </li>
                      <li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                      </li>
                      <li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                      </li>
                      <li><a href="#"><span class="fa fa-github" aria-hidden="true"></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sub-one-left">
                  <h6>Our Services</h6>
    <div class="mid-footer-gd sub-two-right">

                    <ul>
                      <li><a href="about.php"><span class="fa fa-angle-double-right mr-2"></span> About</a>
                      </li>
                      <li><a href="services.php"><span class="fa fa-angle-double-right mr-2"></span> Services</a>
                      </li>
                      <li><a href="#"><span class="fa fa-angle-double-right mr-2"></span> Car Wash</a>
                      </li>
                      <li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Electrical system</a>
                      </li>
                    </ul>
                    <ul>
                      <li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Tire and wheel</a>
                      </li>
                      <li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Help
                          Orphan</a>
                      </li>
                      <li><a href="#support"><span class="fa fa-angle-double-right mr-2"></span>Career</a></li>
                      <li><a href="contact.php"><span class="fa fa-angle-double-right mr-2"></span>Contact US</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 sub-one-left">
                  <h6>Contact Info</h6>
                  <div class="sub-contact-info">
                    <p>Address: 8436 Thrissur Round, Near Kalyan jwelers,Kerala India.</p>
                    <p class="my-3">Phone: <strong><a>+24 1600-33-999</a></strong></p>
                    <p>E-mail:<strong> <a href="#">car_rent@.com</a></strong></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="below-section">
        <div class="container">
          <div class="copyright-footer">
            <div class="columns text-lg-left">
              <p>© 2023 Car-Rent and Auto mobile Services</p>
            </div>
            <ul class="columns text-lg-right">
              <li><a href="#">Privacy Policy</a>
              </li>
              <li>|</li>
              <li><a href="#">Terms Of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- copyright -->
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-long-arrow-up" aria-hidden="true"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->

    </section>
  </footer>
  <!--//footer-66 -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>