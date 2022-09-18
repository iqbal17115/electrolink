    <div class="dropdown-cart-products">
       
    </div>
    <!-- End .cart-product -->

    <div class="dropdown-cart-total">
        <span>SUBTOTAL:</span>

        <span class="cart-total-price float-right" id="total_mini_cart_amount">
           
        </span>
    </div>
    <!-- End .dropdown-cart-total -->

    <div class="dropdown-cart-action">
        <a href="{{ route('cart') }}" class="btn btn-gray btn-block view-cart">View
            Cart</a>
        <a href="{{ route('checkout') }}" class="btn btn-dark btn-block">Checkout</a>
    </div>
    <!-- End .dropdown-cart-totalhhfhjdfhjdfhdf -->

@include('ecommerce.optional_js')
