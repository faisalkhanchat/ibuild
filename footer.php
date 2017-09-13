    <!-- Footer -->
    <footer id="contact">
      <div class="container">
          <div class="row">
              <div class="col-sm-4">
                   <img src="img/white-logo.png" alt="">
                  <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.

                  </p>
              </div>
              <div class="col-sm-2">
                  <ul class="list-unstyled">
                      <li><a href="">Home </a></li>
                      <li><a href="">About</a></li>
                      <li><a href="">Product</a></li>
                      <li><a href="">Blog</a></li>
                      <li><a href="">Contact</a></li>
                  </ul>
              </div>
              <div class="col-sm-3">
                  <div class="footer_contact">
                      <div class="row">
                          <div class="col-xs-2"><i class="fa fa-phone"></i></div>
                          <div class="col-sm-10">
                              <a href="emailto:+91 9560500888">+91 9560500888</a> , <br>
                              <a href="emailto:011 41520888">011 41520888</a>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xs-2"><i class="fa fa-envelope"></i></div>
                          <div class="col-sm-10">
                              <a href="mailto:xyz@gmail.com">xyz@gmail.com</a>
                          </div>
                      </div>
                      
                  </div>
              </div>
              <div class="col-sm-3">
                 <ul class="list-inline social_icon">
                     <li><a href="#" class="fa fa-facebook"></a></li>
                     <li><a href="#" class="fa fa-twitter"></a></li>
                     <li><a href="#" class="fa fa-google"></a></li>
                     <li><a href="#" class="fa fa-rss"></a></li>
                 </ul>
                  
                  
                  
                     
             
              </div>
          </div>
      </div>
       <div class="footer_bottom">
       
        <div class="container">
           <div class="row">
               <div class="col-sm-12">
                    <p>Copyright © 2017. All Rights Reserved.</p>       
               </div>
            </div>
            
        </div>
            
       </div>
       
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    		
		    <script>
		        $(document).ready(function() {
		            $('.gallery-carousel').owlCarousel({ 
		                items:1,
                        nav: true,
              autoPlay: true,
              mouseDrag: true,
              singleItem: true,
              animateIn: 'fadeIn',
              animateOut: 'fadeOut'
		            });
            		 $( ".owl-prev").html('<img src="img/arr-left.png" />');
                     $( ".owl-next").html('<img src="img/arr-right.png" />');
                     $('.product-caresoul li img').click(function(){
                        var as= $(this).data("full");
                        $('.full-image img').attr('src', $(this).data("full")).fadeIn();
                        // alert(as);
                    });
		        });
		
		    </script>


</body>

</html>
