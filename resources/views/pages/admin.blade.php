<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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
<body>
        
                <!-----HEADER---->
                <header id="main-header " class="py-2 text-white">
    <div class=" container">
        <div class="row">
                <div class="col-md-6">
                        <h1> <i class="fa fa-cog"></i> System </h1>
                </div>
        </div>
    </div>
                </header>
        <div class="container">

    <div class="row">
            <div class="col-md-8">
                <div class="admin-icon">
        <ul class="text-center mt-3">
           
                     <li class="col-md-2 mr-3">
                         <a href="{{url('addproduct')}}">
                        <img src="images/item.png" alt= "image1" width="110" height="90"> </a>
                        <figcaption>ITEM</figcaption>
                      </li>
           
           
            <li class="col-md-2 mr-3">
                    <a href="{{url('sales_form')}}">
              <img src="images/Sale.png" alt= "image2" width="105" height="90"> </a>
              <figcaption>SALE</figcaption>
            </li>
            
        
            <li class="col-md-2 mr-3">
                    <a href="purchase_form.html">
              <img src="images/purchase.png" alt= "image3" width="105" height="90"> </a>
              <figcaption>PURCHASE</figcaption>
            </li>
        
            
            <li class="col-md-2 mr-3">
              <img src="images/search.png" alt= "image4" width="105" height="90">
              <figcaption>SEARCH</figcaption>
            </li>
        
      </ul>
    </div>

    </div>
    <div class="col-md-4">
                <div class="admin-buttons">
                  <ul>

                    <li>
                           <a href="dashboard.html"> <button class="btn btn-info col-md-12 mb-2">Dashboard</button></a>
                    </li>
                    <li>
                           <a href="supplier.html"> <button class="btn btn-info col-md-12 mb-2">Add Supplier</button> </a>
                        </li>
                        <li>
                              <a href="stocklevel.html">  <button class="btn btn-info col-md-12 mb-2">Stock Info</button> </a>
                            </li>
                            
                                    
                                    <li>
           
                                      <a href="supplier-list.html"> <button class="btn btn-info col-md-12 mb-2">Supplier list</button></a>
  
                                  </li>  
                                
                                  <a href="purchase-list.html"> <button class="btn btn-info col-md-12 mb-2">Purchase invoice list</button></a>
                                <li>
                                    </li>
                                    <li>
                                      <a href="product-list.html"> <button class="btn btn-info col-md-12 mb-2">Product list</button> </a>
                                    </li>
                                    <li>
                                        <a href="supplier-profile.html">  <button class="btn btn-info col-md-12 mb-2">Supplier Profile</button> </a>
                                      </li>
                  </ul>

                    </div>
              </div>

        </div>
            
    </div>

        </div>

</body>
</html>






