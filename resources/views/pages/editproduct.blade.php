<!DOCTYPE html>
<html lang="en">
@extends('master')
<head>
@section('title' ,'Edit product')
</head>

<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">


@section('content')

   <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
        <div class=" container">
            <div class="row">
                    <div class="col-md-6">
                            <p> <i class="fa fa-cog"></i> Edit product Info <p>
                    </div>
            </div>
        </div>
                    </header>
  
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('/addproduct')}}" method="POST">
            <div class="purchase-form p-4">
             <div class="row">  <div class="col-md-12">
             <center> <h3> Product Info: {{$products->product_name}}  </h3></center> </div> </div>
            @if(session('message'))

            <p class="alert alert-success"> {{session('message')}} </p>
            @endif
            {{csrf_field()}}
             <div class="row">  <div class="col-md-12"> 
                 <div class="invoice-detail p-3"> 
                     <div class="row">
                         <div class="input-group mb-1">
                            <div class="col-md-2">  <label for="">Item Id:</label></div>
                            <div class="col-md-2"> <input type="text" name="product_id" value="{{$products->product_id}}" style="width:60px;"></div>
                            <div class="col-md-2 ml-5">  <label for="" class="">Item Name:</label></div>
                            <div class="col-md-5"> <input type="text" name="product_name" value="{{$products->product_name}}"></div>

                        </div>
                   </div>
                   <div class="row">
                        <div class="input-group mb-1">
                           
                           <div class="col-md-2">  <label for="" class="">Type:</label></div>
                           <div class="col-md-4">  <select name="type" id="" value="{{$products->type}}" style="width:150px;">
                            <option value="syrup">syrup</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Antibiotics">Antibiotics</option>
                            <option value="Antiallergic">Antiallergic</option>
                        </select>
                    </div>
                           <div class="col-md-2" style="margin-left:-125px;">  <label for="" class="">Exp.Date:</label></div>
                           <div class="col-md-4"> <input type="date" name="exp_date" value="{{$products->exp_date}}"></div>

                        </div>
                  </div>
                  <div class="row">
                        <div class="input-group mb-1">
                           <div class="col-md-2">  <label for="">Qty:</label></div>
                           <div class="col-md-2"> <input type="number" name="quantity" value="{{$products->quantity}}"></div>

                           <div class="col-md-2 ml-5" >  <label for="" class="">Supplier:</label></div>
                           <div class="col-md-4">  <select name="supplier" value="{{$products->supplier}}" style="width:150px;">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                       </div>
                       <div class="row">
                        <div class="input-group mb-1 ml-3">
                           <div class="col-md-2">  <label for="">Sell price :</label></div>
                           <div class="col-md-2"> <input type="number" name="sell_price" value="{{$products->sell_price}}"></div>
                        <div>
                        <div class="input-group mb-1 ml-3">
                           <div class="col-md-4" >  <label for="" class="">Cost price:</label></div>
                           <div class="col-md-2"> <input type="number" name="cost_price" value="{{$products->cost_price}}"></div>

                        </div>                              
                       </div>
                       <div class="row">
                        <div class="input-group mb-1 ml-2">
                           <div class="col-md-4">  <label for="">Invoice id</label></div>
                           <div class="col-md-2"> <input type="text" name="invoice_id" value="{{$products->invoice_id}}"></div>

                        </div>
                              
                       </div>

                       <div class="row">
                        <div class="col-md-12 mb-1 mt-4">
                           <div class="col-md-4">  <label for="">Product Description:</label></div>
                           <div class="col-md-8"> <textarea class="form-control" rows="5" cols="80"  name="product_desc"> {{$products->product_desc}} </textarea> </div>

                        </div>
                              
                       </div>
                              
                       
                       </form>
            </div> 
            <div class="container">

                        <div class="row ml-5 mt-3">
                            <button class=" col-md-1 btn btn-info btn-sm p-2"> <i class="fa fa-save mr-2"></i>Save</button> 
                            <button class=" col-md-1 btn btn-info btn-sm p-2"> <i class="fa fa-money mr-2"></i>Reset</button> 
                             
                        </div>
                    </div>
                </div>


            </div>
        </div> 
    </div> 
           
            </div>

        </div>

    </div>




</div>

@endsection
</body>
</html>