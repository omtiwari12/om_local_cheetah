<!DOCTYPE html>
<html>
<head>
    


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cheetah_Local- Dashboard</title>


    <!-- Custom fonts for this template-->
    <link href="USER1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="USER1/css/sb-admin-2.min.css" rel="stylesheet">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       
        @include('User_Dash.Sidebar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('User_Dash.Topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid " style="width: 90%;">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold" >Dashboard</h1>
                        <a href="/Request_Page" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i
                                class="fa fa-bolt fa-sm text-white-50"></i> Add New Request</a>
                    </div>
                    <div></div>
<!-- 
                    <button type="button" class="btn btn-primary">
  Notifications <span class="badge text-bg-secondary">4</span>
</button> -->



<hr style="width:100%;text-align:left;margin-bottom:40px">



<!-- <div class="row">
    <div class="col-md-3">
        name1
    </div>
    <div class="col-md-3">
    name2
   </div>
   <div class="col-md-3">
        name3
  </div>

   </div> -->
   <div class="container-fluid " style="width: 100%;">

<div class="row card-group ">
  <div class=" card mr-3 mb-4">
   
    <div class="card-body">
      <h5 class="card-title" style="font-size: 120%; font-weight: bold;">Open Request </h5>
     
 

 
     <?php
      $connection = mysqli_connect("localhost","root","Seekware@123","Cheetah_Local");

      $query = "SELECT id FROM request__apps ORDER BY id";
      $query_run =mysqli_query($connection, $query);

      $row =mysqli_num_rows($query_run);
      echo'<h1>' .$row. '</h1>';

       ?>  



<h1 style="font-size:3vw ;">0</h1>
      <h1 style="font-size:3vw ;"></h1>

    </div>
    
  </div>
  <div class="card mr-3 ml-3 mb-4">
   
    <div class="card-body">
      <h5 class="card-title" style="font-size: 120%; font-weight: bold;">Requests Ready for Review</h5>
      <!-- <p class="card-text">2</p> -->

      <!-- <?php
      $connection = mysqli_connect("localhost","root","Seekware@123","Cheetah_Local");

      $query = "SELECT id FROM request__graphics ORDER BY id";
      $query_run =mysqli_query($connection, $query);

      $row =mysqli_num_rows($query_run);
      echo'<h1>' .$row. '</h1>';

       ?>  -->

            <h1 style="font-size:3vw ;">0</h1>
    </div>
    
  </div>
  <div class="card ml-3 mb-4">
   
    <div class="card-body">
      <h5 class="card-title" style="font-size: 120%; font-weight: bold;">Requests Awaiting Response</h5>
      <!-- <p class="card-text">0</p> --> 
      <h1 style="font-size:3vw ;">0</h1>
    </div>
    
  </div>
</div>

</div>



<div class="row mt-4 mb-4">
  <div class="col-sm-6">
    <div class="card ">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 120%; font-weight: bold;">Open Graphic Request</h5>

        <div class="container  col-12 table-responsive">
   
    <table class="table table-bordered data-table1 px-2">
        <thead>
            <tr>
            <th>ID</th>
                        <th>Request_Name</th>
                        <th>Design_Information</th>
                       
                        <th>Priority</th>
                        <th>Status</th>
                      
                        <th>Date</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>



 

    
<!--    
        <div class="container">
    <h1>Laravel 8 Datatables Tutorial <br/> ItSolutionStuff.com</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div> -->

</div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 120%; font-weight: bold;">Open Digital Request</h5>

        <div class="container">
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-bordered data-table2 px-2">
                <thead>
                <tr>
                    <th>ID</th>
                        <th>Request_Name</th>
                        <th>Marketing_Type</th>
                        <th width="100px">Creative_Type</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Company_Goals</th>
                        <th>Age_Group</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
        
      </div>
    </div>
  </div>
</div>




<div class="row mt-5 mb-5">
  <div class="col-sm-6">
    <div class="card ">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 120%; font-weight: bold;"> Open Web Request</h5>


     

        <div class="container">
    <div class="row">
        <div class="col-12 table-responsive">
        <table class="table table-bordered data-table3 px-2">
                <thead>
                    <tr>
                    <th>ID</th>
                        <th>Request_Name</th>
                        <th>Creative_Type</th>
                        <th width="100px">Design_Type</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Domain_Name</th>
                        <th>Priority</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 120%; font-weight: bold;" >Open App Request</h5>


        <div class="container">
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-bordered data-table4 px-2">
                <thead>
                <tr>
                    <th>ID</th>
                        <th>Request_Name</th>
                        <th>Creative_Type</th>
                        <th width="100px">Database_Type</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th>Color_theme</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
              
                 
                </tbody>
            </table>
        </div>
    </div>
</div>
        
      </div>
    </div>
  </div>
</div>



<!--    
<script src="USER1/vendor/jquery/jquery.min.js"></script>
    <script src="USER1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

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
   
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table1').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Index_DataTable1') }}",
        columns: [
          {data: 'id', name: 'id'},
            {data: 'Request_Name', name: 'Request_Name'},
            {data: 'Design_Information', name: 'Design_Information'},
          
            // {data: 'Purpose', name: 'Purpose', orderable: false, searchable: false},
            {data: 'Priority', name: 'Priority'},
            {data: 'Status', name: 'Status'},
           
            {data: 'Date', name: 'Date'},
            // {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>


<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table2').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Index_DataTable2') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'Request_Name', name: 'Request_Name'},
            {data: 'Marketing_Type', name: 'Marketing_Type'},
            {data: 'Creative_Type', name: 'Creative_Type'},
            // {data: 'Purpose', name: 'Purpose', orderable: false, searchable: false},
            {data: 'Date', name: 'Date'},
            {data: 'Status', name: 'Status'},
            {data: 'Company_Goals', name: 'Company_Goals'},
            {data: 'Age_Group', name: 'Age_Group'},
        ]
    });
    
  });
