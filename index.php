<?php
include_once 'layouts/header.php';
include_once 'functions.php';
include_once 'database.php';
// get sliders
$sqlget = "SELECT id, name,img FROM sliders WHERE `status`='show'";
$alldata = mysqli_query($conn, $sqlget);
// get web config
$sql = "SELECT * FROM web_config WHERE `id`='1'";
$allwebdata = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>
   <section>
   	<div class="r">
     

   	</div>
      <div class="wave" id="wave1" style="--i:1;"></div>
      <div class="wave" id="wave2" style="--i:2;"></div>
      <div class="wave" id="wave3" style="--i:3;"></div>
      <div class="wave" id="wave4" style="--i:4;"></div>
   </section>
    
   <div class="hs2" >
    <div class="hs2-2">
      <div class="hs2-3">
        <img src="image/a.jpg">
      </div>
      <div class="hs2-4">
        <h1>Dr.Afreen jasani</h1>
        <p> I am owner of Sahyog Physiotherapy & Fitness Center which has 3 branch. As wall I got Bachelor Of Physiotherapy at SPB physiotherapy College in 2015. Furthermore, I have various skills and ability such as
                        Treated Nutritionist, Fitness Advisor, Female Entrepreneur, Social Worker and many more. Moreover, I also have more than 8 years expriyance and I treated more than 5000 patients. As well, I always ready
                        for learnt from our patients and from give and attend seminar. In future I continuasly try to follow it.</p>
      </div>
    </div>
     
   </div>
      
  <div class="slideshow-container">
  <?php
      $no=1;
          if (mysqli_num_rows($alldata) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($alldata)) {
                // print_r($row['img']);
                // exit;
              echo ' <div class="mySlides1">'.
             ' <img src="'. gethost() .$row['img'].'" alt="'.$row['name'].'" style="width:100%">'.
           ' </div>';
              }
          }
    ?>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
<!-- 3 part -->


<div class="hsco">
	<div class="hsco-sub">
		<div class="subno">
			<span class="counter" id="nbr"><?php echo $allwebdata['t_branch'];?></span>
			<p>Branch </p>
		</div>
		<div class="subno">
			<span class="counter" id="nbr1"><?php echo $allwebdata['t_employees'];?></span>
			<p>Employees</p>
		</div>
		<div class="subno">
			<span class="counter" id="nbr2"><?php echo $allwebdata['t_customer'];?></span>
			<p>Customer</p>
		</div>
	</div>
</div>


<div class="hs4">
  <div class="hs4-s1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.5174260862973!2d72.85386161476659!3d21.21132098589981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f04dcd5da03%3A0xc6d5151dcc345c85!2sSahyog%20Physiotherapy%20and%20Fitness%20Center%20-%20Best%20Physiotherapy%20Centre%20in%20Surat!5e0!3m2!1sen!2sin!4v1647003176867!5m2!1sen!2sin"  style="border:0; width: 100%; min-height: 400px;" allowfullscreen="" loading="lazy"></iframe>  
  </div>
  <div class="hs4-s2">
    <h1> Address</h1>
    <p>3rd Floor, Shiv Ashish Complex, Baroda Prestige Char<br>
     Rasta Varachha Main Road <br>
    Surat, Gujarat, India<br>
  <b>No:9876543210</b></p>
     
  </div>
</div>

<?php
include_once 'layouts/footer.php';
?>
<script>
  var speed = 0.001;

function incEltNbr(id) {
  elt = document.getElementById(id);
  endNbr = Number(document.getElementById(id).innerHTML);
  incNbrRec(0, endNbr, elt);
}

/*A recursive function to increase the number.*/
function incNbrRec(i, endNbr, elt) {
  if (i <= endNbr) {
    elt.innerHTML = i;
    setTimeout(function() {//Delay a bit before calling the function again.
      incNbrRec(i + 1, endNbr, elt);
    }, speed);
  }
}

function incNbr(){
  incEltNbr("nbr");
}
incEltNbr("nbr"); /*Call this funtion with the ID-name for that element to increase the number within*/
incEltNbr("nbr1"); /*Call this funtion with the ID-name for that element to increase the number within*/
incEltNbr("nbr2"); /*Call this funtion with the ID-name for that element to increase the number within*/
</script>