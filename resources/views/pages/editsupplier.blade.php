<!DOCTYPE html>
<html lang="en">
@extends('master')
<head>
@section('title' ,'Edit Supplier')
</head>
<body style="background-color: #d3d3d3; color: rgb(4, 8, 12);">
@section('content')
  <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
    <div class=" container">
        <div class="row">
                <div class="col-md-6">
                        <p> <i class="fa fa-cog"></i> Edit Supplier<p>
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
                <a href="invoices.php" class="btn btn-success add_new_pro_btn"><i class="fa fa-eye"></i>View Invoices</a>
                <a href="products.php" class="btn btn-info back_btn">Back</a>

            </div>
        </div>
        </div>
        </div>


<div class="row">
  <div class="col-md-6">
    <form class="supplier-form" action="{{url('pages/updatesupplier')}}" method="post">
   

{{csrf_field()}}
<input  type="hidden" name="id"  value="{{ $suppliers->id }}" />
      
      <div class="row">
        <div class="col-md-12"><h3> Details </h3></div>
      </div>
      
      <div class="row">
        <div class="col-md-12">&nbsp;</div>
      </div>
      
      <div class="row">
        <div class="col-md-3 mb-2"> <label>Supplier id: </label> </div>
        <div class="col-md-5 mb-2"><input type="text" name="supplier_id" value="{{$suppliers->supplier_id}}" >
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3 mb-2" ><label> Name: </label> </div>
        <div class="col-md-5 mb-2"><input type="text" name="supplier_name" value="{{$suppliers->supplier_name}}">
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3"> <label> Address:</label> </div>
        <div class="col-md-5 mb-2"><textarea name="address" value="{{$suppliers->address}}" id="address" rows="5" cols="30"></textarea>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3 mb-2" > <label> City: </label> </div>
        <div class="col-md-5 mb-2"><input type="text" name="city" value="{{$suppliers->city}}">
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3 mb-2"> <label> Postal code:</label> </div>
        <div class="col-md-5 mb-2"><input type="number" name="postal_code" value="{{$suppliers->postal_code}}">
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3 mb-2"> <label> Tel no: </label> </div>
        <div class="col-md-5 mb-2"><input type="number" name="tel_no" value="{{$suppliers->tel_no}}">
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3 mb-2" > <label> Product Id: </label> </div>
        <div class="col-md-5 mb-2"><input type="number" name="product_id" value="{{$suppliers->product_id}}">
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 mb-2"> <label>Email: </label> </div>
        <div class="col-md-5 mb-2"><input type="email" name="email" value="{{$suppliers->email}}">
        </div>
      </div> 

      <div class="col-md-6">
      <div class="right_box" style="width:70%; height:40%; ">
    <div class="row">
        <input type="submit" value="Save" class="form-control btn btn-info col-md-4 mb-2">
        <button class="form-control btn btn-success col-md-5 mb-2" >Cancle</button>
      
    </div>
    <div class="row">
        
        <button class="form-control btn btn-danger col-md-5 mb-2" >View</button>
    </div>
   

  </div> 
    </form>
  </div>
 
 

</div>
  
@endsection   
</body>
</html>