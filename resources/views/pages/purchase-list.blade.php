<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purchase list</title>
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
                            <p> <i class="fa fa-cog"></i> Purchase invoice list <p>
                    </div>
            </div>
        </div>
                    </header>
  
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
                                                   <th>Type</th>
                                                   <th>In stock</th>
                                                   <th>Mfg. date</th>
                                                   <th>Exp. date</th>
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
                                                  <tr>
                                                        <td></td>
                                                        <td></td>
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
                                                        <td></td>
                                                        <td></td>
                                                      </tr>
                                                </tbody>
                                        </table>

                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    </body>
</html>