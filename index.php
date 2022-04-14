<?php
include_once 'layouts/header.php';
include_once 'database.php';
include_once 'functions.php';

// get sliders
$sqlget = "SELECT id, name,img FROM sliders WHERE `status`='show'";
$alldata = mysqli_query($conn, $sqlget);
// get web config
$sql = "SELECT * FROM web_config WHERE `id`='1'";
$allwebdata = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" class="aos-init aos-animate">You cannot enjoy your wealth, if you cannot enjoy your health</h1>
                <h2 data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">No pain No gain with Sahyog Physiotherapy and Fitness Center </h2>
                <div data-aos="fade-up" data-aos-delay="600" class="aos-init aos-animate">
                   
                </div>
            </div>
            <div class="col-lg-6 hero-img aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200"><img src="image/home_top.png" class="img-fluid" alt="" /></div>
        </div>
    </div>
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
  

<section id="counts" class="counts">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-4">
                <div class="count-box">
                    <div class="text-center">
                        <h1 class="purecounter"><span class="counter" id="nbr"><?php echo $allwebdata['t_branch'];?></span></h1>
                        <b>Branch</b>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="count-box">
                    <div class="text-center">
                        <h1 class="purecounter"><span class="counter" id="nbr1"><?php echo $allwebdata['t_employees'];?></span>+</h1>
                        <b>Experience Staff</b>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="count-box">
                    <div class="text-center">
                        <h1 class="purecounter"><span class="counter" id="nbr2"><?php echo $allwebdata['t_customer'];?></span>+</h1>
                        <b>Happy Clients</b>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
    
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


<section id="hs4" class="hs4">
    <div class="container aos-init " data-aos="fade-up">
        <div class="row gx-0">
            <div class="aos-animate col-lg-6 d-flex flex-column justify-content-center aos-init " data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>Who We Are</h3>
                    <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
                    <p>Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.</p>
                </div>
            </div>
            <div class="aos-animate col-lg-6 d-flex align-items-center aos-init " data-aos="zoom-out" data-aos-delay="200"><img src="https://images.squarespace-cdn.com/content/v1/53554321e4b066e96f722ed6/1610507215166-C0OJALXG6KI031YVSJJK/IMS+Dry+Needling" class="img-fluid" alt="" /></div>
        </div>
    </div>
</section>

<section id="services" class="services ">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <header class="section-header">
            <h2>Services</h2>
            <p>Truth and Pains Never Be Present</p>
        </header>
        <div class="row gy-4" style="padding-bottom: 20px;">
            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box blue">
                    <!-- <i class="ri-discuss-line icon"></i> -->
                    <img src="image/Physiotherapy.jpeg" class="icon" style="height: 40%; width: 40%;" >
                    <h3>Physiotherapy</h3>
                    <p>Physiotherapy is treatment to restore, maintain, and make the most of a patient's mobility, function, and well-being.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box orange">
                    <!-- <i class="ri-discuss-line icon"></i> -->
                    <img src="image/Diet.jpeg"  class="icon" style="height: 40%; width: 40%;">

                    <h3>Diet Tips</h3>
                    <p>If you’re looking for the best tips on how to lose weight and keep it off, this seemingly endless amount of advice can be overwhelming and confusing.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <div class="service-box green">
                    <!-- <i class="ri-discuss-line icon"></i> -->
                    <img src="image/Aerobics.jpeg" class="icon" style="height: 40%; width: 40%;">
                    <h3>Aerobics</h3>
                    <p>Aerobics is a form of physical exercise that combines rhythmic aerobic exercise with stretching and strength training routines with the goal of improving all elements of fitness</p>
                </div>
            </div>
        </div>
    </div>
</section>


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