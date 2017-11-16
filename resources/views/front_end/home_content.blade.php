@extends('front_end.layouts.master')

@section('title')
Home
@endsection

@section('categories_slider')

<div class="header_bottom_left">				
    <div class="categories">
        <ul>
            <h3>Categories</h3>

            <?php
            $all_published_category = DB::table('tbl_category')
                    ->select('*')
                    ->where('category_status', 1)
                    ->get();

            foreach ($all_published_category as $v_category) {
                ?>
                <li><a href="{{URL::to('/category-product/'.$v_category->id)}}">{{$v_category->category_name}}</a></li>
            <?php } ?>  

        </ul>
        <ul>

            <h3>MANUFACTURERS</h3>
            <?php
            $all_published_manufacturer = DB::table('tbl_manufacturer')
                    ->select('*')
                    ->where('manufacturer_status', 1)
                    ->get();

            foreach ($all_published_manufacturer as $v_manufacturer) {
                ?>
                <li> <a href="#"> {{$v_manufacturer->manufacturer_name}} </a></li>

            <?php } ?>
        </ul>

    </div>					
</div>


<?php
$featured_product = DB::table('tbl_product')
        ->where('product_status', 1)
        ->where('is_feature', 1)
        ->get();
?>
<div class="header_bottom_right">	


    <div class="slider">

        <div id="slider">
            <div id="mover">
                <?php
                $i = 0;
                foreach ($featured_product as $v_product) {
                    ?>

                    <div id="<?php
                    if ($i == 0) {
                        echo "slide-1";
                    }
                    ?>" class="slide">
                        <div class="slider-img">
                            <a href="{{URL::to('/product-details/'.$v_product->product_id)}}"><img style="width: 400px; height: 300px;" src="{{asset($v_product->image_name)}}" alt="{{asset($v_product->product_name)}}" /></a>									    
                        </div>
                        <div class="slider-text">
                            <h1>{{$v_product->product_name}}</h1>
                            <h2><span>{{$v_product->product_price}}</span></h2>
                            <h2>UPTo 20% OFF</h2>
                            <div class="features_list">
                                <h4>Big offer</h4>							               
                            </div>
                            <a href="preview.html" class="button">Shop Now</a>
                        </div>	
                        <div class="clear"></div>	
                    </div>


                    <?php
                    $i++;
                }
                ?>
            </div>
        </div>

        <div class="clear"></div>	
    </div>




</div>


@endsection


@section('content')

<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>New Products</h3>
            </div>

            <div class="clear"></div>
        </div>
        <div class="section group">
            @foreach($all_publihed_product as $v_product)
            <div class="grid_1_of_4 images_1_of_4">
                <a href="{{URL::to('/product-details/'.$v_product->product_id)}}"><img src="{{asset($v_product->image_name)}}" height="200px" width="200px" alt="" /></a>
                <h2>{{$v_product->product_title}} </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">BDT{{$v_product->product_price}}</span></p>
                    </div>
                    <div class="add-cart">								
                        <h4><a href="{{URL::to('/add-to-cart/'.$v_product->product_id)}}">Add to Cart</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
