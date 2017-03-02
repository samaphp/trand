<?php

/**
 * @file
 * Handle the website error pages.
 */

class Errorpage extends Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    header("HTTP/1.0 404 Not Found");

    $this->view->title = 'Error Page';
    $this->view->msg = 'Page not found';
    $this->view->render('header');
    $this->view->render('errorpage');
    $this->view->render('footer');
  }

}
