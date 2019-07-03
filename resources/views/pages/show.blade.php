<!DOCTYPE html>
<html lang="en">
@extends('master')
<head>
   
 @section('title' ,'Product information')
</head>

<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">


@section('content')
   <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
        <div class=" container">
            <div class="row">
                    <div class="col-md-6">
                            <p> <i class="fa fa-cog"></i> Product Info: <p>
                    </div>
            </div>
        </div>
                    </header>
  
  
     <div class="container mt-5">
                      
            <div class="purchase-form mb-3 mt-3">
              <div class="row">
                 <h3 class="ml-2"> {{$product->id}} </h3>
    <form action=""  class="form-group ">
               </div>
            <div class="row mb-3">
                 <div class="col-md-12">
                  <center>
                 <a href="javascript:void(0)" class="btn btn-secondary" id="printPage">
                <span class="fa fa-print" aria-hidden="true"></span></a>  
                              
                </center>
                  </div>
            </div>
                  
              <div class="row">
                <div class="col-md-12">
                 <div class="purchase-table" style="overflow:hidden">
                <table class="table table-bordered table-hover" id="toPrint">
                                       
                 <thead>
            <tr>
                  <th>Product id</th>
                 <th>Product name</th>
                 <th>Type</th>
                 <th>Cost price</th>
                 <th>Sell price</th>
               <th>Invoice id</th>
               <th>Expiry date</th>
               <th>Quantity</th>
              
                                                   
             </tr>
                </thead>
                                                
                <tbody>
             <tr>
                <td>{{$product->product_id}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->type}}</td>
                <td>{{$product->cost_price}}</td>
                <td>{{$product->sell_price}}</td>
                <td>{{$product->invoice_id}}</td>
                <td>{{$product->exp_date}}</td>
                <td>{{$product->quantity}}</td>
                

              </tr>
                </tbody>
                </table>
              </div>
             
              
             </div>
         </div>
         <h3 class="mt-2 ml-2">Product Description:</h3>
         <p class="ml-2">{{$product->product_desc}}</p>
    </form>
        </div>
                       
      </div>

      
      <script lang='javascript'>
 $(document).ready(function(){
  $('#printPage').click(function(){
        var data = '<input type="button" value="Print this page" onClick="window.print()">';           
        data += '<div id="toPrint">';
        data += $('#toPrint').html();
        data += '</div>';
        myWindow=window.open('','','width=1200,height=1000');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    });
 });
 </script>

  @endsection
 </body>

</html>