</script>


  
<script type="text/javascript">
  $(function () {
    var table = $('.data-table3').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Index_DataTable3') }}",
        columns: [
          {data: 'id', name: 'id'},
            {data: 'Request_Name', name: 'Request_Name'},
            {data: 'Creative_Type', name: 'Creative_Type'},
            {data: 'Design_Type', name: 'Design_Type'},
            // {data: 'Purpose', name: 'Purpose', orderable: false, searchable: false},
            {data: 'Date', name: 'Date'},
            {data: 'Status', name: 'Status'},
            {data: 'Domain_Name', name: 'Domain_Name'},
            {data: 'Priority', name: 'Priority'},
        ]
    });
  });
</script>

  
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table4').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Index_DataTable4') }}",
         columns: [
          {data: 'id', name: 'id'},
            {data: 'Request_Name', name: 'Request_Name'},
            {data: 'Creative_Type', name: 'Creative_Type'},
            {data: 'Database_Type', name: 'Database_Type'},
            // {data: 'Purpose', name: 'Purpose', orderable: false, searchable: false},
            {data: 'Priority', name: 'Priority'},
            {data: 'Status', name: 'Status'},
            {data: 'Color_theme', name: 'Color_theme'},
            {data: 'Date', name: 'Date'},
        ]
    });
    
  });
</script>


<!-- 

<script type="text/javascript">
  $(function () {
    var table = $('.user2_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Index_DataTable2') }}",
        columns: [
          {data2: 'id', name: 'id'},
            {data2: 'Request_Name', name: 'Request_Name'},
            {data2: 'Marketing_Type', name: 'Marketing_Type'},
            {data2: 'Creative_Type', name: 'Creative_Type'},
            // {data: 'Purpose', name: 'Purpose', orderable: false, searchable: false},
            {data2: 'Date', name: 'Date'},
            {data2: 'Status', name: 'Status'},
            {data2: 'Company_Goals', name: 'Company_Goals'},
            {data2: 'Age_Group', name: 'Age_Group'},
        ]
    });
  });
</script>  -->



</html>