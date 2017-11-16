
@extends('front_end.admin.dashboard')

@section('title')
Add Product
@endsection

@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Add Product</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Product Form</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Category Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h3 style='color:green'>
            <?php
            echo Session::get('message');
            Session::put('message', '');
            ?>
        </h3>
        <div class="box-content">
            {!! Form::open(['url' => '/save-product','class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data'])!!}
            <fieldset>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Product title</label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" id="typeahead" name='product_title'>

                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Price</label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" id="typeahead" name='product_price'>

                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Category Name</label>
                    <div class="controls">
                        <select name='id'> 
                            <option>-----SELECT CATEGORY------ </option>
                            @foreach($publish_category as $v_category)
                            <option value='{{$v_category->id}}'>{{$v_category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Manufacturer Name</label>
                    <div class="controls">
                        <select name='manufacturer_id'> 
                            <option>-----SELECT CATEGORY------ </option>
                            @foreach($publish_manufacturer_name as $v_manufacturer)
                            <option value="{{$v_manufacturer->manufacturer_id}}"> {{$v_manufacturer->manufacturer_name}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Name</label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" id="typeahead" name='product_name' >

                    </div>
                </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Short Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" rows="3" name='product_short_description'></textarea>
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Long Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" rows="3" name='product_long_description'></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Images</label>
                    <div class="controls">
                        <input type="file" class="span6 typeahead" id="typeahead" name='image_name'>

                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Is Features</label>
                    <div class="controls">
                        <input type="checkbox" class="span6 typeahead" id="typeahead" name='is_feature'>

                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <select name='product_status'> 
                            <option>Category Status </option>
                            <option value='1'>Published</option>
                            <option value='0'>Unpublished</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection