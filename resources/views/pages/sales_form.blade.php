<!DOCTYPE html>
<html lang="en">
@extends('master')
<head>
    
    @section('title' ,'Sales')
    
</head>
<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">
@section('content')
    <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
        <div class=" container">
            <div class="row">
                    <div class="col-md-6">
                            <p> <i class="fa fa-cog"></i> POS <p>
                    </div>
            </div>
        </div>
                    </header>
  

    
<div class="container">
    <div class="row">
        <div class="col-md-7">

    <div class="sale_form">
<h3>SALES</h3>
<h6>Employee Id: </h6> 
<div class="row">
<div class="col-md-9 ml-2">
<form action="{{url( 'sales_form' )}}" method="POST">
{{csrf_field()}}
<div class="input-group">
    <label for="">Medicine Name/ ID:</label>
        <input type="search" name="productName" class="form-control mb-2 " placeholder="Search Item Name or Id here...">
        <button type="submit" class="btn btn-info mb-2" > <i class="fa fa-search"></i>search </button>
        
    </div>
    </form>
</div>
</div>
<div class="col-md-7">
    <div class="input-group">
            <label for="">Alternative Medicine:</label>
            <input type="search" name="q" class="form-control mb-3" placeholder="Alternative Medicine">
        </div>
    </div>
    <table  class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
          
            <th class="text-center">Item Id</th>
            <th class="text-center">Item Name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">Total</th>
            <th class="text-center">Remove</th>
          </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
        
        <td>{{$product->product_id}}</td>
        <td> {{$product->product_name}}</td>
        <td>{{$product->sell_price}}</td>
        <td contenteditable="true"></td>
        <td contenteditable="true">{{$product->sell_price * $product->qty}}</td>
         <td>
              <span class="table-remove"><button type="button"
                  class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
            </td> 
            
        
        </tr>
        @endforeach
        </tbody>
</table>
</div>
</div>
<div class="col-md-5">
    <div class="right_sale_form">
        <div class="row">
                    <button class="form-control btn btn-dark col-md-4 offset-2 mb-2 ml-0" >Reset</button>
                    <button class="form-control btn btn-info col-md-4 offset-2 mb-2 ml-2" >Add New</button>
                </div>
                    <hr>
                    <div class="row">       
        <div class="input-group">
                    <div class="col-md-5 mb-2 mt-4"> <label>Transaction ID: </label> </div>
                    <div class="col-md-4 mb-2 mt-4"><input type="text" name="Name" >
                    </div>
                </div>
            </div>
            <div class="row">
        <div class="input-group">
                    <div class="col-md-5 mb-2"> <label>Trans. Date: </label> </div>
                    <div class="col-md-4 mb-2"><input type="text" name="Name" > </div>
        </div>
    </div>
    
        <div class="row">
        <div class="input-group">
            <div class="col-md-5 mb-2"> <label>Cashier: </label> </div>
            <div class="col-md-5 mb-2"><input type="text" name="Name" > </div>
        </div>
    </div>
        <div class="row">
        <div class="input-group">
                <div class="col-md-5 mb-2"> <label>Discount: </label> </div>
                <div class="col-md-6 mb-3" > <div class="input-group-addon">
                    <span class="input-group-text" style="width: 40px; height: 35px;">Rp.
                      <input type="text" style="height:35px; width: 135px;">
                    </span>
                </div>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="input-group">
                    <div class="col-md-5 mb-2"> <label>Sub Total: </label> </div>
                    <div class="col-md-6 mb-3" > <div class="input-group-addon">
                            <span class="input-group-text" style="width: 40px; height: 35px;">Rp.
                        <input type="text" style="height:35px; width: 135px;">
                    </span>
                    </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="input-group">
                        <div class="col-md-12 mb-3" > 
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="height: 75px; width: 55px;  margin-right: -16px;">Rp.  </span>
                     <input type="text" style="height:75px; width: 300px;">
                   
                             </div>
                                </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                            <hr>
                    </div>
        
    </div>

    

            <center>  <button class="form-control btn btn-success btn-lg btn-block col-md-12 mb-2 ml-0" >  Process Payment

              </button> </center>
    
            

            </div>
    
    
    </div>
</div>
</div>
    
            
@endsection   

</body>
</html>