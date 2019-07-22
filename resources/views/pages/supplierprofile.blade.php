
<html>
@extends('master')
<head>
<head>
@section('title' ,'Supplier List')
<style>
.form-header .md-form{
  background: blue;
}



</style>
</head>
<body style="background-color: rgb(44, 48, 57, 0.711 ); color: rgb(4, 8, 12)">
@section('content')
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

<div class="container-fluid">
<div class="row mt-4">

<div class="col-md-12">

<div class="form-header p-2" style="background-color: rgba(58, 57, 57, 0.611);">
                    <h3 class="font-weight-500 my-2 py-1 "><i class="fa fa-user"></i> Supplier profile: {{$supplier->supplier_name}}</h3>
                  </div>
                  <div class="md-form" style="color: black; background:white;">
                  <div class="row">
                    <div class="col-md-2 mb-2 ml-2"> <label style="color:black; font-size:18px;">Supplier id: </label> </div>
                    <p>{{$supplier->supplier_id}}</p>

                    <div class="col-md-2 mb-2 ml-2"> <label style="color:black; font-size:18px;">Name: </label> </div>
                    <p>{{$supplier->supplier_name}}</p>

                    <div class="col-md-2 mb-2"> <label style="color:black; font-size:18px;">Email: </label> </div>
                    <p>{{$supplier->email}}</p>

                   </div>
                   
                   <div class="row">
                    <div class="col-md-2 mb-2 ml-2"> <label style="color:black; font-size:18px;">Address: </label> </div>
                    <p>{{$supplier->address}}</p>

                    <div class="col-md-2 mb-2 ml-2"> <label style="color:black; font-size:18px;">City: </label> </div>
                    <p>{{$supplier->city}}</p>

                    <div class="col-md-2 mb-2"> <label style="color:black; font-size:18px;">Postal code: </label> </div>
                    <p>{{$supplier->postal_code}}</p>

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