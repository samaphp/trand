<?php

/**
 * @file
 * Handle the website users.
 */

class User extends Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index()
  {
    // Redirect to login page.
    header('location: ' . URL . 'user/login', TRUE, 301);
  }

  public function login()
  {
    $this->view->title = 'Users';

    $this->view->render('header');
    $this->view->render('user');
    $this->view->render('footer');
  }

  public function role($role_name)
  {
    $allowed_roles = array('employee', 'affiliate', 'new_customer', 'old_customer');
    if(in_array($role_name, $allowed_roles)){
      // Setting the choosen user role.
      // Here for demonstration purposes only we will save this in user session.
      Session::set('username', $role_name);
      header('location: ' . URL . '', TRUE, 302);
    }else{
      // Unauthorized.
      header("HTTP/1.0 401 Unauthorized");
      // @TODO: Create unauthorized page output.
      print '401 Unauthorized';
      exit;
    }
  }

  public function logout()
  {
    // Destroy current session.
    Session::destroy();
    header('location: ' . URL . 'user', TRUE, 302);
  }

}
