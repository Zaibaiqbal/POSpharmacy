<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/final.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/projectscript.js"></script>
    <script src="scripts/jquery-3.3.1.min.js"> </script>
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <style>
    html,
    body,
    header,
    .view {
      height: 100%;
    }
    @media (min-width: 560px) and (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view  {
        height: 650px;
      }
    }
  </style>
</head>

<body class="signup-page">

  <!-- Main Navigation -->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><strong>vCare Pharmacy</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
         
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
          </ul>
          <form class="form-inline" action="{{url('staff-registration')}}" method="post">
          {{csrf_field()}}
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Intro Section -->
    <section class="view intro-2">
      <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

              <!-- Form with header -->
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                <div class="card-body">

                  <!-- Header -->
                  <div class="form-header" style="background-color: rgba(58, 57, 57, 0.811); color: black">
                    <h3 class="font-weight-500 my-2 py-1 "><i class="fa fa-user"></i> Register</h3>
                  </div>

                  <!-- Body -->
                  <div class="md-form" style="color: black">
                    <i class="fa fa-user prefix"></i>
                    <input type="text" name="name" placeholder="Employee name" class="form-control">
                   
                  </div>

                  <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" name="email" placeholder="Employee email" class="form-control">
                   
                  </div>
                  <div class="md-form">
                      <i class="fa fa-mobile prefix"></i>
                      <input type="text" name="cellno" placeholder="Cell no" class="form-control">
                      
                    </div>
                    <div class="md-form">
                        <i class="fa fa-mobile prefix"></i>
                        <input type="text" name="designation" placeholder="Designation" class="form-control">
                    
                      </div>
                  <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" name="password" placeholder="Password" class="form-control">
                 
                  </div>
                  <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" name="password_confirmation" placeholder=" Confirm Password" class="form-control">
                 
                  </div>


                  <div class="text-center" >
                    <button class="btn btn-lg mt-2" type="submit" style="background-color: rgba(58, 57, 57, 0.611); font-size: 20px;">Register</button>
                     </div>

                </div>
              </div>
              <!-- Form with header -->

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Intro Section -->

  </header>
  <!-- Main Navigation -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../../js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../js/mdb.js"></script>

  <!-- Custom scripts -->
  <script>

    new WOW().init();

  </script>

</body>

</html>
