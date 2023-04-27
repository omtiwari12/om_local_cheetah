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


<!-- summer note links nd script -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>




<!--Drag and Drop Script-->



    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <script>
        var dropzone = new Dropzone('#file-upload', {
            previewTemplate: document.querySelector('#preview-template').innerHTML,
            parallelUploads: 3,
            thumbnailHeight: 150,
            thumbnailWidth: 150,
            maxFilesize: 5,
            filesizeBase: 1500,
            thumbnail: function (file, dataUrl) {
                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function () {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }
        });
        
        var minSteps = 6,
            maxSteps = 60,
            timeBetweenSteps = 100,
            bytesPerStep = 100000;
        dropzone.uploadFiles = function (files) {
            var self = this;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));
                for (var step = 0; step < totalSteps; step++) {
                    var duration = timeBetweenSteps * (step + 1);
                    setTimeout(function (file, totalSteps, step) {
                        return function () {
                            file.upload = {
                                progress: 100 * (step + 1) / totalSteps,
                                total: file.size,
                                bytesSent: (step + 1) * file.size / totalSteps
                            };
                            self.emit('uploadprogress', file, file.upload.progress, file.upload
                                .bytesSent);
                            if (file.upload.progress == 100) {
                                file.status = Dropzone.SUCCESS;
                                self.emit("success", file, 'success', null);
                                self.emit("complete", file);
                                self.processQueue();
                            }
                        };
                    }(file, totalSteps, step), duration);
                }
            }
        }
    </script>
    <style>
        .dropzone {
            background: #e3e6ff;
            border-radius: 13px;
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
            border: 2px dotted #1833FF;
            margin-top: 50px;
        }
    </style>

<!-- End Drag and Drop Script -->

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
                        <h1 class="h3 mb-0 text-dark ml-4 font-weight-bold ">Graphic Design Request</h1>
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-4"><i
                                class="fas fa-download fa-sm text-white-50"></i> Back to Dashboard</a> --}}
                                
                                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                    <ol class="breadcrumb mr-5">
                                      <li class="breadcrumb-item"><a href="/User_Dashboard">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page"><a href="/Request_Page">Add New Request</a></li>
                                    </ol>
                                  </nav>

                    </div>

                    <ul class="nav nav-tabs ml-4 mb-5" id="myTab" role="tablist">
                     
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" ><a href="/View_All_Request">View All Requests</a></button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><a href="/Request_Graphics">Request Details</a></button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Learn More</button>
                      </li>
                      {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
                      </li> --}}
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      {{-- <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div> --}}
                      {{-- <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div> --}}
                    </div>

                    
                    {{-- <hr style="width:100%;text-align:left;margin-bottom:40px"> --}}
                   
                    <!-- Content Row -->



                    
                   
              <div class="container-fluid " style="width: 90%;">

  @if(session()->has('message'))

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">
  ×
</button>
{{session()->get('message')}}
</div>
@endif
                
                    <div class="">  
                      

                        <form   action="{{url('Request_Graphics')}}" method="post" >

                          @csrf  
                        <div class="card " style="width: 100%;">
                            <div class="card-body" style= border: 5px solid black;>
                            
                              
                                <div class="row">
                                  <div class="  form-group col-md-4 ">
                                    <label for="inputCity"><h5 class="font-weight-bold">Request Name</h5></label>
                                    <input type="text" class="form-control" name="Request_Name" Placeholder="Graphic design Request" required>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputState"><h5 class="font-weight-bold">Design Info.</h5></label>
                                    <select name="Design_Information" class="form-control" required >
                                      <option selected>choose type </option>
                                      <option>Logo Design </option>
                                      <option>Flyer</option>
                                      <option>Post Card</option>
                                      <option>Banner</option>
                                      <option>Brand Collateral</option>
                                      <option>Graphic Design</option>
                                      <option>and more!</option> 
                                    </select>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputState"><h5 class="font-weight-bold">Purpose</h5></label>
                                    <select name="Purpose" class="form-control"  required>
                                      <option selected>Choose..</option>
                                      <option>For Business</option>
                                      <option>For Events</option>
                                      <option>For websites</option>
                                      <option>and more!</option>
                                    </select>
                                  </div>
                                 
                            </div>
                        </div>
                            </div>
                          

                          
                        <div class="card  mt-5" style="width: 100%;">
                            <div class="card-body border">
                            
                            
                                
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label for=""><h5 class="font-weight-bold">Template Size</h5></label>
                                    <input type="text" class="form-control" name="Sizes" Placeholder=" Template Size"  required>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="" class="fw-bold"><h5 class="font-weight-bold">Target Platform</h5></label>
                                    <input type="text" class="form-control" name="Target_Platform"  Placeholder="Type name of platform"  required>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for=""><h5 class="font-weight-bold">Other Information</h5></label>
                                    <input type="text" class="form-control" name="Other_Info" Placeholder=" Other Information"  >
                                  </div>


                                </div>
                            </div>
  
                        </div>
                             
                            
                          
                            <div class="card  mt-5" style="width: 100% ;">
                                <div class="card-body">
                                
                                 
                                    <div class="form-row">
                                      <div class="form-group col-md-4 ">
                                        <label for=""><h5 class="font-weight-bold">Mention a date for the completion!</h5></label>
                                        <input type="date" class="form-control" name="Date" Placeholder="Date upto complete!"  required>
                                      </div>
                                      <div class="form-group col-md-4">
                                        <label for="inputState"><h5 class="font-weight-bold">Specific Colors? If it applicable here !!</h5></label>
                                        <input type="text" class="form-control" name="Color_Type" Placeholder="Style type"  required>
                                        </select>
                                      </div>
                                      <div class="form-group col-md-4 ">
                                        <label for=""><h5 class="font-weight-bold">Priority !</h5></label> 
                                        <select name="Priority" class="form-control"  required>
                                          <option selected>Design Type</option>
                                          <option>High</option>
                                          <option>Medium</option>
                                          <option>Low</option> 
                                        </select>
                                      </div>
    
    
                                    </div>
                                </div>
                            </div>
                            
                            
                          
                            <div class="row mt-4 mb-4">
  <div class="col-sm-6">
    <div class="card ">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 120%; font-weight: bold;">Description</h5>
        <!-- <label><strong>Description :</strong></label> -->
                                <textarea class="summernote" name="description" id="summernote1"></textarea>
     


      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 120%; font-weight: bold;"> <div class="dz-message">
                Upload file here<br></h5>


        <input type="file" class="dropzone" id="file-upload" enctype="multipart/form-data" name="file"> 

        <div class="dz-message">
                <br>
                </div>

      </div>
    </div>
  </div>
</div>
              
             <div class="col-auto mt-4 ">
              <center><button type="submit" class="btn mt-3 mb-2 d-grid gap-3 col-4 mx-auto" style="background:#000000;color:white;">
                      Submit</button></center>
                  </div>
                                
                    </form>


                    <div>

             
                   </div>

                            
                           
                  </div>
                </div>
              </div>





<!-- summernote script -->
              

    <script type="text/javascript">
        $(document).ready(function() {
          $('.summernote').summernote();
        });
    </script>



                       


    <!-- Bootstrap core JavaScript-->
    <!-- <script src="USER1/vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="USER1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --> 

    <!-- Core plugin JavaScript-->
    <script src="USER1/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="USER1/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="USER1/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <!-- <script src="USER1/js/demo/chart-area-demo.js"></script>
    <script src="USER1/js/demo/chart-pie-demo.js"></script> -->

</body>

</html>