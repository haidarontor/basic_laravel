@extends('front_end.layouts.master')

@section ('content')
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="back-links">
                <p><a href="index.html">Home</a> >>>> <a href="#">Electronics</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="cont-desc span_1_of_2">
                <div class="product-details">				
                    <div class="grid images_3_of_2">
                        <div id="container">
                            <div id="products_example">
                                <div id="products">
                                    <div class="slides_container">
                                        <a href="#" target="_blank"><img src="{{asset($product_info->image_name)}}" alt=" " /></a>

                                    </div>
                                    <ul class="pagination">
                                        <li><a href="#"><img src="{{asset('public/front_end/')}}/images/thumbnailslide-1.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="{{asset('public/front_end/')}}/images/thumbnailslide-2.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="{{asset('public/front_end/')}}/images/thumbnailslide-3.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="{{asset('public/front_end/')}}/images/thumbnailslide-4.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="{{asset('public/front_end/')}}/images/thumbnailslide-5.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="{{asset('public/front_end/')}}/images/thumbnailslide-6.jpg" alt=" " /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc span_3_of_2">
                        <h1>{{$product_info->product_name}}</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>					
                        <div class="price">
                            <p>Price: <span>{{$product_info->product_price}}</span></p>
                        </div>
                        {!! Form::open(['url' =>'/add-to-cart/'.$product_info->product_id,'method'=>'post']) !!}
                        <div class="available"> 
                            <p>Available Options :</p>
                            <ul>
                                <li>Color:
                                    <select>
                                        <option>Silver</option>
                                        <option>Black</option>
                                        <option>Dark Black</option>
                                        <option>Red</option>
                                    </select>
                                </li>
                                <li>Size:<select>
                                        <option>Large</option>
                                        <option>Medium</option>
                                        <option>small</option>
                                        <option>Large</option>
                                        <option>small</option>
                                    </select></li>
                                <li>Quality:<select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select></li>
                            </ul>
                            <br>
                            <div>Qty:   
                                <input type="text" name="qty" value="1">
                                <!--<input type="hidden" name="product_id"  value="{{$product_info->product_id}}">  -->
                            </div>
                        </div>

                        <div class="share-desc">
                            <div class="share">
                                <p>Share Product :</p>
                                <ul>
                                    <li><a href="#"><img src="{{asset('public/front_end/')}}/images/facebook.png" alt="" /></a></li>
                                    <li><a href="#"><img src="{{asset('public/front_end/')}}/images/twitter.png" alt="" /></a></li>					    
                                </ul>
                            </div>
                            <button type="submit">
                                <span>Add to Cart</span>					
                                <div class="clear"></div>
                            </button>
                        </div>
                        {!! Form::close() !!}
                        <div class="wish-list">
                            <ul>
                                <li class="wish"><a href="#">Add to Wishlist</a></li>
                                <li class="compare"><a href="#">Add to Compare</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="product_desc">	
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            <li>Product Details</li>
                            <li>product Tags</li>
                            <li>Product Reviews</li>
                            <div class="clear"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="product-desc">
                                <p>{{$product_info->product_short_description}}</p>   
                                <div class="product-tags">
                                    <p>{{$product_info->product_long_description}}</p> 
                                    <h4>Add Your Tags:</h4>
                                    <div class="input-box">
                                        <input type="text" value="">
                                    </div>
                                    <div class="button"><span><a href="#">Add Tags</a></span></div>
                                </div>	

                                <div class="review">
                                    <h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
                                    <ul>
                                        <li>Price :<a href="#"><img src="{{asset('public/front_end/')}}/images/price-rating.png" alt="" /></a></li>
                                        <li>Value :<a href="#"><img src="{{asset('public/front_end/')}}/images/value-rating.png" alt="" /></a></li>
                                        <li>Quality :<a href="#"><img src="{{asset('public/front_end/')}}/images/quality-rating.png" alt="" /></a></li>
                                    </ul>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <div class="your-review">
                                        <h3>How Do You Rate This Product?</h3>
                                        <p>Write Your Own Review?</p>
                                        <form>
                                            <div>
                                                <span><label>Nickname<span class="red">*</span></label></span>
                                                <span><input type="text" value=""></span>
                                            </div>
                                            <div><span><label>Summary of Your Review<span class="red">*</span></label></span>
                                                <span><input type="text" value=""></span>
                                            </div>						
                                            <div>
                                                <span><label>Review<span class="red">*</span></label></span>
                                                <span><textarea> </textarea></span>
                                            </div>
                                            <div>
                                                <span><input type="submit" value="SUBMIT REVIEW"></span>
                                            </div>
                                        </form>
                                    </div>				
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion           
                                width: 'auto', //auto or any width like 600px
                                fit: true   // 100% fit in a container
                            });
                        });
                    </script>		
                    <div class="content_bottom">
                        <div class="heading">
                            <h3>Related Products</h3>
                        </div>
                        <div class="see">
                            <p><a href="#">See all Products</a></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="section group">
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href="#"><img src="{{asset('public/front_end/')}}/images/new-pic1.jpg" alt=""></a>					
                            <div class="price" style="border:none">
                                <div class="add-cart" style="float:none">								
                                    <h4><a href="#">Add to Cart</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href="#"><img src="{{asset('public/front_end/')}}/images/new-pic2.jpg" alt=""></a>
                            <div class="price" style="border:none">
                                <div class="add-cart" style="float:none">								
                                    <h4><a href="#">Add to Cart</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href="#"><img src="{{asset('public/front_end/')}}/images/new-pic4.jpg" alt=""></a>
                            <div class="price" style="border:none">
                                <div class="add-cart" style="float:none">								
                                    <h4><a href="#">Add to Cart</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="grid_1_of_4 images_1_of_4">
                            <img src="{{asset('public/front_end/')}}/images/new-pic3.jpg" alt="">
                            <div class="price" style="border:none">
                                <div class="add-cart" style="float:none">								
                                    <h4><a href="#">Add to Cart</a></h4>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




@endsection