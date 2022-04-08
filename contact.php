<?php
include_once 'database.php';
include 'functions.php';

if($_POST)
{ 
   $cdate= get_current();
   $name = $_POST['name'];
   $mobile_no = $_POST['mobile_no'];
   $message = $_POST['message'];
       $sql = "INSERT INTO contacts (name,phone,msg,status,created_at,updated_at)
       VALUES ('$name','$mobile_no','$message','show','$cdate','$cdate')";
       if (mysqli_query($conn, $sql)) {
           header('Location: contact.php?code=200&message=Data Add successfully.');
        
       } else {
         $_SESSION['e_message'] = "Error: " . $sql . mysqli_error($conn);
           header('Location: contact.php?code=400&message=Error: . $sql . mysqli_error($conn).');
       }
       exit();
   
}

include_once 'layouts/header.php';
?>
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
<form method="post">
    <div class="cp1">
        
        <!-- <h1>Contact</h1> -->
        <div class="cp2">
            <!-- <img src=""> -->
        </div>

        <div class="cp3">
            <div class="container1">
                <h2>Contact Us Form</h2>
                <div class="row100">
                    <div class="row100">
                        <div class="col">
                            <div class="inputbox">
                                <input type="text" name="name" required="required" />
                                <span class="text">Name</span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row100">
                <div class="col">
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span class="text">Email</span>
                        <span class="line"></span>
                    </div>
                </div>
                </div> -->
                    <div class="row100">
                        <div class="col">
                            <div class="inputbox">
                                <input type="text" name="mobile_no" required="required" />
                                <span class="text">Mobile No.</span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="col">
                            <div class="inputbox">
                                <input type="text" name="message" required="required" />
                                <span class="text">Message</span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="col">
                            <input type="submit" value="send" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
    <?php
include_once 'layouts/footer.php';
?>
