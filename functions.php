<?php
    
    function get_current()
    {
       return date("Y-m-d h:i:s");
    }
    function gethost()
    {
       return "http://localhost/sahyogphysio"; 
    }
    function getfilename_url($no)
    {
      $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
      // print_r($uriSegments[$no]);
      // exit;
      return $uriSegments[$no]; //returns codex  
    }
    function numurl()
    {
       return 2;
    }
   //  function getwebdata($name)
   //  {
       
   //    include ('database.php');
   //    $sqlget = "SELECT $name FROM `web_config` WHERE `id`=1 ";
   //    $webdata = mysqli_fetch_assoc(mysqli_query($conn, $sqlget));
   //    // $conn->close();
   //    return $webdata[$name];
   //    return '$webdata[$name]';
   //  }
    
?>