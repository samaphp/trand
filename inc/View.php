<?php

/**
 * @file
 * Handling website HTML templates, which controls the output of website pages.
 * The View class allows for all output of the website to be customized
 * by HTML files.
 */

class View {

  public function render($name, $noInclude = false)
  {
    require 'views/' . Bootstrap::check_plain($name) . '.php';
  }

}
