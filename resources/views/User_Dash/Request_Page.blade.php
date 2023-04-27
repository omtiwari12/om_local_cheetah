<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">








    <title> Request_Graphics</title>

    <!-- Custom fonts for this template-->
    <link href="USER1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="USER1/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     
     
     <style>

    .card:hover{
        display: inline-block;
  margin: 0 0.5rem;

  animation: pulse; 
  animation-duration: 1s;

      transition: all 0.2s ease-in;
        margin-top: 50px; 
    /* background
    -color:black;  */
    }

     </style>





</head>

<body id="page-top">




    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       
        @include('User_Dash.Sidebar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            {{-- <div id="content"> --}}

                <!-- Topbar -->
                @include('User_Dash.Topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                {{-- <div class="container-fluid"> --}}

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-dark ml-4 font-weight-bold ">Select your Request</h1>
                       
                                
                                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                    <ol class="breadcrumb mr-5">
                                      <li class="breadcrumb-item"><a href="/User_Dashboard">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page"><a href="/Request_Page">Add New Request</a></li>
                                    </ol>
                                  </nav>

                    </div>

                    <hr style="width:100%;text-align:left;margin-bottom:40px">

                    <div class="d-flex justify-content-center mt-5">

<div class="row">

<div class="col-sm-3">
    
    <div class="card m-2"  style="width: 18rem;">
    <a href="/Request_Graphics"><img src="/web2.png" class="card-img-top" alt="..."></a>
  
  </div>
    </div>

  <div class="col-sm-3">
    
  <div class="card m-2 "  style="width: 18rem;">
  <a href="/Request_Digital"><img src="/web1.png" class="card-img-top" alt="..."></a>
  

</div>
  </div>
  
  <div class="col-sm-3">
    
  <div class="card m-2"  style="width: 18rem;">
  <a href="/Request_web"><img src="/web3.png" class="card-img-top" alt="..."></a>
 
</div>
  </div>
  <div class="col-sm-3 ">
    
  <div class="card m-2 "  style="width: 18rem;">
  <a href="/Request_App"><img src="/web4.png" class="card-img-top" alt="..."></a>
  <!-- <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Create Request</a>
  </div> -->
</div>
  </div>
</div>
        


</div>
    <!-- Bootstrap core JavaScript-->
    <script src="USER1/vendor/jquery/jquery.min.js"></script>
    <script src="USER1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="USER1/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="USER1/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="USER1/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="USER1/js/demo/chart-area-demo.js"></script>
    <script src="USER1/js/demo/chart-pie-demo.js"></script>

</body>

</html>