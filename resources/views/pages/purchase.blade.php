<!DOCTYPE html>
<html lang="en">
@extends('master')
<head>
@section('title' ,'Add Purchase')

</head>
<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">
@section('content')
    <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
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
                <a href="invoices.php" class="btn btn-success add_new_pro_btn"><i class="fa fa-eye"></i>View Invoices</a>
                <a href="products.php" class="btn btn-info back_btn">Back</a>

            </div>
        </div>
        </div>
        </div>
   
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="purchase-form p-4">
                <form action="{{url('pages/addpurchase')}}" method="POST">
             <div class="row">  <div class="col-md-12"><center> <h3> Medicine Purchase </h3></center> </div> </div>
             <div class="row">  <div class="col-md-12"> 
                 <div class="invoice-detail p-3"> 
                     <h4 class="mb-3">Invoice details</h4> 
                     <div class="row">
                         <div class="input-group mb-1">
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

                  <div class="row">
                        <div class="input-group mb-1">
                           <div class="col-md-2">  <label for="">Product ID:</label></div>
                           <div class="col-md-3"> <input type="text" class="product" name="product_id"> </div>

                           
                           <div class="col-md-2">  <label for="" class="">Product name:</label></div>
                           <div class="col-md-3"> <input type="text" class="" name="product_name"></div>
                          
                <button type="button" class="btn btn-info fa fa-plus" data-toggle="modal" data-target="#myModal" style="margin-left: -70px;"></button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">

<!--ModalContent-->
<div class="modal-content">
<!--Modl header-->
<div class="modal-header text-center">
<h4 class="modal-title w-100 font-weight-bold">Product Info</h4>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<!--endmodal header-->

<!--Form-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('/addproduct')}}" method="">
            <div class="purchase-form">
             
             
             @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
                
                </div>
                @endif
                
             <!--alert message-->
            @if(session('message'))

            <p class="alert alert-success"> {{session('message')}} </p>
            @endif
            {{csrf_field()}}
                 
                     <div class="row">
                         <div class="input-group mb-1">
                            <div class="col-md-2">  <label for="">Item Id:</label>  </div>
                            <div class="col-md-2"> <input type="text" name="product_id" class="" style="width:60px;">   </div>
                            <div class="col-md-3 ml-3">  <label for="" class="">Item Name:</label></div>
                            <div class="col-md-2"> <input type="text" name="product_name"  style="width:120px;"></div>

                        </div>
                   </div>

                   <div class="row">
                        <div class="input-group mb-1">
                           
                           <div class="col-md-2">  <label for="" class="">Type:</label></div>
                           <div class="col-md-2">  <select name="type" id="" style="width:100px;">
                            <option value="syrup">syrup</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Antibiotics">Antibiotics</option>
                            <option value="Antiallergic">Antiallergic</option>
                        </select>
                    </div>
                           <div class="col-md-2 ml-5">  <label for="" class="">Exp.Date:</label></div>
                           <div class="col-md-2"> <input type="date" name="exp_date"  style="width:120px;"></div>

                        </div>
                  </div>

                  <div class="row">
                        <div class="input-group mb-1">
                           <div class="col-md-2">  <label for="">Qty:</label></div>
                           <div class="col-md-2"> <input type="number" name="quantity"  style="width:100px;"></div>

                           <div class="col-md-2 ml-5" >  <label for="" class="">Supplier:</label></div>
                           <div class="col-md-2">  <select name="supplier_name" style="width:120px;">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                            </div>
                         </div>
                  </div>
                 
                       <div class="row">
                        <div class="input-group mb-1">
                           <div class="col-md-3 ml-0">  <label for="">Sell price :</label></div>
                           <div class="col-md-2"> <input type="number" name="sell_price"  style="width:100px;"></div>
                        </div>
                        <div class="input-group mb-1">
                           <div class="col-md-3" >  <label for="" class="">Cost price:</label></div>
                           <div class="col-md-2"> <input type="number" name="cost_price"  style="width:100px;"></div>

                        </div>                              
                       </div>

                       <div class="row">
                        <div class="input-group mb-1">
                           <div class="col-md-3">  <label for="">Invoice id</label></div>
                           <div class="col-md-2"> <input type="text" name="invoice_id" style="width:100px;"></div>

                        </div>
                              
                       </div>

                       <div class="row">
                        <div class="col-md-12 mb-1 mt-4">
                           <div class="col-md-4">  <label for="">Product Description:</label></div>
                           <div class="col-md-8" style="border= 1px solid black"> <textarea class="form-control" rows="5" cols="80"  name="product_desc"></textarea> </div>

                        </div>
                              
                       </div>
                              
                       
                       </form>
          

            <!--button-->
            <div class="container">

                        <div class="row ml-5 mt-3 mb-3">
                            <button class=" col-md-3 btn btn-info p-2"> <i class="fa fa-save mr-2"></i>Save</button> 
                            <button class=" col-md-3 btn btn-info p-2"> <i class="fa fa-money mr-2"></i>Reset</button> 
                            
                        </div>
                    </div>
                    <!--endbutton-->
                    </div> 
                    </div>
</div>
<!--Endof Form-->

</div>
</div>
</div>

                       

                        <!--End Modal-->
                           
</div>
</div>   
                        
                          


                                        
            
            <!--Table-->
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="purchase-table mb-3">
                        <table id="invoice_form_table" class="mdl-data-table table table-bordered">
                    <thead>

                        <tr>
                            
                        <th>Product Id</th>
                            <th>Product name</th>
                            <th>Type</th>
                            <th>Exp. date</th>
                            <th>Quantity</th>
                            <th>Cost Price</th>
                            <th>Subtotal</th>

                        </tr>
                    </thead>
                    <tbody id="inv_detail">

                    </tbody>

                    <tfoot id="">
                        <tr>
                            <td colspan="10" style="text-align:right;"><b>Invoice Total</b></td>
                            <td colspan="1"><input type="hidden" name="addinvoice"><b class="wholetotal"></b></td>
                        </tr>

                    </tfoot>
                </table>
                </form>
  <button id="" style="background: #b9a5a5; color: #fff; font-size: 16px; border-radius: 3px;" title="click to add new row" class="btn btn-sm add_new_invoice_table_row" value="Add Invoice" data_id="2">+</button>

                        </div>
                        <div class="row ml-5">
                            <button class=" col-md-4 btn btn-info btn-sm p-2"> <i class="fa fa-money mr-2"></i>Buy</button> 
                        
                        </div>
                    </div>
                    <!--End Table-->
                </div>


            </div>
        </div> 
    </div> 
  
           
            </div>

        </div>

    </div>




</div>

@endsection   

<script type="text/javascript">
   $(document).ready(function() {
     $('.datepicker').datepicker({
       language: langCode,
       format: "yyyy-mm-dd",
       autoclose:true,
       todayHighlight: true
     }).datepicker("setDate",'now');
   });
   </script>   
</body>
</html>