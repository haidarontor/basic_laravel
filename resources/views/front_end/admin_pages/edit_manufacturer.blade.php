@extends('front_end.admin.dashboard')
@section('admin_content')
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Add Manufacturer</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Manufacuturer Form</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
         
            
            
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Manufacturer Elements</h2> <br/>
          
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        
        <div class="box-content">
            {!! Form::open(['url' => '/update-manufacturer','class'=>'form-horizontal','method'=>'POST'])!!}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Manufacturer Name </label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" id="typeahead" value="{{$manufacturer_info->manufacturer_name}}" name='manufacturer_name'>
                        <input type="hidden" class="span6 typeahead" id="typeahead" value="{{$manufacturer_info->manufacturer_id}}" name='manufacturer_id'>

                    </div>
                </div>



                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Manufacturer Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" rows="3" name='manufacturer_description'> {{$manufacturer_info->manufacturer_description}}    </textarea>
                    </div>
                </div>
             
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update </button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div><!--/span-->

</div><!--/row-->
@endsection