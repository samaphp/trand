<?php

/**
 * @file
 * User session handling functions.
 */

class Session
{

  public static function init()
  {
    @session_start();
  }

  public static function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public static function get($key)
  {
    if (isset($_SESSION[$key]))
      return $_SESSION[$key];
    else
      return FALSE;
  }

  public static function destroy()
  {
    session_destroy();
  }

  public static function user_data($username)
  {
    $allowed_roles = array('employee', 'affiliate', 'new_customer', 'old_customer');
    if(in_array($username, $allowed_roles)){
      // Getting user data.
      $users = array();
      $users['employee'] = array('username'=>'Employee', 'created'=>'1481500800');
      $users['affiliate'] = array('username'=>'Affiliate', 'created'=>'1478822400');
      $users['old_customer'] = array('username'=>'Customer 1', 'created'=>'1398902400');
      $users['new_customer'] = array('username'=>'Customer 2', 'created'=>'1485993600');
      return $users[$username];
    }else
      return FALSE;
  }

}
