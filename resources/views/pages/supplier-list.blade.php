<!DOCTYPE html>
<html lang="en">
@extends('master')
<head>
@section('title' ,'Supplier List')
</head>
<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">
@section('content')
   <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
        <div class=" container">
            <div class="row">
                    <div class="col-md-6">
                            <p> <i class="fa fa-cog"></i> Supplier list <p>
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
            <a href="{{url('/addsupplier')}}" class="btn btn-success add_new_pro_btn"><i class="fa fa-plus"></i>Add Supplier</a>
                <a href="{{url('/admin')}}" class="btn btn-info back_btn">Back</a>
            </div>
        </div>
        </div>
        </div>

  <!--Body-->
                    <div class="container mt-5">
                        <div class="row">
        
                            <div class="col-md-12">
                                <div class="purchase-form mb-1 mt-3">
                                    
                                    <form action="" method="" style="" class="form-group invoice-detail">
                                    <h3>View all Supplier</h3>
                                
                                    <div class="row mb-1">
                                        <div class="col-md-12">
                                            <center>
                                                 <button class="btn btn-secondary hidden-print" onclick="myFunction()">
                                                <span class="fa fa-print" aria-hidden="true"></span> </button>
                                                <button class="btn btn-secondary ml-0"> <i class="fa fa-file-pdf-o"  style="color:red"></i></button>
                                                <button class="btn btn-secondary ml-0"> <i class="fa fa-file-excel-o"  style="color:rgb(56, 66, 56)"></i></button>
                                            </center>
                                                        

                                        </div>

                                    </div>
                                    @if(session('message'))

<p class="alert alert-success"> {{session('message')}} </p>
@endif
                            <!--Table start-->
                            <div class="purchase-table"  style="overflow:hidden">
                                    <table class="table table-bordered table-hover">
                                    {{csrf_field()}}
                                                <thead>
                                                  <tr>
                                                   
                                                   <th>Supplier id</th>
                                                   <th>Name</th>
                                                   <th>Address</th>
                                                   <th>City</th>
                                                   <th>Postal code</th>
                                                   <th>Tel no</th>
                                                   <th>Product ID</th>
                                                   <th>Email</th>
                                                   <th>Profile</th>
                                                   <th>Edit</th>
                                                   <th>Delete</th>
                                                  </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($suppliers as $supplier)
                                                  <tr>
                                                    <td>{{$supplier->supplier_id}}</td>
                                                    <td>{{$supplier->supplier_name}}</td>
                                                    <td>{{$supplier->address}}</td>
                                                    <td>{{$supplier->postal_code}}</td>
                                                    <td>{{$supplier->city}}</td>
                                                    <td>{{$supplier->tel_no}}</td>
                                                    <td>{{$supplier->product_id}}</td>
                                                    <td>{{$supplier->email}}</td>
                        <td> <a href="{{url('pages/profiles/' .$supplier->id)}}" class="btn btn-info"> 
                        
                        <i class="fa fa-user"> View </i>    </td>
                                                
                                               <td> <a href="{{url('pages/' .$supplier->id . '/editsupplier/')}}"
                                                         class="btn btn-info"> <i class="fa fa-edit">Edit </i> </td> 
                         
                                                         
                                                    <td> 
                                                    <a href="{{url('pages/' .$supplier->id . '/supplier-list/')}}"
                                                         class="btn btn-info"> <i class="fa fa-trash"> Delete </i>
                                                    </td>
                                                   
                                                
                                                  @endforeach
                                   </tbody>
                                        </table>

                                        </div>
                                    </div>
                                    </div >
                                   <!--end of table-->     

                                   </form>
                               

                    </div>
                    @endsection 
                    </body>
</html>