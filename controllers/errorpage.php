<?php

class Errorpage extends Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    $this->view->title = 'Error Page';
    $this->view->msg = 'Page not found';
    $this->view->render('header');
    $this->view->render('errorpage');
    $this->view->render('footer');
  }

}
