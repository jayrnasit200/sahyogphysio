<?php
   
    function get_current()
    {
       return date("Y-m-d h:i:s");
    }
    function gethost()
    {
       return "http://localhost/sahyogphysio"; 
    }
    function chack_admin()
    {
      session_start();
      // print_r($_SESSION["admin"]);
      if(!isset($_SESSION["admin"])) {
          header("Location: index.php");
      }
    }
    
?>