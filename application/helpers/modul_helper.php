<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
  //zona waktu
  date_default_timezone_set('Asia/Jakarta');

  if(!function_exists('active_link')) {
    
    function activate_modul($controller) {
      // Getting CI class instance.
      $CI = get_instance();
      // Getting router class to active.
      $class = $CI->router->fetch_class();
      return ($class == $controller) ? 'active' : '';
    }

  }
