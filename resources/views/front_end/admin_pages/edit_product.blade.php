
@extends('front_end.admin.dashboard')
@section('admin_content')
<ul class="breadcrumb">
    <li>
        
        <i class="icon-home" ></i>
        <a href="index.html">Edit Product</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Product Form</a>
    </li>
</ul>
 
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Category Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            {!! Form::open(['url' => '/update-product','class'=>'form-horizontal','name'=>'edit_product','method'=>'POST','enctype'=>'multipart/form-data'])!!}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Product title</label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" id="typeahead" value="{{$product_info->product_title}}"  name='product_title'>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Product price</label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" id="typeahead" value="{{$product_info->product_price}}"  name='product_price'>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Category Name</label>
                    <div class="controls">
                        <select name='id'> 
                            <option>-----SELECT CATEGORY------ </option>
                            @foreach($publish_category_product as $v_category)
                            <option value="{{$v_category->id}}">{{$v_category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Manufacturer Name</label>
                    <div class="controls">
                        <select name='manufacturer_id'> 
                            <option>-----Manufacturer------ </option>
                            @foreach($publish_manufacturer_product as $v_manufacturer)
                            <option value="{{$v_manufacturer->manufacturer_id}}"> {{$v_manufacturer->manufacturer_name}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Name</label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" id="typeahead" value="{{$product_info->product_name}}" name='product_name' >
                        <input type="hidden" class="span6 typeahead" id="typeahead" value="{{$product_info->product_id}}" name='product_id' >
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Short Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" rows="3" name='product_short_description'> {{$product_info->product_short_description}}</textarea>
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Long Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" rows="3" name='product_long_description'> {{$product_info->product_long_description}}</textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Images</label>
                    <div class="controls">
                        <input type="file" class="span6 typeahead" id="typeahead" value="{{$product_info->image_name}}" name='image_name'>
                        <img src="{{asset($product_info->image_name)}}" width="100" height="100">
                        <!-- image hidden or last path update korar jonno  -->   
                        <input type="hidden" class="span6 typeahead" id="typeahead" value="{{$product_info->image_name}}" name='last_image_path'>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Is Features</label>
                 <div class="controls">
                    <?php
                    if ($product_info->is_feature == 1) {
                        ?>
                        <input type="checkbox" checked="checked" name='is_feature'>
                        <?php
                    } elseif ($product_info->is_feature == 0) {
                        ?>
                        <input type="checkbox"  name='is_feature'>
                    <?php } ?>
                </div>
                </div>
   
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn">Cancel</button>
        </div>
        </fieldset>
        {!! Form::close() !!}
    </div>
</div> 
 

 

@endsection




