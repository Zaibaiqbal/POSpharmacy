<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>

<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">
@extends('master')

@section('content')

   <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
        <div class=" container">
            <div class="row">
                    <div class="col-md-6">
                            <p> <i class="fa fa-cog"></i> Add new product <p>
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
             <center> <h3> Product Info </h3></center> </div> </div>
            @if(session('message'))

            <p class="alert alert-success"> {{session('message')}} </p>
            @endif
            {{csrf_field()}}
             <div class="row">  <div class="col-md-12"> 
                 <div class="invoice-detail p-3"> 
                     <div class="row">
                         <div class="input-group mb-1">
                            <div class="col-md-2">  <label for="">Item Id:</label></div>
                            <div class="col-md-2"> <input type="text" name="product_id" class="" style="width:60px;"></div>
                            <div class="col-md-2 ml-5">  <label for="" class="">Item Name:</label></div>
                            <div class="col-md-5"> <input type="text" name="product_name"></div>

                        </div>
                   </div>
                   <div class="row">
                        <div class="input-group mb-1">
                           
                           <div class="col-md-2">  <label for="" class="">Type:</label></div>
                           <div class="col-md-4">  <select name="type" id="" style="width:150px;">
                            <option value="syrup">syrup</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Antibiotics">Antibiotics</option>
                            <option value="Antiallergic">Antiallergic</option>
                        </select>
                    </div>
                           <div class="col-md-2" style="margin-left:-125px;">  <label for="" class="">Exp.Date:</label></div>
                           <div class="col-md-4"> <input type="date" name="exp_date"></div>

                        </div>
                  </div>
                  <div class="row">
                        <div class="input-group mb-1">
                           <div class="col-md-2">  <label for="">Qty:</label></div>
                           <div class="col-md-2"> <input type="number" name="quantity"></div>

                           <div class="col-md-2 ml-5" >  <label for="" class="">Supplier:</label></div>
                           <div class="col-md-4">  <select name="supplier" style="width:150px;">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                       </div>
                       <div class="row">
                        <div class="input-group mb-1 ml-3">
                           <div class="col-md-2">  <label for="">Sell price :</label></div>
                           <div class="col-md-2"> <input type="number" name="sell_price"></div>
                        <div>
                        <div class="input-group mb-1 ml-3">
                           <div class="col-md-4" >  <label for="" class="">Cost price:</label></div>
                           <div class="col-md-2"> <input type="number" name="cost_price"></div>

                        </div>                              
                       </div>
                       <div class="row">
                        <div class="input-group mb-1 ml-2">
                           <div class="col-md-4">  <label for="">Invoice id</label></div>
                           <div class="col-md-2"> <input type="text" name="invoice_id"></div>

                        </div>
                              
                       </div>

                       <div class="row">
                        <div class="col-md-12 mb-1 mt-4">
                           <div class="col-md-4">  <label for="">Product Description:</label></div>
                           <div class="col-md-8"> <textarea class="form-control" rows="5" cols="80"  name="product_desc"></textarea> </div>

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