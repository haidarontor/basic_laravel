<html>
    <head>
        <title>PDF</title>
    </head>

    <body>
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
            
            </tbody>
        </table>
    </body>
</html>