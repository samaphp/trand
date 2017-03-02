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
    $this->view->render('index');
    $this->view->render('footer');
  }

}
