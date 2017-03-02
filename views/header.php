<!doctype html>
<html>
<head>
  <title><?php print (isset($this->title)) ? $this->title : 'Trand'; ?></title>
  <link rel="stylesheet" href="<?php print URL; ?>assets/css/style.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?php print URL; ?>assets/js/custom.js"></script>
</head>
<body>

  <div class="container">
    <div id="header" class="section">
      <a href="<?php print URL; ?>index">Home</a>

      <?php if($this->user_is_logged_in){ ?>
      <div class="pull-side">
        Hello <?php print $this->user['username']?>,
        <?php if($this->cart){ ?>
        <a href="<?php print URL; ?>cart" class="cart-link">Cart (<span class="cart-counter"><?php print $this->cart['count']?></span>)</a> |
        <?php }else{ ?>
        <a href="<?php print URL; ?>cart" class="cart-link">Cart (<span class="cart-counter">0</span>)</a> |
        <?php } ?>
        <a href="<?php print URL; ?>user/logout">Logout</a>
      </div>
      <?php }else{ ?>
      <div class="pull-side">
        <a href="<?php print URL; ?>user/login">Login</a>
      </div>
      <?php } ?>
    </div>

    <div id="content" class="section">
