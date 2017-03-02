<h1>Trand</h1>

<p>Cart page.</p>

<?php if($this->cart['items']){ ?>
  <?php $cartTotal = 0; ?>
  <table width="100%" class="cart-table">
    <tr>
      <td>*</td>
      <td>Item name</td>
      <td>Price</td>
    </tr>
  <?php foreach($this->cart['items'] as $item_key => $item){ ?>
    <tr>
      <td><?php print $item_key+1?></td>
      <td><?php print $item['title']?></td>
      <td><?php print $item['price']?></td>
    </tr>
    <?php $cartTotal = $cartTotal + $item['price']; ?>
  <?php } ?>
  <tr>
    <td colspan="2">Total</td>
    <td><?php print $cartTotal?></td>
  </tr>
  </table>
  <div class="pull-side"><a href="<?php print URL?>checkout">Checkout</a></div>
  <a href="<?php print URL?>cart/reset">Empty cart</a>
<?php }else{ ?>
  You do not have items yet. <a href="<?php print URL?>">Click here</a> and add items to your cart.
<?php } ?>
