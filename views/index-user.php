<h1>Trand</h1>

<div class="products">
  <?php foreach($this->products as $product_id => $product){ ?>
    <div id="product-<?php print $product_id?>" class="product">
      <img src="<?php print URL?><?php print $product['thumb']?>" alt="" class="thumb" />
      <h3><?php print $product['title']?></h3>
      <div class="price">$<?php print $product['price']?></div>
      <button class="btn add-to-cart" data-element-id="<?php print $product_id?>">Add to cart</button>
    </div>
  <?php } ?>
</div>
