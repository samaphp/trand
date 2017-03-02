jQuery(document).ready(function(){
  jQuery('.add-to-cart').click(function() {
    var element_id = jQuery(this).attr('data-element-id');
    jQuery(this).prop('disabled', true);
    jQuery.ajax({
  	 	type: 'POST',
  	 	url: '/cart/js/add',
  	 	data: 'product_id='+element_id+'&qty=1',
  	 	dataType: 'text',
  	 	error: function(data) {
        console.log('Error adding item to cart', data);
        jQuery('#product-'+element_id+' button.add-to-cart').removeAttr('disabled');
      },
  	 	success: function(data){
        jQuery('#product-'+element_id+' button.add-to-cart').removeAttr('disabled');
        jQuery('.cart-link').fadeOut(400);
        jQuery('.cart-link').fadeIn(400);
        // Updating cart counter.
        var cart_counter = jQuery('.cart-counter').html();
        jQuery('.cart-counter').html(parseInt(cart_counter)+1);
        console.log('Item has been added.', data);
      }
    });
  });
});
