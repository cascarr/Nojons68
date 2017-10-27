@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

<!--
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
-->
            </div>
        </div><br /><br />
        
        <!-- form -->
        
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Product
                
            <a  style="float: right;" href="/admin/show" class="btn btn-success">Show Products</a>
            </div>

                <div class="panel-body">

        
 <form method="post" action="/admin" enctype="multipart/form-data">
    
    {{ csrf_field() }}
    
  <div class="form-group">
    <label for="product_name">Product name</label>
    <input type="text" class="form-control" id="product_name" name="product_name">
    <span class="help-block">
        <strong>{{ $errors->first('product_name') }}</strong>
    </span>
  </div>
  
  <div class="form-group">
    <label for="product_desc">Description</label>
    <textarea id="product_desc" name="product_desc" class="form-control"></textarea>
    <span class="help-block">
        <strong>{{ $errors->first('product_desc') }}</strong>
    </span>
  </div>
    

  <div class="form-group">
    <label for="product_price">Price</label>
    <input type="number" class="form-control"  value="" name="product_price" id="product_price">
    <span class="help-block">
        <strong>{{ $errors->first('product_price') }}</strong>
    </span>

  </div>



  <div class="form-group">
    <label for="product_image">Product image</label>
    <input type="file" id="Product_image" name="Product_image"  style="width:100%">
    <p class="help-block">Please insert product image here.</p>
    <span class="help-block">
        <strong>{{ $errors->first('Product_image') }}</strong>
    </span>

  </div>

    
  <button type="submit" class="btn btn-primary">Create Product</button>
</form>
            </div>
        </div>
    </div>
        
        <!-- end of form -->
        
    </div>
</div>
@endsection
