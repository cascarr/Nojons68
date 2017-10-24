@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

<!--
-->
            </div>
        </div>
        </div>
        <!-- show admin products -->
        
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="padding-bottom: 20px;">
                Show Products
                <a  style="float: right;" href="/admin/create" class="btn btn-success">Add Product</a>
            </div>

                <div class="panel-body">

        
                <div class="table-responsive"> 

  <table class="table">
      
    <thead>
      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Product Image</th>
        <th>Created Date</th>
        <th>Updated Date</th>
      </tr><br/>
    </thead>
    <tbody>
        
      <tr class="success">
          
          @foreach($products as $product)
          
        <td>{{ $product->id }}</td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->product_desc }}</td>
        <td>&#36;{{ $product->product_price }}</td>
        <td><img src="{{ asset('images/'.$product->Product_image)}}"  alt="Image"></td>
        <td>{{ Carbon\Carbon::parse($product->created_at)->format('d/m/Y') }}</td>
        <td>{{ Carbon\Carbon::parse($product->updated_at)->format('d/m/Y') }}</td>
         
        <td><a href="/admin/edit/{{ $product->id }}" class="btn btn-success">Edit</a></td>  
        <td><a href="/admin/{{ $product->id }}" class="btn btn-danger">Delete</a></td>

          
      </tr>  <br/>    
        @endforeach
    </tbody>
      
  </table>
                    </div>
            </div>
        </div>
    </div>
        

        
        <!-- @endshow admin products -->
        
    
</div>
@endsection
