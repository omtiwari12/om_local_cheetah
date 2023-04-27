
<nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    {{-- <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> --}}



   

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                   
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                            alt="...">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                            problem I've been having.</div>
                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                            alt="...">
                        <div class="status-indicator"></div>
                    </div>
                    <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how
                            would you like them sent to you?</div>
                        <div class="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                            alt="...">
                        <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Last month's report looks great, I am very happy with
                            the progress so far, keep up the good work!</div>
                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                            alt="...">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                            told me that people say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>

        </li>



        <div class="topbar-divider d-none d-sm-block">
            
   </div>
   <x-app-layout>
   
   </x-app-layout>
   


        

        <!-- Nav Item - User Information -->
        
        <!-- <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                 -->
                
                <!-- <img class="img-profile rounded-circle"
                    src="data:image/jpeg;base64,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"> -->
            <!--  </a>
             -->
            
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
               
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                
                  
                   
                </a> 
                
                <!-- <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                   
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    
                   
                </a> -->
            </div>
        </li>

    </ul>

</nav>