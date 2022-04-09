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
   function get_sitename()
   {
      return 'Sahyog Physiotherapy';
   }
   function get_copyright_text()
   {
      return 'sahyogphysio@Copyright 2022.';
   }
   function get_logo()
   {
      return gethost().'/uploads/logo.jpg';
   }
    
?>