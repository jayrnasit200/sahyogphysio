<?php
include_once 'layouts/header.php';
?>
   
  
   <div style="min-height: 75vh; display: flex;  margin: auto; margin-top: 50px; margin-bottom: 50px; width: 80%;">
     <!-- <h1>Contact</h1> -->
     <div style="width: 50%; background-color: #c0c0c0; background-image: url('image/contact.png');
    background-repeat: no-repeat, repeat;
    background-size: cover;
    background-position: center;">
       
          <!-- <img src=""> -->
       
       
     </div>
     <div style="width: 50%; background-color: black;">
        <div class="container1">
            <h2>Contact Us Form</h2>
            <div class="row100">
               <div class="row100">
                <div class="col">
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span class="text">Name</span>
                        <span class="line"></span>
                    </div>
                </div> 
                </div>
                <div class="row100">
                <div class="col">
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span class="text">Email</span>
                        <span class="line"></span>
                    </div>
                </div>
                </div>
                <div class="row100">
                <div class="col">
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span class="text">Mobile No.</span>
                        <span class="line"></span>
                    </div>
                </div>
              </div>
                <div class="row100">
                <div class="col">
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span class="text">Message</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div> 
           <div class="row100" >
                <div class="col">
                    <input type="submit" value="send">
                </div>
            </div>
        </div>
     </div>
   </div>
     
   </div>
   <?php
include_once 'layouts/footer.php';
?>