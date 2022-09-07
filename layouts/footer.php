
  <!-- footer -->
  <footer class="footer">
  <div class="footer-top">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center"> <img src="assets/img/logo.png" alt="" /> <span>About</span> </a>
                <p>If an ankle sprain does not heal correctly, the joint may become unstable, resulting in a weakened and easily reinjured ankle. Proper initial care of your sprained ankle is critical. A compression wrap helps decrease swelling. If swelling is kept to a minimum, it may help your ankle feel better.</p>
                <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6 footer-links">
                <h4>Facility</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> All equipment for exercise</li>
                    <li><i class="bi bi-chevron-right"></i> Pick up & Drop Sercise</li>
                    <li><i class="bi bi-chevron-right"></i> Flexible Time</li>
                    <li><i class="bi bi-chevron-right"></i> Diet for weight loss</li>
                    <li><i class="bi bi-chevron-right"></i> Aerobics, Zumba, & Yoga</li>
                </ul>
                
            </div>
            <div class="col-lg-2 col-6 footer-links ">
                <h4>Time</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> Mon to Fri:7:00 AM – 8:00 PM</li>
                    <li><i class="bi bi-chevron-right"></i>Sun:8:00 AM – 12:00 PM</li>
            </div>
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                    <?php echo get_address();?><br>
                    <strong>Phone:</strong> <?php echo get_contacton();?>
                </p>
            </div>
        </div>
    </div>
</div>


            </footer>
   <!-- end footer -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script>
       setTimeout(function () {
        $("#msg").fadeOut(3000);
    }, 3000); // <-- time in milliseconds

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
   
       <script src="assets/js/script1.js"></script>
            <script src="assets/js/lightbox-plus-jquery.min.js"></script> 
</body>
</html>