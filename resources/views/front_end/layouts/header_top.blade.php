<div class="headertop_desc">
    <div class="call">
        <p><span>Need help?</span> call us <span class="number">+880172-8055183</span></span></p>
    </div>
    <div class="account_desc">
        <ul>
            <li><a href="{{URL::to('/registration')}}">Register</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Delivery</a></li>
            <li><a href="#">Checkout</a></li>
            <li><a href="#">My Account</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<div class="header_top">
    <div class="logo">
        <a href="index.html"><img src="{{asset('public/front_end/')}}/images/logo.png" alt="" /></a>
    </div>
    <div class="cart">
        <p>Welcome to our Online Store! <a href="{{URL::to('/show-cart')}}"><span>Shopping Cart:</span></a>  
        <div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
            <ul class="dropdown">
                <li class="product-info col-sm-12">
                    <div class="image_size col-sm-6" >    
                        <a href="#" class="remove_link"></a>
                        <a href="#">
                            <img class="img-responsive" src="{{asset('public/front_end/')}}/images/preview.jpg" alt="preview.jpg">
                        </a>
                    </div>
                    <div class="p-right col-sm-6">
                        <p class="p-name">Donec Ac Tempus</p>
                        <p class="p-rice">61,19 €</p>
                        <p>Qty: 1</p>
                    </div>
                </li>
                <div class="col-sm-12">
                    <div class="cart">
                        <h2><span>Total</span></h2>
                        <span class="pull-right">122.38 €</span>
                    </div>
                    <div class="button">
                        <a href="{{URL::to('/Checkout')}}" class="btn-check-out">Checkout</a>
                    </div>
                </div>
            </ul>
        </div>
        </p>
    </div>
    <script type="text/javascript">
        function DropDown(el) {
            this.dd = el;
            this.initEvents();
        }
        DropDown.prototype = {
            initEvents: function () {
                var obj = this;

                obj.dd.on('click', function (event) {
                    $(this).toggleClass('active');
                    event.stopPropagation();
                });
            }
        }

        $(function () {

            var dd = new DropDown($('#dd'));

            $(document).click(function () {
                // all dropdowns
                $('.wrapper-dropdown-2').removeClass('active');
            });

        });

    </script>
    <div class="clear"></div>
</div>
<div class="header_bottom">
    <div class="menu">
        <ul>
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/delivery')}}">Delivery</a></li>
            <li><a href="contact.html">Contact</a></li>
            <div class="clear"></div>
        </ul>
    </div>
    <div class="search_box">
        <form>
            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Search';
                    }"><input type="submit" value="">
        </form>
    </div>
    <div class="clear"></div>
</div>
