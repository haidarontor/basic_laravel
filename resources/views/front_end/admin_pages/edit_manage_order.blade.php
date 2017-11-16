 @section('admin_content')

<div class="box-content col-sm-6">
    <h2>Customer Info:</h2>
    {!! Form::open(['url' => '/', 'class'=>'form-horizontal','method'=>'post'])!!}
    <fieldset>

        <div class="control-group">
            <label class="control-label" for="typeahead">Frist Name</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$customer_info->first_name}}"  name='first_name'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Last Name</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$customer_info->last_name}}"  name='last_name'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Email Address</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$customer_info->email_address}}"  name='email_address'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Address</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$customer_info->address}}"  name='address'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">State</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$customer_info->state}}"  name='state'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Post/Zip Code</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$customer_info->post_zip_code}}"  name='post_zip_code'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Mobile No.</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$customer_info->mobile_number}}"  name='mobile_number'>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn">Cancel</button>
        </div>
    </fieldset>
    {!! Form::close() !!}
</div>

<div class="box-content col-sm-6">
    <h2>Shipping Info:</h2>
    {!! Form::open(['url' => '/', 'class'=>'form-horizontal','method'=>'post'])!!}
    <fieldset>

        <div class="control-group">
            <label class="control-label" for="typeahead">Frist Name</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$shipping_info->first_name}}"  name='first_name'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Last Name</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$shipping_info->last_name}}"  name='last_name'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Email Address</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$shipping_info->email_address}}"  name='email_address'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Address</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$shipping_info->address}}"  name='address'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">State</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$shipping_info->state}}"  name='state'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Post/Zip Code</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$shipping_info->post_zip_code}}"  name='post_zip_code'>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="typeahead">Mobile No.</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$shipping_info->mobile_number}}"  name='mobile_number'>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn">Cancel</button>
        </div>
    </fieldset>
    {!! Form::close() !!}
</div>





<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-content">
            <h2>Order Details Table</h2>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($order_details_by_order_id as $v_order_details) {
                        ?>
                        <tr>
                            <td class="center"><?php echo ++$i ?></td> 
                            <td class="center">{{$v_order_details->product_name}}</td>

                            <td  class="center">
                                {!! Form::open(['url' => '/update-qty','method'=>'POST'])!!}

                                <input type="text" name="product_sales_quantity" value="{{$v_order_details->product_sales_quantity}}">                        
                                <input type="hidden" name='product_details_id' value="{{$v_order_details->product_details_id}}" >
                                <input type="hidden" name='order_id' value="{{$v_order_details->order_id}}" >
                                <br/>
                                <button type="submit">
                                    <div class="clear"></div>                                
                                    <span class="button">update</span>					

                                </button>
                                {!! Form::close() !!}

                            </td>
                            <td class="center"> BDT.{{$v_order_details->product_price*$v_order_details->product_sales_quantity}}tk.</td>
                            <td class="invert">
                                <a href="{{URL::to('/delete-qty/'.$v_order_details->product_details_id)}}">Remove </a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection




















<!-- 
 * 
 * <div class="box-content">

    {!! Form::open(['url' => '/update-qty', 'class'=>'form-horizontal','method'=>'post'])!!}
    <fieldset>
<?php
$i = 1;
?>
        @foreach($order_details_by_order_id as $v_order_details)

<?php
echo "<p style='color:red'>Product Serial: $i </p>";
$i++;
?>
        <div class="control-group">
            <label class="control-label" for="typeahead">Product Name</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$v_order_details->product_name}} "  name='product_name[]'>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="typeahead">Product Sales Quantity</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value=" {{$v_order_details->product_sales_quantity}} " name='product_sales_quantity[]' >
                <input type="hidden" class="span6 typeahead" id="typeahead" value="{{$v_order_details->product_details_id}} " name='product_details_id[]' >
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="typeahead">Product Price</label>
            <div class="controls">
                <input type="text" class="span6 typeahead" id="typeahead" value="{{$v_order_details->product_price}} "  name='product_price[]'>
            </div>
        </div>


        @endforeach
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn">Cancel</button>
        </div>
    </fieldset>
    {!! Form::close() !!}

</div>
 */