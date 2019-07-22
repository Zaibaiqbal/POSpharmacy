<!DOCTYPE html>
<html lang="en">
@extends('master')
<head>
   
 @section('title' ,'Product list')
</head>

<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">


@section('content')
   <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
        <div class=" container">
            <div class="row">
                    <div class="col-md-6">
                            <p> <i class="fa fa-cog"></i> Product<p>
                    </div>
            </div>
        </div>
                    </header>
                    <div class="container mt-3">
    <div class="content_section">

        <div class="page_info p-1" style="background:black;">
            <?php
            if (isset($msg) && $msg != '') {
                echo $msg;
            }
            ?>
            <div class="page_info_left">
                <h3><i class="fa fa-chevron-circle-right"></i>&nbsp;Product List</h3>
            </div>
            <div class="page_info_right" style="float:right; margin-top: -40px;">
            <a href="{{url('addproduct')}}" class="btn btn-success add_new_pro_btn"><i class="fa fa-plus"></i>Add Product</a>
                <a href="{{url('admin')}}" class="btn btn-info back_btn">Back</a>
            </div>
        </div>
        </div>
        </div>

  
      <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                 <div class="purchase-form mb-3 mt-3">
                 <form action="" method="POST" style="" class="form-group invoice-detail">
                                    
                   <h3 class="ml-2">View all Products</h3>
                   <div class="row mb-3">
                                        <div class="col-md-12">
                                            <center>
                                                 <button class="btn btn-secondary">
                                                <span class="fa fa-print" aria-hidden="true"></span> </button> 
                                                <button class="btn btn-secondary ml-0"> <i class="fa fa-file-pdf-o"  style="color:red"></i></button>
                                                <button class="btn btn-secondary ml-0"> <i class="fa fa-file-excel-o"  style="color:rgb(56, 66, 56)"></i></button>
                                            </center>
                                                        

                                        </div>

                                    </div>
                                    @if(session('message'))

<p class="alert alert-success"> 
    {{session('message')}} </p>
            @endif
                  <div class="purchase-table"  style="overflow:hidden">
                     <table class="table table-bordered table-hover">
                    
                        {{csrf_field()}}

                       

                              <thead>
                              <tr>
                              <th>#</th>          
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
                                                  <td>{{$no++}}</td>
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
                                                         class="btn btn-info"><i class="fa fa-eye">view </i>
                                                
                                                    </a>
                                                    </td>                                                    
                                                    <td> 
                                                    <a href="{{url('pages/' .$product->id . '/editproduct/')}}"
                                                         class="btn btn-info"><i class="fa fa-edit">Edit </i>
                                                    </td>

                                                    <td> 
                                                    <a href="{{url('pages/' .$product->id . '/product_list/')}}"
                                                         class="btn btn-info"> <i class="fa fa-trash">Delete </i>
                                                    </td>

                                                  </tr>
                                                  @endforeach
                                                  
                                                </tbody>
                                        </table>
                                        <div>{{$products->links()}}</div>
                                      
                                        </div>
                                        </div>
                                    </div>
                                     </form>
                                       
                                </div>
@endsection                           
</body>
</html>