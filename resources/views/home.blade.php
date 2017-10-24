@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <!-- Display Products -->
        
    <div class="col-md-12 ">
        <div class="panel panel-default">
            <div class="panel-heading">50% Discounts!!</div>

                <div class="panel-body">
                    
    @foreach($products as $product)
        

    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">{{$product->product_name}}</div>
        <div class="panel-body"><img src="{{ asset('images/'.$product->Product_image)}}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">&#36;{{$product->product_price}}</div>
      </div>
    </div>



    @endforeach

                    
                </div>
            </div>
    </div>

        
        <!-- "endDisplay Product -->
        
    </div>
</div>
@endsection
