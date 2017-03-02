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
    }else{
      // user not loggedin.
      $this->view->user_is_logged_in = FALSE;
    }
  }

}
