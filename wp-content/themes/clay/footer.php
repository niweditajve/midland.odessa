<footer class="footer_main">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-3">
        <div class="ft_box">
          <div class="ft_logo"> <img src="images/NEW-Clay-Burgess-Logo.jpg" class="img-responsive" alt=""> </div>
          <div class="ft_about">
            <h4 class="ft_title">Main Office</h4>
            <address>
            605 W. Congress St.<br>
            Lafayette, LA 70501
            <p><a href="#"> Fax (337) 233-3890</a></p>
            </address>
            <ul class="social_icon_top ft_social_icon">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
            <div class="ft_places">
              <p>We serve clients in Baton Rouge, Alexandria, Houma, Lake Charles, Monroe, Shreveport, New Iberia, Opelousas and Ruston BY APPOINTMENT</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-md-3">
        <div class="ft_box">
          <div class="ft_about">
            <h4 class="ft_title">Baton Rouge, LA</h4>
            <address>
            8550 United Plaza Blvd. Ste. 702<br>
            Baton Rouge, LA 70809
            <p><a href="#">(225) 922-4416</a></p>
            </address>
          </div>
          <div class="ft_about">
            <h4 class="ft_title">MONROE, LA</h4>
            <address>
            300 Washington St. Ste. 100G<br>
            Monroe, LA 71201
            <p><a href="#">(318) 716-3118</a></p>
            </address>
          </div>
          <div class="ft_about">
            <h4 class="ft_title">NEW IBERIA, LA</h4>
            <address>
            616 S Lewis St #K<br>
            New Iberia, LA 70560
            <p><a href="#">(337) 234-7573</a></p>
            </address>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-md-3">
        <div class="ft_box">
          <div class="ft_about">
            <h4 class="ft_title">LAKE CHARLES, LA</h4>
            <address>
            702 Kirby St.<br>
            Lake Charles, LA 70601
            <p><a href="#">(337) 214-8479</a></p>
            </address>
          </div>
          <div class="ft_about">
            <h4 class="ft_title">RUSTON, LA</h4>
            <address>
            3896 Hwy. 33<br>
            Ruston, LA 71270
            <p><a href="#">(318) 716-3114</a></p>
            </address>
          </div>
          <div class="ft_about">
            <h4 class="ft_title">HOUMA</h4>
            <address>
            1340 W. Tunnel Blvd. Ste. 223<br>
            Houma, LA 70360
            <p><a href="#">(985) 205-3448</a></p>
            </address>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-md-3">
        <div class="ft_box">
          <div class="ft_about">
            <h4 class="ft_title">SHREVEPORT, LA</h4>
            <address>
            333 Texas St. Ste. 1102<br>
            Shreveport, LA 71101
            <p><a href="#">(318) 716-3109</a></p>
            </address>
          </div>
          <div class="ft_about">
            <h4 class="ft_title">ALEXANDRIA, LA</h4>
            <address>
            1330 Jackson St.<br>
            Alexandria, LA 71301
            <p><a href="#">(318) 527-4932</a></p>
            </address>
          </div>
          <div class="ft_about">
            <h4 class="ft_title">NEW ORLEANS, LA</h4>
            <address>
            3014 Dauphine Street<br>
            New Orleans, LA 70117
            <p><a href="#">(877) 234-7573</a></p>
            </address>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <div class="copyright_left">
            <p>© 2017 The Law Offices of L. Clayton Burgess </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <ul class="footer_nav">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script> 
<script>
$('#testimonial_slide').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
	dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

$('#news_article').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
	dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

</script>

<?php wp_footer(); ?>

</body>
</html>
