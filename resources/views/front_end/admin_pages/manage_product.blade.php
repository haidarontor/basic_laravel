


@extends('front_end.admin.dashboard')
@section('admin_content')

<script type="text/javascript">
function check_delete(){
     check=confirm('Are you sure to delete this!');
     if(check){
         return true;
     }else{
         return false;
     }
}


</script>




<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                   
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($all_product as $v_product) {
                        ?>
                        <tr>
                            <td>{{$v_product->product_id}}</td>
                            <td class="center">{{$v_product->product_name}}</td>
                            <td class="center">{{$v_product->product_price}}</td>
                            
                            <td class="center">
                                <?php
                                if ($v_product->product_status == 1) {
                                    ?>
                                    <span class="label label-success">published</span>
                                    <?php
                                } elseif ($v_product->product_status == 0) {
                                    ?>
                                    <span class="label label-danger">Unpublished</span>
                                </td>
                            <?php }
                            ?>
                            <td class="center">
                                <?php
                                if ($v_product->product_status == 1) {
                                    ?>
                                    <a class="btn btn-danger" href="{{URL::to('/unpublished-product/'.$v_product->product_id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>  
                                    </a>
                                    <?php
                                } elseif ($v_product->product_status == 0) {
                                    ?>
                                    <a class="btn btn-success" href="{{URL::to('/published-product/'.$v_product->product_id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>  
                                    </a>
                                <?php } ?>
                                <a class="btn btn-info" href="{{URL::to('/edit-product/'.$v_product->product_id)}}">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="{{URL::to('/delete-product/'.$v_product->product_id)}}" onclick=" return check_delete();" >
                                    <i class="halflings-icon white trash"></i> 
                                </a>
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


@extends('front_end.admin.dashboard')
@section('admin_content')
<script type="text/javascript">
    function check_delete() {
        check = confirm('Are you  Sure to delete this ?');

        if (check) {
            return true;
        } else {
            return false;
        }

    }

</script>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
<?php
foreach ($all_product as $v_product) {
    ?>

                                                    <tr>
                                                        <td>{{$v_product->product_id}}</td>
                                                        <td class="center">{{$v_product->product_name}}</td>
                                                        <td class="center">
    <?php
    if ($v_product->product_status == 1) {
        ?>
                                                                                            <span class="label label-success">published</span>
        <?php
    } elseif ($v_product->product_status == 0) {
        ?>
                                                                                            <span class="label label-danger">Unpublished</span>
                                                                                        </td>
    <?php }
    ?>
                                                        <td class="center">
    <?php
    if ($v_product->product_status == 1) {
        ?>
                                                                                            <a class="btn btn-danger" href="{{URL::to('/unpublished-product/'.$v_product->product_id)}}">
                                                                                                <i class="halflings-icon white thumbs-down"></i>  
                                                                                            </a>
        <?php
    } elseif ($v_product->product_status == 0) {
        ?>
                                                                                            <a class="btn btn-success" href="{{URL::to('/published-product/'.$v_product->product_id)}} ">
                                                                                                <i class="halflings-icon white thumbs-up"></i>  
                                                                                            </a>
    <?php } ?>
                                                            <a class="btn btn-info" href="{{URL::to('/edit-product/'.$v_product->product_id)}}">
                                                                <i class="halflings-icon white edit"></i>  
                                                            </a>
                                                            <a class="btn btn-danger" href="{{URL::to('/delete-product/'.$v_product->product_id)}}" onclick=" return check_delete();">
                                                                <i class="halflings-icon white trash"></i> 
                                                            </a>
                                                        </td>
                                                    </tr>
<?php } ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection



-->












