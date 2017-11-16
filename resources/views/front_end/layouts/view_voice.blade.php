@section('admin_content')
<div class="box-content">
    <table class="table table-striped table-bordered" >
        <tr>
            <td></td>
            <td>
                <span>Invoice Id#.00</span>{{$order_table_info->order_id}}
            </td>
        </tr>
        <tr>
            <td>
                <h2>Customer info:</h2>
                {{$customer_info->first_name.' '.$customer_info->last_name}}<br>
                {{$customer_info->email_address}}<br>
                {{$customer_info->country}}<br>
                {{$customer_info->city}}-{{$customer_info->post_zip_code}}<br>
                {{$customer_info->mobile_number}}<br>
            </td>
            <td>
                <h2>Shipping Address:</h2>
                {{$shipping_info->first_name.' '.$shipping_info->last_name}}<br>
                {{$shipping_info->email_address}}<br>
                {{$shipping_info->country}}<br>
                {{$shipping_info->city}}-{{$shipping_info->post_zip_code}}<br>
                {{$shipping_info->mobile_number}}<br>
                
            </td>
        </tr>
        <tr>
            <td>
                <h2>Payment Info:</h2>
                {{$payment_info->payment_type}}
            </td>
        </tr>
        
    </table>
</div>

<div class="box-content">
    <table class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Sales Quantity</th>
                <th>Product Price</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            foreach ($order_details as $v_order_details) {
                ?>
                <tr>
                    <td class="center">{{$v_order_details->product_name}}</td>

                    <td class="center">{{$v_order_details->product_sales_quantity}}</td>
                    <td class="center">BDT.{{$v_order_details->product_price }}TK.</td>
                </tr>
            <?php } ?>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td>BDT.{{$order_table_info->order_total}}tk.</td>
                </tr>
        </tbody>
    </table>
</div>
@endsection

