
  <!-- footer -->
  <footer>
              <div class="footer-cointener" >
                <div class="fc1">
                  <h1>Facility</h1>
                  <p style="color: #f5f5f5d6; font-family: Georgia, serif;">
                    Experienced Doctor<br>
                    All equipment for exercise<br>
                    Pick up & Drop Sercise<br>
                    Flexible Time<br>
                    Diet for weight loss<br>
                    Aerobics, Zumba, & Yoga<br>
                  </p>
                </div>
                <div class="fc2">
                  <h1>Time</h1>
                  <p style="color: #f5f5f5d6; font-family: Georgia, serif;">
                    Mon to Fri:7:00 AM – 8:00 PM<br>
                    Sun:8:00 AM – 12:00 PM
                  </p>
                </div>
                <div class="fc3">
                  <h1>Address</h1>
                  <p style="color: #f5f5f5d6; font-family: Georgia, serif;">3rd Floor, Shiv Ashish Complex,<br> Baroda Prestige Char Rasta <br>varachha Main Road Surat,<br> Gujarat 395006 India</p>
                </div>
                <div class="fc4" >
                  <h1>Social connect</h1>
                         <div class="social-button">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                         </div>
                </div>
              </div>
            </footer>
   <!-- end footer -->
   
   <script>
	var slideIndex = [1,1];
	var slideId = ["mySlides1", "mySlides2"]
	showSlides(1, 0);
	showSlides(1, 1);

	function plusSlides(n, no) {
	  showSlides(slideIndex[no] += n, no);
	}

	function showSlides(n, no) {
	  var i;
	  var x = document.getElementsByClassName(slideId[no]);
	  if (n > x.length) {slideIndex[no] = 1}    
	  if (n < 1) {slideIndex[no] = x.length}
	  for (i = 0; i < x.length; i++) {
	     x[i].style.display = "none";  
	  }
	  x[slideIndex[no]-1].style.display = "block";  
	}
   </script>
   
</body>
</html>