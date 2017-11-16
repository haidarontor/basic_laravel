
@extends('front_end.admin.dashboard')
@section('admin_content')

<script type="text/javascript">
 function check_delete() {
     check_delete=confirm('Are you sure to delete this!!');
     if(check_delete){
         return true;
     }else{
         return false;
     }
 }

</script>

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
                        <th>Order Id</th>
                        <th>Customer Name</th>
                        <th>Order status</ th>

                        <th>Order Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                    foreach($all_order as $v_oder ){
                    ?>
                    <tr>
                        <td class="center">{{$v_oder->order_id}}</td>
                        <td class="center">{{$v_oder->first_name.' '.$v_oder->last_name }}</td>
                        <td class="center">{{$v_oder->order_status}}</td>
                        <td class="center">BDT.{{$v_oder->order_total}}tk.</td>
                        <td class="center">
                            <a class="btn btn-success" href="{{URL::to('/in-voice/'.$v_oder->order_id)}}">
                                <i class="halflings-icon white thumbs"></i>  
                            </a>
                            <a class="btn btn-info" href="{{URL::to('/edit-manage-order/'.$v_oder->order_id)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="{{URL::to('/delete-order/'.$v_oder->order_id)}}" onclick="return check_delete();">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                             <a class="btn btn-primary" href="{{URL::to('/generate-pdf/'.$v_oder->order_id)}}" >
                                <i class="halflings-icon white download"></i> 
                            </a>
<!--                               <a class="btn btn-primary" href="{{URL::to('/generate-pdf/'.$v_oder->order_id)}}" >
                                <i class="halflings-icon white download"></i> 
                            </a>-->
                        </td> 
                        
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

