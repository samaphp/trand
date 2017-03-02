<h1>Trand</h1>

<div class="products">
  <?php foreach($this->products as $product_id => $product){ ?>
    <div class="product">
      <img src="<?php print URL?><?php print $product['thumb']?>" alt="" class="thumb" />
      <h3><?php print $product['title']?></h3>
    </div>
  <?php } ?>
</div>
