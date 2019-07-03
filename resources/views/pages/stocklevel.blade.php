<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add stock</title>
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
                        <p> <i class="fa fa-cog"></i> Stock Information <p>
                </div>
        </div>
    </div>
                </header>

      <div class="container">
    
<div class="row">
        <div class="col-md-8">
                <form class="detail_form">
                  <div class="row">
                    <div class="col-md-12"><h3> Stock </h3></div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">&nbsp;</div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-4 mb-2"> <label>Medicine Id: </label></div>
                    <div class="col-md-2 mb-2"><input type="text" name="Name" style="width: 60px" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mb-2"><label> Name: </label></div>
                    <div class="col-md-5 mb-2"><input type="text" name="Name" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mb-2" ><label> Type: </label> </div>
                    <div class="col-md-5 mb-2"><select name="type" id="type1" style="border-radius: 0.25em; background-color: #b0b5bb; border: 1px solid #ced4da;">
                      <option value="">Select</option>
                      <option value="">Syrup</option>
                      <option value="">Tab</option>
              
                    </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mb-2"> <label> Minimum stock level: </label> </div>
                    <div class="col-md-5 mb-2"><input type="number" name="Name" style="width: 60px">
                    </div>
                  </div>
                  <div class="row ">
                      <div class="col-md-4 mb-2"> <label> Exp. date: </label> </div>
                      <div class="col-md-4"> <input type="date" class=""></div>

                  </div>
                  <div class="row ">
                      <div class="col-md-4 mb-2"> <label> Quantity: </label> </div>
                      <div class="col-md-4"> <input type="number" class=""></div>

                  </div>
                  
                  <div class="row ">
                      <div class="col-md-4 mb-2"> <label> Selling price: </label> </div>
                      <div class="col-md-5"> <input type="number" class=""></div>

                  </div>
                  
                  
                </form>
              </div>  
              <div class="col-md-4">
                  <div class="right_box">
                <div class="row">
                    <button class="form-control btn btn-primary col-md-6 mb-2" >Add New</button>
                    <button class="form-control btn btn-info col-md-3 mb-2" >Edit</button>
                </div>
                <div class="row">
                    <button class="form-control btn btn-success col-md-4 mb-2" >Save</button>
                    <button class="form-control btn btn-danger col-md-4 mb-2" >Clear</button>
                </div>
                <div class="row">
                    <button class="form-control btn btn-dark col-md-5 mb-2" >Previous</button>
                    <button class="form-control btn btn-primary col-md-4 mb-2" >Next</button>
                </div>

              </div>

            </div>
         </div>    
        </div>
</body>
</html>