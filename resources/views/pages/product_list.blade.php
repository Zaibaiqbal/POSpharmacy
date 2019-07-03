<!DOCTYPE html>
<html lang="en">
@extends('master')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 @section('title' ,'Product list')
</head>

<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">


@section('content')
   <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
        <div class=" container">
            <div class="row">
                    <div class="col-md-6">
                            <p> <i class="fa fa-cog"></i> Product List <p>
                    </div>
            </div>
        </div>
                    </header>
  
      <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                 <div class="purchase-form mb-3 mt-3">
                 <form action="" method="POST" style="" class="form-group invoice-detail">
                                    
                   <h3 class="ml-2">View all Products</h3>
                  <div class="purchase-table">
                     <table class="table table-bordered table-hover">
                        {{csrf_field()}}
                              <thead>
                              <tr>
                    <th>Product id</th>
                  <th>Product name</th>
                   <th>Type</th>
                  <th>Cost price</th>
                   <th>Sell price</th>
                   <th>Invoice id</th>
                   <th>Expiry date</th>
                    <th>Quantity</th>
                    
                   <th>View</th>
                    <th>Edit</th>
                  <th>Delete</th>
                  
                             </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                @foreach($products as $product)
                                                  <tr>
                                                  
                                                    <td>{{$product->product_id}}</td>
                                                    <td>{{$product->product_name}}</td>
                                                    <td>{{$product->type}}</td>
                                                    <td>{{$product->cost_price}}</td>
                                                    <td>{{$product->sell_price}}</td>
                                                    <td>{{$product->invoice_id}}</td>
                                                    <td>{{$product->exp_date}}</td>
                                                    <td>{{$product->quantity}}</td>
                                                   

                                                    <td> 
                                                 <a href="{{url('pages/show/' .$product->id)}}"
                                                         class="btn btn-info">view
                                                
                                                    </a>
                                                    </td>                                                    
                                                    <td> 
                                                    <a href="{{url('pages/' .$product->id . '/editproduct/')}}"
                                                         class="btn btn-info">Edit
                                                    </td>

                                                    <td> 
                                                    <a href="{{url('pages/' .$product->id . '/product_list/')}}"
                                                         class="btn btn-info">Delete
                                                   
                                                  </tr>
                                                  @endforeach
                                                  
                                                </tbody>
                                        </table>
                                        </div>
                                        </div>
                                    </div>
                                     </form>
                                       
                                </div>
@endsection                           
</body>
</html>