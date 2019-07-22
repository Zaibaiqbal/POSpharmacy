@extends('master')

<head>
@section('title' ,'Add Purchase')

</head>
<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">
@section('content')
    <header id="main-header " style="height: 50px; font-size: 30px;background:rgb(55, 71, 79);" class="py-2 text-info pb-1">
        <div class=" container">
            <div class="row">
                    <div class="col-md-6">
                            <p> <i class="fa fa-cog"></i> Purchases <p>
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
                <a href="{{url('pages/purchaselist')}}" class="btn btn-success add_new_pro_btn"><i class="fa fa-eye"></i>View Invoices</a>
                <a href="{{url('/admin')}}" class="btn btn-info back_btn">Back</a>

            </div>
        </div>
        </div>
        </div>

  <!-- Content Wrapper. Contains page content -->
 
    <!-- Main content -->
    <section class="content">
    
      <div class="col-md-12">
        <div class="purchase-form">
          
            <form  action="{{url('pages/addpurchase')}}" method="post" >
            
                <div class="row">
        <div class="col-md-11 invoice-detail ml-5"> 
        <div class="row">
                         <div class="input-group mb-1 mt-2">
                            <div class="col-md-2">  <label for="">Invoice Id:</label></div>
                            <div class="col-md-2"> <input type="text" class=""  name="invoice_id"></div>

                            <div class="col-md-2 ml-3 ">  <label for="" class="">Supplier Name:</label></div>
                            <div class="col-md-2"> <input type="text" class="" name="supplier_name"></div>

                        </div>
                   </div>

                   <div class="row">
                        <div class="input-group mb-1">
                           
                           <div class="col-md-2">  <label for="" class="">Date:</label></div>
                           <div class="col-md-3"> <input type="date" class="datepicker" name="date"></div>
                           
                           <div class="col-md-2">  <label for="" class="">Created By:</label></div>
                           <div class="col-md-3"> <input type="text" class="user_id" name=""></div>

                       </div>
                  </div>
                
                <div class="col-md-6 submit-buttom">
                    <input type="submit" value="Save Product" name="addproduct" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn btn-warning">
                </div>


                <div class="col-md-12 purchase-table" style="margin-top: 20px;">

                    <table id="invoice_form_table" class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Product Id</th>
                            <th>Product name</th>
                            <th>Type</th>
                            <th>Exp. date</th>
                            <th>Quantity</th>
                            <th>Cost Price</th>
                            <th>Subtotal</th>
                                <th width="15%">Action</th>

                            </tr>
                        </thead>
                        <tbody id="inv_detail">
                            
                        </tbody>
                        <tfoot id="">
                            <tr>
                            
                                <td colspan="5" style="text-align:right; "><b>Invoice Total</b></td>
                                <td colspan="1" style="text-align: center;"><input type="hidden" name="addinvoice"><b class="wholetotal"></b></td>
                                <input type="hidden" name="addpurchase">
                            </tr>

                        </tfoot>
                    </table>
                    <button class="btn btn-success add_new_invoice_table_row" title="Click To Add Product in Purchase List" style="font-size: 17px;">+</button>
                </div>
        </div>
      </div>
    
            
            </form>
          </div>
        
      </div>
      
    </section>
    @endsection 
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
 <!-- footer -->

 </body>