<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
  <style>
       
  </style>
</head>
<body>

            <!-----HEADER---->
            <header id="main-header " class="py-2 text-white">
<div class=" container">
    <div class="row">
            <div class="col-md-6">
                    <h1> <i class="fa fa-cog"></i> Dashboard </h1>
            </div>

            @if(isset(Auth::user()->email))

            <div class="col-md-3">
            <div class="alert alert-dark success-block" style="float:right; margin-right:-300px; margin-top:60px; margin-bottom:-5px;">
            <strong>Welcome {{Auth::user()->email}}</strong>
            </div>
            </div>
            <div class="col-md-3">
            <a href="{{url ('logout')}}"> 
           <h5 class=" " style="float:right; margin-right:-90px; margin-top:80px;  margin-bottom:-5px;"> Logout </h5>
            <i class="fa fa-sign-out-alt" style="color:blanchedalmond;"></i>
             </a>
             </div>
          
            
             @endif
    </div>
</div>
            </header>
            <!--sidebar-->
            <div class="container-fluid pl-0">
                <div class="col-md-4 pl-0">

            <div class="sidebar1">
                    <h4>MAIN NAVIGATION</h4>
                    <!-- Sidebar user panel -->
                    <table style="border-style: hidden;" class="ml-0">
                        <tr>
                            <td rowspan="2"> <i class="fa fa-user-circle-o" style="font-size:50px; padding-left: 10px; padding-top: 5px;"> </i></td>
                        <td style=" padding-left: 25px; padding-top: 5px;">Admin</td>
                        </tr>
                        <tr>
                            <td style=" padding-left: 25px; text-decoration: none"><a href="#"><i class="fa fa-circle text-success"></i>Online</td>
                        </tr>
                        </table>
      <hr>

                    <ul class="sidebar-menu">
                            <li class="list-unstyled mb-3">
                                <a href="{{url('/admin')}}">
                                      <i class="fa fa-dashboard"></i> <span>POS</span>
                                    </a>
                                    </li>
                                    <li class="list-unstyled mb-3">
                                            <a href="#">
                                              <i class="fa fa-bar-chart-o"></i>
                                              <span>Sales Chart</span>
                                            </a>
                                            
                                    </li>
                                    <li class="list-unstyled mb-3">
                                            <a href="#">
                                              <i class="fa fa-th"></i> <span> Stock </span>
                                
                                            </a>
                                          </li>       
                                          <li class="list-unstyled mb-3">
                                                <a href="#">
                                                  <i class="fa fa-bell-o"></i> <span> Notification </span>
                                                </a>
                                              </li>        
                                             
                               <li class="list-unstyled mb-3">
                                  
                                         <a href="{{url('/staff-registration')}}">
                                          <i class="fa fa-registered"></i> <span> Staff registration </span>
                                          </a>
                                     </li>    
                                                      <li class="list-unstyled mb-3">
                                                            <a href="#">
                                                              <i class="fa fa-sign-out-alt" style="color:blanchedalmond;"></i> 
                                                              <span> Logout </span>
                                                            </a>
                                                          </li>            
                          
                     </ul>         
                </div>
            </div>
            </div>
            
<!--Script for hover-->
<script type="text/javascript">
        $('ul.nav li.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>

</body>
</html>