<!DOCTYPE html>
<html>
<head>


<title>Open Request</title>

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

    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<style>
  .nav-link.active{
    background: transparent !important;
    color: white !important;
    border-bottom: 2px solid yellow !important;
    border-radius: 0px !important;
}
</style>

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



<!-- 

            <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
</div> -->

<!-- <script>
  var firstTabEl = document.querySelector('#myTab li:last-child a')
  var firstTab = new bootstrap.Tab(firstTabEl)

  firstTab.show()
</script>
 -->



<!--             
            <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><a href="/Open_Request">Open</a></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div> -->


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
        Graphic Design Request
      </button>
    </h2>
    
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion1">
      <div class="accordion-body">


   <!--         
<div class="container">
   
     <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                 <th width="100px">Action</th> 
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div> -->
       
            
      <div class="container-fluid " style="width: 90%;">
    <div class="row">
        <div class="col-12 table-responsive">
            <!-- <table class="table table-bordered user1_datatable">
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
                <tbody></tbody> 



               
            </table> -->



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
    </div>
</div>


      </div>
    </div>
  </div>



  <div class="accordion" id="accordion2">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo" style="font-size: 120%; font-weight: bold; font-color: black">
        Digital Marketing Request
      </button>
    </h2>
    
    <div id="collapsetwo" class="accordion-collapse collapse show" data-bs-parent="#accordion2">
      <div class="accordion-body">

      <div class="container-fluid " style="width: 90%;">
    <div class="row">
        <div class="col-12 table-responsive">
            <!-- <table class="table table-bordered user2_datatable">
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
            </table> -->

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



<div class="accordion" id="accordion3">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree" style="font-size: 120%; font-weight: bold; font-color: black" > 
        Web Development Request
      </button>
    </h2>
    
    <div id="collapsethree" class="accordion-collapse collapse show" data-bs-parent="#accordion3">
      <div class="accordion-body">

      <div class="container-fluid " style="width: 90%;">
    <div class="row">
        <div class="col-12 table-responsive">
            <!-- <table class="table table-bordered user3_datatable">
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
            </table> -->
            <table class="table table-bordered data-table4 px-2">
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


<div class="accordion" id="accordion4">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour" style="font-size: 120%; font-weight: bold; font-color: black">
        App Development Request
      </button>
    </h2>
    
    <div id="collapsefour" class="accordion-collapse collapse show" data-bs-parent="#accordion4">
      <div class="accordion-body">
      <div class="container-fluid " style="width: 90%;">
    <div class="row">
        <div class="col-12 table-responsive">
            <!-- <table class="table table-bordered user4_datatable">
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
                <tbody></tbody>
            </table> -->
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
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>



    <!-- <script src="USER1/vendor/jquery/jquery.min.js"></script>  -->
    <script src="USER1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="USER1/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="USER1/js/sb-admin-2.min.js"></script>

   



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
        // $.ajaxSetup({
        //   headers:{
        //     'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        //   }
        // })
    var table = $('.user1_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Open_Request') }}",
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


<script type="text/javascript">
  $(function () {
    var table = $('.user2_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Open_Request') }}",
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
</script> 





<script type="text/javascript">
  $(function () {
    var table = $('.user3_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Open_Request') }}",
        columns: [
          {data3: 'id', name: 'id'},
            {data3: 'Request_Name', name: 'Request_Name'},
            {data3: 'Creative_Type', name: 'Creative_Type'},
            {data3: 'Design_Type', name: 'Design_Type'},
            // {data: 'Purpose', name: 'Purpose', orderable: false, searchable: false},
            {data3: 'Date', name: 'Date'},
            {data3: 'Status', name: 'Status'},
            {data3: 'Domain_Name', name: 'Domain_Name'},
            {data3: 'Priority', name: 'Priority'},
        ]
    });
  });
</script>




<script type="text/javascript">
  $(function () {
    var table = $('.user4_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Open_Request') }}",
        columns: [
          {data4: 'id', name: 'id'},
            {data4: 'Request_Name', name: 'Request_Name'},
            {data4: 'Creative_Type', name: 'Creative_Type'},
            {data4: 'Database_Type', name: 'Database_Type'},
            // {data: 'Purpose', name: 'Purpose', orderable: false, searchable: false},
            {data4: 'Priority', name: 'Priority'},
            {data4: 'Status', name: 'Status'},
            {data4: 'Color_theme', name: 'Color_theme'},
            {data4: 'Date', name: 'Date'},
        ]
    });
  });
</script>  -->


</html>