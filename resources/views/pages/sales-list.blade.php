@extends('master')
@section('title' ,'Sales List')

@section('content')
<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">
   <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
        <div class=" container">
            <div class="row">
                    <div class="col-md-6">
                            <p> <i class="fa fa-cog"></i> Sales list <p>
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
            <a href="{{url('/sales_form')}}" class="btn btn-success add_new_pro_btn"><i class="fa fa-plus"></i>Add Sales</a>
                <a href="{{url('/admin')}}" class="btn btn-info back_btn">Back</a>
            </div>
        </div>
        </div>
        </div>

  
                    <div class="container mt-5">
                        <div class="row">
        
                            <div class="col-md-12">
                                <div class="purchase-form mb-3 mt-3">
                                    <div class="row">
                                    <h3>View all invoices</h3>
                                    <form action="" style="float:right; margin-left:600px;" class="form-group invoice-detail">
                                        <div class="input-group">
                                        <input type="search">
                                        <button value="search" class="btn btn-dark ml-0"> <i class="fa fa-search"></i>

                                        </button>
                                    </div>
                                    </form>
                                </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <center>
                                                 <button class="btn btn-secondary hidden-print" onclick="myFunction()">
                                                <span class="fa fa-print" aria-hidden="true"></span> </button>
                                                <button class="btn btn-secondary ml-0"> <i class="fa fa-file-pdf-o"  style="color:red"></i></button>
                                                <button class="btn btn-secondary ml-0"> <i class="fa fa-file-excel-o"  style="color:rgb(56, 66, 56)"></i></button>
                                            </center>
                                                        

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                <table class="table table-bordered table-hover">
                                                <thead>
                                                  <tr>
                                                   <th class="">Sr #</th>
                                                   <th>Item id</th>
                                                   <th>Item name</th>
                                                   <th>Quantity</th>
                                                   <th>Amount</th>
                                                   <th>Status</th>
                                                   <th>Edit</th>
                                                   <th>Delete</th>
                                                  </tr>
                                                </thead>
                                                <tbody>


                                                  <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <button class="btn btn-light"><i class="fa fa-edit"  style="color:rgb(86, 86, 240)"></i></button></td>
                                                    <td> <button class="btn btn-light"><i class="fa fa-trash" style="color:red"></i></button></td>
                                                  </tr>
                                                 </tbody>
                                        </table>

                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection 
                    </body>
</html>