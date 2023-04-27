<!DOCTYPE html>
<html>
<head>





<title>Completed Request</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->


<!-- Custom fonts for this template-->
<link href="USER1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="USER1/css/sb-admin-2.min.css" rel="stylesheet">

    <title>Laravel 8 Server Side Datatables Tutorial</title>
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
                <h1 class="h3 mb-0 text-gray-800 font-weight-bold" >Requests</h1>
                <a href="/Request_Page" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i
                        class="fa fa-bolt fa-sm text-white-50"></i> Add New Request</a>
            </div>
            <div></div>



            



<a href="/Open_Request"><span class="m-1" style="font-size: 120%;">Open </span></a>
<a href="/Completed_Request"><span class="m-1" style="font-size: 120%;">Completed</span></a>
<a href="/Drafts_Request"><span class="m-1" style="font-size: 120%;">Drafts</span></a>
<a href="/On_Hold_Request"><span class="m-1" style="font-size: 120%;">On Hold</span></a>
<a href="/Due_Today_Request"><span class="m-1" style="font-size: 120%;">Due Today</span></a>
<a href="/Overdue_Request"><span class="m-1" style="font-size: 120%;">Overdue</span></a>
<a href="/Ready_For_Review_Request"><span class="m-1" style="font-size: 120%;">Ready for Review</span></a>


            <hr style="width:100%;text-align:left;margin-bottom:40px">


            

           
 <div class="accordion" id="accordion1">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 120%; font-weight: bold; font-color: #fffff">
        Completed Request
      </button>
    </h2>
    
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion1">
      <div class="accordion-body">
       
            
      <div class="container-fluid " style="width: 90%;">
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-bordered user1_datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Request_Name</th>
                        <th>Design_Information</th>
                        <th width="100px">purpose</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th>Sizes</th>
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



 
<!-- <script src="USER1/vendor/jquery/jquery.min.js"></script>  -->
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



<script type="text/javascript">
  $(function () {
    var table = $('.user1_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Completed_Request') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'Request_Name', name: 'Request_Name'},
            {data: 'Design_Information', name: 'Design_Information'},
            {data: 'Purpose', name: 'Purpose'},
            // {data: 'Purpose', name: 'Purpose', orderable: false, searchable: false},
            {data: 'Priority', name: 'Priority'},
            {data: 'Status', name: 'Status'},
            {data: 'Sizes', name: 'Sizes'},
            {data: 'Date', name: 'Date'},
        ]
    });
  });
</script>


</html>