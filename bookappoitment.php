<?php
include_once 'database.php';
// include 'functions.php';
include_once 'layouts/header.php';
if(empty($_SESSION["login_id"]) ) {
    header("Location: signin.php");
}

if($_POST)
{ 
session_start();
$cdate= get_current();
   $user_id = $_SESSION['login_id'];
//    print_r($user_id);
//    exit;
   $time = $_POST['time'];
   $type = $_POST['type'];
   $date = $_POST['date'];
   $d_name = $_POST['d_name'];
       $sql = "INSERT INTO book_appoitment (user_id,time,type,date,d_name,status,created_at,updated_at)
       VALUES ('$user_id','$time','$type','$date','$d_name','padding','$cdate','$cdate')";
       if (mysqli_query($conn, $sql)) {
           header('Location: bookappoitment.php?code=200&message=data Add successfully.');
        
       } else {
        echo  $_SESSION['e_message'] = "Error: " . $sql . mysqli_error($conn);
        //    header('Location: bookappoitment.php?code=400&message=Error: . $sql . mysqli_error($conn).');
       }
       exit();
   
}

?>
   
        <div class="bookappoitment-container">
        <?php 
        if(!empty($_GET['message'])) {
            $code = $_GET['code'];
            if($code= 200){
                echo '<div class="alert alert-success alert-dismissible" id="msg">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                '.$_GET['message'].'</div>';
            }else{
                echo '<div class="alert alert-danger alert-dismissible" id="msg">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             '.$_GET['message'].'</div>';
            }
        }
        ?>
            <div class="book">
                <div class="description">
                    <h1><strong>Book your appoitment</strong> </h1>
                    <p>
                    Anyone can easily book an appointment by following some easy steps. Very firstly patent can sign up using the sign-up page. if any Patient already has an account so do log in and then book an appointment because without login or signup must not book your appointment.
                    </p>
                    <div class="quote">
                        <p>
                        Then for booking your  appointment selecting all details like  doctor's name, appointment type, time and date and end click on submit button and we will try to give a replay as soon as possible
                            </p>
                    </div>
                    <ul>
                        <li>Super reliable service</li>
                        <li>24/7 customer srvice</li>
                        <li>GPS tracking and help</li>
                        <li>Wide range vehicle</li>
                    </ul>
                </div>
                <div class="form">
                    <form method="post">
                    <div class="inpbox full">
                            <span class="flaticon-taxi"></span>
                            <select id="cars" name="d_name">
                                <option value="">Select Docter</option>
                                <option value="Afreen">Dr.Afreen Jasani</option>
                                <option value="Nidhi">Dr.Nidhi Pavasiya</option>
                                <option value="Jigna">Dr.Jigna Ahir</option>
                                <option value="Sujita">Dr.Sujita Suvagiya</option>
                            </select>
                        </div>
                        <div class="inpbox full">
                            <span class="flaticon-taxi"></span>
                            <select id="cars" name="type">
                                <option value="">Select type of appoitment</option>
                                <option value="Physio">Physio</option>
                                <option value="Diet">Diet</option>
                            </select>
                        </div>

                        

                        <div class="inpbox">
                            <span class="flaticon-calendar"></span>
                            <input type="date" name="date" placeholder="Pickup Date" min='<?php echo date("Y-m-d");?>'/>
                        </div>
                        <div class="inpbox full1">
                            <span class="flaticon-taxi"></span>
                            <select id="cars" name="time">
                                <option value="">Select Time</option>
                                <option value="09:00">9:00</option>
                                <option value="00:30">9:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:30">12.00</option>
                                <option value="01:00">01:00</option>
                                <option value="01:30">01:30</option>
                                <option value="02:00">02:00</option>
                                <option value="02:30">02:30</option>
                                <option value="03:00">03:00</option>
                                <option value="03:30">03:30</option>
                                <option value="04:00">04:00</option>
                                <option value="04:30">04:30</option>
                                <option value="05:00">05:00</option>
                                <option value="05:30">05:30</option>
                                <option value="06:00">06:00</option>
                                <option value="06:30">06:30</option>
                                <option value="07:00">07:00</option>
                                <option value="07:30">07:30</option>
                            </select>
                        </div>
                        

                        <button class="subt">Submit</button>
                        <button class="rst">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end book appoitmnet page -->
        <?php
include_once 'layouts/footer.php';
?>