<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Purchase</title>
    <link rel="stylesheet" href="css/final.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/projectscript.js"></script>
    <script src="scripts/jquery-3.3.1.min.js"> </script>
   
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: #d3d3d3; color: rgb(4, 8, 12)">
    <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
        <div class=" container">
            <div class="row">
                    <div class="col-md-6">
                            <p> <i class="fa fa-cog"></i> Purchases <p>
                    </div>
            </div>
        </div>
                    </header>
   
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="purchase-form p-4">
             <div class="row">  <div class="col-md-12"><center> <h3> Medicine Purchase </h3></center> </div> </div>
             <div class="row">  <div class="col-md-12"> 
                 <div class="invoice-detail p-3"> 
                     <h4 class="mb-3">Invoice details</h4> 
                     <div class="row">
                         <div class="input-group mb-1">
                            <div class="col-md-2">  <label for="">Invoice Id:</label></div>
                            <div class="col-md-2"> <input type="text" class="" style="width:60px;"></div>
                            <div class="col-md-2 ml-5">  <label for="" class="">Supplier Name:</label></div>
                            <div class="col-md-5"> <input type="text" class=""></div>

                        </div>
                   </div>
                   <div class="row">
                        <div class="input-group mb-1">
                           
                           <div class="col-md-2">  <label for="" class="">Bill Date:</label></div>
                           <div class="col-md-5"> <input type="date" class=""></div>

                       </div>
                  </div>
                  <div class="row">
                        <div class="input-group mb-1">
                           <div class="col-md-2">  <label for="">Select Product:</label></div>
                           <div class="col-md-2"> <select name="p-name" id="" style="width:300px;">
                               <option value=""></option>
                               <option value=""></option>
                               <option value=""></option>
                           </select>
                        </div>
                           
                           <div class="col-md-2" style="margin-left: 150px;">  <label for="" class="">Invoice Total:</label></div>
                           <div class="col-md-4"> <input type="number" class=""></div>

                       </div>
                  </div>
                 
            </div> 
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="purchase-table mb-3">
                                <table class="table table-bordered table-hover">
                                        <thead>
                                          <tr>
                                            <th scope="col-md-1">Sr #</th>
                                            <th scope="col-md-1">Item code</th>
                                            <th scope="col-md-1">Item Name</th>
                                            <th scope="col-md-1">Type</th>
                                        
                                            <th scope="col-md-1">Qty. </th>
                                            <th scope="col-md-1">Cost</th>
                                            <th scope="col-md-1">Exp. date</th>
                                            <th scope="col-md-1">Mfg. date</th>
                                
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
                                          </tr>
                                          <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                              </tr>
                                        </tbody>
                                </table>
                        </div>
                        <div class="row ml-5">
                            <button class=" col-md-4 btn btn-info btn-sm p-2"> <i class="fa fa-money mr-2"></i>Buy</button> 
                            
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


</body>
</html>