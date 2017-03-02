<?php

/**
 * @file
 * Handle the website cart page.
 */

class Cart extends Controller {

  function __construct() {
    parent::__construct();
  }

  /**
   * Cart page.
   */
  function index() {
    // Check user access.
    parent::user_access();

    $this->view->title = 'Cart';
    $this->view->cart_items = Session::get('cart_items');
    $this->view->render('header');
    $this->view->render('cart');
    $this->view->render('footer');
  }

  /**
   * Cart reset process.
   */
  function reset() {
    // Check user access.
    parent::user_access();
    Session::set('cart_items', FALSE);
    header('location: ' . URL . 'cart', TRUE, 302);
  }

  /**
   * Handling AJAX requests.
   */
  function js($actionName) {
    switch ($actionName) {
      case 'add':
        $cart_items = Session::get('cart_items');
        $cart_items[] = array(
          'product_id'=>Bootstrap::check_plain($_POST['product_id']),
          'qty'=>1);
        Session::set('cart_items', $cart_items);
        break;
      default:
        // Unauthorized.
        header("HTTP/1.0 401 Unauthorized");
        print '401 Unauthorized';
        exit;
        break;
    }
  }
}
