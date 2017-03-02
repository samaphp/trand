<?php

/**
 * @file
 * Handle the website main page.
 */

class Index extends Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    $this->view->title = 'Trand Homepage';
    $this->view->render('header');

    // Show custom homepage for loggedin users.
    if($this->view->user_is_logged_in){
      $this->view->products = Bootstrap::products_list();
      $this->view->render('index-user');
    }else{
      $this->view->render('index');
    }

    $this->view->render('footer');
  }

}
