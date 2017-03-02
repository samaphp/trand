<?php

/**
 * @file
 * Basic controller providing methods that handle requests.
 */

class Controller {

  function __construct() {
    $this->view = new View();

    if(Session::get('username')){
      // user loggedin.
      $this->view->user_is_logged_in = TRUE;
      $this->view->user = Session::user_data(Session::get('username'));
      $this->view->cart = Session::cart_data();
    }else{
      // user not loggedin.
      $this->view->user_is_logged_in = FALSE;
    }
  }

  /**
   * Check if this user logged in or show un authorized page.
   */
  public static function user_access()
  {
    if(!Session::get('username')){
      // Deny this user and redirect him to login page.
      // Unauthorized.
      header("HTTP/1.0 401 Unauthorized");
      // @TODO: Create unauthorized page output.
      print '401 Unauthorized';
      exit;
    }
  }

}
