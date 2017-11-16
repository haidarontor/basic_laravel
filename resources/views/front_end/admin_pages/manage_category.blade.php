
@extends('front_end.admin.dashboard')
@section('admin_content')
<script type="text/javascript">

    function check_delete() {
        check = confirm('Are You Sure To Delete this ?');
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
                        <th>Category Id</th>
                        <th>Category Name</th>

                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($all_category as $v_category) {
                        ?>
                        <tr>
                            <td>{{$v_category->id}}</td>
                            <td class="center">{{$v_category->category_name}}</td>
                            <td class="center">
                                <?php
                                if ($v_category->category_status == 1) {
                                    ?>

                                    <span class="label label-success">published</span>
                                    <?php
                                } elseif ($v_category->category_status == 0) {
                                    ?>
                                    <span class="label label-danger">Unpublished</span>
                                <?php } ?>
                            </td>
                            <td class="center">
                                <?php
                                if ($v_category->category_status == 1) {
                                    ?>
                                    <a class="btn btn-danger" href="{{URL::to('/unpublished-category/'.$v_category->id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>  
                                    </a>
                                    <?php
                                } elseif ($v_category->category_status == 0) {
                                    ?>
                                    <a class="btn btn-success" href="{{URL::to('/published-category/'.$v_category->id)}}">
                                        <i class="halflings-icon white thumbs-up"></i>  
                                    </a>
                                <?php } ?>
                                <a class="btn btn-info" href="{{URL::to('/edit-category/'.$v_category->id)}}">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <?php
                                $access_lebel = Session::get('access_lebel');

                                if ($access_lebel == 1) {
                                    ?>
                                    <a class="btn btn-danger" href="{{URL::to('/delete-category/'.$v_category->id)}}" onclick=" return check_delete();">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                <?php } ?>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
        </div>
    </div>
</div>
@endsection