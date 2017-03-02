<!doctype html>
<html>
<head>
  <title><?php print (isset($this->title)) ? $this->title : 'Trand'; ?></title>
  <link rel="stylesheet" href="<?php print URL; ?>assets/css/style.css" />
</head>
<body>


  <div class="container">
    <div id="header" class="section">
      <a href="<?php print URL; ?>index">Home</a>

      <?php if($this->user_is_logged_in){ ?>
      <div class="pull-side">
        Hello <?php print $this->user['username']?>, <a href="<?php print URL; ?>user/logout">Logout</a>
      </div>
      <?php }else{ ?>
      <div class="pull-side">
        <a href="<?php print URL; ?>user/login">Login</a>
      </div>
      <?php } ?>
    </div>

    <div id="content" class="section">
