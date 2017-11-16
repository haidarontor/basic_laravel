@section('content')
<div class="privacy about">
    <h3><span>Cart</span></h3>

    <div class="checkout-right">
       
        <table class="timetable_sub">
            <thead>
                <tr>

                    <th>Product</th>
                    <th>Quantity</th>

                    <th>Price</th>
                    <th>Product Name</th>

                    <th>Total Price</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <?php
            $contents = Cart::content();

//         echo '<pre>';
//         print_r($contents);
//            
            ?>

            <tbody>

                @foreach($contents as $v_content)
                <tr class="rem1">

                    <td class="invert-image"><a href="single.html"><img src="{{$v_content->options['image']}}" alt=" " class="img-responsive"></a></td>

                    <td class="invert">
                        <div class="quantity"> 
                            <div class="quantity-select">    
                                {!! Form::open(['url' =>'/update-cart','method'=>'post']) !!}
                                <input type="text" name="qty" value="{{$v_content->qty}}">
                                <input type="hidden" name="row_id" value="{{$v_content->rowId}}">

                                <br/>
                                <button type="submit">
                                    <span class="button">update</span>					
                                    <div class="clear"></div>
                                </button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </td>
                    <td class="invert">BDT.{{$v_content->price}}</td>
                    <td class="invert">{{$v_content->name}}</td>

                    <td class="invert">BDT.{{$v_content->price*$v_content->qty}}</td>
                    <td class="invert">
                        <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}">Remove </a>

                    </td>
                </tr>
                @endforeach
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span>
                            <?php 
                            echo 'BDT.';
                            echo Cart::subtotal();
                            ?>
                        </span>
                    </td>
                    <td></td>
                </tr>

            </tbody>

        </table>
    </div>
    <div class="checkout-left">	
        <div class="col-md-6 checkout-left-basket">
            <h4>Continue to basket</h4>
            <ul>
                @foreach($contents as $v_content)
                <li>{{$v_content->name}}<i>-</i> <span>BDT.{{$v_content->price*$v_content->qty}} </span></li>
                @endforeach

                <hr/>
                <li>Total <i>-</i> <?php 
                echo 'BDT.';
                echo Cart::subtotal();?></li>

            </ul>
        </div>  


        <div class='col-md-6'>

            <div class="checkout-right-basket">

                <?php
                $coustomer_id = Session::get('customer_id');
                $shipping_id = Session::get('shipping_id');
                if ($coustomer_id != NULL && $shipping_id != NULL) {
                    ?>

                    <a href="{{URL::to('/payment')}}">Procced to Checkout </a>
                    <?php
                } elseif ($coustomer_id != NULL && $shipping_id == NULL) {
                    ?> 
                    <a href = "{{URL::to('/shipping-address')}}">Procced to Checkout </a>

                    <?php
                } else {
                    ?>
                    <a href="{{URL::to('/Checkout')}}">Procced to Checkout </a>
                <?php } ?>


            </div>
            <div class="clearfix"></div>

        </div>
        <div class="clearfix"></div>
    </div>
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<!--quantity-->
<script>
$('.value-plus').on('click', function () {
    var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) + 1;
    divUpd.text(newVal);
});

$('.value-minus').on('click', function () {
    var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) - 1;
    if (newVal >= 1)
        divUpd.text(newVal);
});
</script>
<!--quantity-->
<script>$(document).ready(function (c) {
        $('.close1').on('click', function (c) {
            $('.rem1').fadeOut('slow', function (c) {
                $('.rem1').remove();
            });
        });
    });
</script>
<script>$(document).ready(function (c) {
        $('.close2').on('click', function (c) {
            $('.rem2').fadeOut('slow', function (c) {
                $('.rem2').remove();
            });
        });
    });
</script>
<script>$(document).ready(function (c) {
        $('.close3').on('click', function (c) {
            $('.rem3').fadeOut('slow', function (c) {
                $('.rem3').remove();
            });
        });
    });
</script>

<!-- //js -->
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function () {
        var navoffeset = $(".agileits_header").offset().top;
        $(window).scroll(function () {
            var scrollpos = $(window).scrollTop();
            if (scrollpos >= navoffeset) {
                $(".agileits_header").addClass("fixed");
            } else {
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
</script>
<!-- //script-for sticky-nav -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
        );
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
    paypal.minicart.render();

    paypal.minicart.cart.on('checkout', function (evt) {
        var items = this.items(),
                len = items.length,
                total = 0,
                i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });

</script>

@endsection