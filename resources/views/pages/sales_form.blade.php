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

                    <div class="container mt-3">
    <div class="content_section">

        <div class="page_info p-1" style="background:black;">
            <?php
            if (isset($msg) && $msg != '') {
                echo $msg;
            }
            ?>
            <div class="page_info_left">
                <h3><i class="fa fa-chevron-circle-right"></i>&nbsp;Add New Invoice</h3>
            </div>
            <div class="page_info_right" style="float:right; margin-top: -40px;">
                <a href="{{url('pages/saleslist')}}" class="btn btn-success add_new_pro_btn"><i class="fa fa-eye"></i>View Sales</a>
                <a href="{{url('/admin')}}" class="btn btn-info back_btn">Back</a>

            </div>
        </div>
        </div>
        </div>

  

    
<div class="container">
    <div class="row">
        <div class="col-md-7">

    <div class="sale_form">
<h3>SALES</h3>
<h6>Employee Id: </h6> 
<div class="row">
<div class="col-md-9 ml-2">
<form action="{{url( 'pages/sales_form' )}}" method="POST">
{{csrf_field()}}
<div class="input-group">
    <label for="">Medicine Name/ ID:</label>
        <input type="search" name="productName" class="form-control mb-2 " placeholder="Search Item Name or Id here...">
        <button onclick="search();" class="btn btn-info mb-2" > <i class="fa fa-search"></i>search </button>
        
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
        <td class="sell_price"> {{$product->sell_price}}</td>
        <td contenteditable="true" class="medicine_quantity"></td>
        <td contenteditable="true" class="total_price" ></td>
         <td>
              <span class="table-remove"><button type="reset"
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
        
                    <button class="form-control btn btn-dark col-md-4 offset-2 mb-2 ml-0" type="reset">Reset</button>
                    <button class="form-control btn btn-info col-md-4 offset-2 mb-2 ml-2" >Add New</button>
                </div>
                    <hr>
                    <div class="row">       
        <div class="input-group">
                    <div class="col-md-5 mb-2 mt-4"> <label>Transaction ID: </label> </div>
                    <div class="col-md-4 mb-2 mt-4"><input type="text" name="transaction_id" >
                    </div>
                </div>
            </div>
            <div class="row">
        <div class="input-group">
                    <div class="col-md-5 mb-2"> <label>Trans. Date: </label> </div>
                    <div class="col-md-4 mb-2"><input type="date" name="trans_date" id="datepicker"> </div>
        </div>
    </div>
    
        <div class="row">
        <div class="input-group">
            <div class="col-md-5 mb-2"> <label>Cashier: </label> </div>
            <div class="col-md-5 mb-2"><input type="text" name="user_id" > </div>
        </div>
    </div>
        
        <div class="row">
            <div class="input-group">
                    <div class="col-md-5 mb-2"> <label>Sub Total: </label> </div>
                    <div class="col-md-6 mb-3" > <div class="input-group-addon">
                            <span class="input-group-text" style="width: 40px; height: 35px;">Rp.
                        <input type="text" style="height:35px; width: 135px;" class="sub_total" name="subtotal">
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
                     <input type="text" class="grand_total" name="grandtotal" style="height:75px; width: 300px;">
                   
                             </div>
                                </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                            <hr>
                    </div>
        
    </div>

    

            <center>  <button class="form-control btn btn-success btn-lg btn-block col-md-12 mb-2 ml-0" onclick="store();">  Process Payment

              </button> </center>
    
            

            </div>
    
        </div>
        </form>
</div>
</div>
    
            
@endsection   

</body>
</html>