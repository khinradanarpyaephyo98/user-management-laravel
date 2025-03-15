<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    
    <style>
        body { height: 100vh; margin: 0; 
            background-color:#F0F0F0;
        }

        .sidebar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 70px; /* Adjust as needed */
            background-color: #f8f9fa; /* Light background */
            padding: 2px;
        }

        .sidebar-exp{
            position: fixed;
            bottom: 0;
            left: 80px;
            width: 180px; /* Adjust as needed */
            background-color:#F0F0F0; /* Light background */
            padding: 2px;
        }

        .pico-img{
            margin-top: 10px;
            margin-bottom: 10px;
            width:30px;
            height: 30px;
        }

        .btn-primary{
            margin-bottom: 40px;
            margin-left: 50px;
        }
        
        .modal-dialog{
            margin-left: 75px;
        }

        .service-btn{
            display: flex;
            flex-direction:column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            width: 100%;
            
        }

        .nav-link.active-service {
            /* Optional: Add a subtle background */
            opacity: 1 !important;
        }

        .box-feature{
            width: 40px;
            height: 40px;
            background-color: red;
            justify-content: center;
            align-items: center;
        }

        
        .col-md-10{
            min-height: 100vh; 
            background-color:#F0F0F0;
            min-width: 100%;
        }

        .col-md-1{
            background-color:#F0F0F0 ;
        }

        #navbar-a{
            text-align:center;
            align-items: center;
            display:block;
            background-color: white; 
            border-radius: 5px;
        }

        @media (min-width: 768px) {
        .ps-md-4 {
            padding-left: 90px !important;         
        }
        .row{
            height: 100vh;
        }
        }   
        
        li:hover {
            color:blue;
        }

        .fa-circle-info:hover{
            
            background-color: green;
        }

        #main-layout{
            margin-left: 10px;
        }
    </style>
    <title>Roles</title>
</head>
<body>
    <div class="container-fluid ">
        <div class="row"  style="background-color:#F0F0F0;">
            <div class="col-sm-1 col-md-1 col-lg-1 bg-light sticky-top" id="sidebar" >
                <div class="d-flex flex-sm-column flex-nowrap bg-white sticky-top  align-items-center sidebar">
                    <a  class="d-block p-3 link-dark text-decoration-none" title="" >
                        <img src="/images/pico.jpg" class="pico-img"/>
                    </a>
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-80 align-items-center">
                        <li class="nav-item">  
                            <a href="#"  class="nav-link py-3 px-2"  data-bs-toggle="modal" data-bs-target="#modalDashboard" id="service-userManage">
                                <i class="fa-solid fa-grip-vertical text-primary" id="icon-userManage"></i>
                            </a> 
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-1" >
                            <i class="fa-solid fa-address-book" style="color:gray"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" >
                                <i class="fa-solid fa-calendar-days" style="color:gray"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" >
                            <i class="fa-solid fa-cart-shopping" style="color:gray"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2"  >
                            <i class="fa-solid fa-truck" style="color:gray"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" >
                            <i class="fa-solid fa-keyboard" style="color:gray"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" >
                            <i class="fa-solid fa-building-columns" style="color:gray"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" >
                            <i class="fa-solid fa-chart-column" style="color:gray"></i>
                            </a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-primary " id="sidebar-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 bg-light sticky-top" id="expand-sidebar" style="display: none;" >
                <div class="d-flex flex-sm-column flex-nowrap bg-white sticky-top  align-items-center sidebar-exp">
                        <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between align-items-center" id="expand-bar"> 
                            <li>
                                <a  class="nav-link py-3 px-1 mb-2" >
                                <b class="text-secondary fs-6" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">USER MANAGEMENT</b>
                                </a>
                            </li>
                            <li>
                                    <a class="text-secondary d-block link-dark text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="user-collap">
                                        <div id="user-title">
                                            <i class="fa-solid fa-user " id="user-icon"></i>Users  <i class="fa-solid fa-angle-down" id="user-collap-i-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse text-align-left" id="collapseExample">
                                        <ul class="ms-2" style="list-style-type:disc; color:black " id="user-collap-ul">
                                            <li class="text-start ms-4 py-2" id="user-li">
                                                <a href="/users" class="link-dark text-decoration-none" id="userlist">
                                                    Users List
                                                </a>
                                            </li>
                                            <li class="text-start ms-4 py-2" > 
                                                <a href="/users/fetch_name" class="link-dark text-decoration-none">
                                                    Create User
                                                </a>
                                            </li>
                                            <li class="text-start  ms-4 py-2" >
                                                <a href="" class="link-dark text-decoration-none d-block">
                                                     Import Users    
                                                </a>
                                            </li>
                                        </ul>
                                    </div> 
                                
                            </li>
                            <li>
                                <a class="text-secondary d-block link-dark text-decoration-none" data-bs-toggle="collapse" href="#collapseRole" aria-expanded="false" aria-controls="collapseRole" id="role-collap">
                                    <div id="role-title">
                                        <i class="fa-solid fa-list " id="role-icon"> </i>Roles  <i class="fa-solid fa-angle-down" id="role-collap-i-down"></i>
                                    </div>
                                </a>
                                <div class="collapse text-align-left" id="collapseRole">
                                    <ul class="ms-2" style="list-style-type:disc; color:black " id="role-collap-ul">
                                        <li class="text-start ms-4 py-2" >
                                            <a href="/roles" class="link-dark text-decoration-none" >
                                                Roles List
                                            </a>
                                        </li>
                                        <li class="text-start ms-4 py-2" id="role_li" > 
                                            <a href="/roles/create" class="link-dark text-decoration-none" id="role_href">
                                                Create Role
                                            </a>
                                        </li>
                                    </ul>
                                </div> 
                                
                            </li>
                        </ul>
                    </div>
                </div>
            <div class="col-sm-10 col-md-10 col-lg-9 " id="main-layout">
                <div class="container">
                    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                        <div class="navbar-nav  ms-md-auto ms-sx-auto ">
                            <div class="d-flex flex-row" style="height:40px">
                                <a class="nav-item nav-link " href="#" id="navbar-a" ><span>English <img src="/images/us-flag.png" style="width: 20px; height:20px; border-radius:40%"></span></a>
                            </div>
                            <div class=" bg-white mx-2 "  id="navbar-a"  >
                                <a class="nav-item nav-link " href="#"><i class="fa-solid fa-fax"></i> </a>
                            </div>
                            <div class=" bg-white mx-2 " id="navbar-a">
                                <a class="nav-item nav-link " href="#"  ><i class="fas fa-volume-mute text-gray" ></i> </a>
                            </div>
                            <div class="bg-white mx-2" id="navbar-a">
                                <a class="nav-item nav-link" href="#"  ><i class="bi bi-brightness-high"></i></a>
                            </div>
                            <div class="mx-2" id="navbar-a" style="background-color: #F0F0F0;">
                                <a class="nav-item nav-link" href="#"><i class="fa-solid fa-p text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="navbar navbar-expand-md navbar-expand-sm navbar-light">
                    <div class="container">
                        <div class="navbar-header" >
                            <h4>Roles List</h4> 
                            <p><b style="color: gray;"> Roles / </b><b> Roles List</b></p> 
                        </div>
                        <?php 
                        
                        if(isset($_SESSION['role_create_success'])){

                            echo '<div class="alert alert-success text-center py-1 mx-auto justify-content-center align-items-center alert-role-create-success" role="alert" style="width: 20%;height:40px;">';
                            echo ' <p class="">' . $_SESSION['role_create_success']   .'!</p>';
                            echo '</div>'; 
                            unset($_SESSION['role_create_success']); // Clear the session variable 
                            
                        }
                        ?>
                        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                            <div class="navbar-nav  ms-md-auto ms-sx-auto ">
                                <div class="d-flex flex-row " style="height:40px">
                                    <a class="nav-item nav-link " href="#" id="navbar-a" ><span>English <img src="/images/us-flag.png" style="width: 20px; height:20px; border-radius:40%"></span></a>
                                </div>
                                <div class=" bg-white mx-2 "  id="navbar-a"  >
                                    <a class="nav-item nav-link " href="#"><i class="fa-solid fa-fax"></i> </a>
                                </div>
                                <div class=" bg-white mx-2 " id="navbar-a">
                                    <a class="nav-item nav-link " href="#"  ><i class="fas fa-volume-mute text-gray" ></i> </a>
                                </div>
                                <div class="bg-white mx-2" id="navbar-a">
                                    <a class="nav-item nav-link" href="#"  ><i class="bi bi-brightness-high"></i></a>
                                </div>
                                <div class="mx-2" id="navbar-a" style="background-color: #F0F0F0;">
                                    <a class="nav-item nav-link" href="#"><i class="fa-solid fa-p text-primary"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container bg-white d-flex flex-column justify-content-center align-items-center bg-light rounded " >  
                    <div class="container" style="justify-content: space-between; margin-top:20px">
                        <form class="d-flex" role="search" >
                            <input type="text" class="form-control" placeholder=" Search "  
                            style=" font-family:sans-serif; font-style: normal; font-weight: normal;  height:40px; text-transform: lowercase !important; " id="searchInput" autocapitalize="none"/>

                            <a href="/roles/create" class="btn btn-primary col-md-2 col-l-2 col-sm-2" type="submit" style="margin-left:30px ;height:40px; font-size:small"><i class="fa-solid fa-plus " ></i>  Create Role</a>
                        </form>
                        <table class="table table-borderless" style="table-layout: fixed; width: 100%; border:none;" >
                            <tr >   
                                <th scope="col"  style="color:gray; padding-left:20px" class="pb-4" >ROLE</th>
                                <th scope="col"  style="color:gray" class="pb-4">ACTIONS</th>
                            </tr>
                                @if(isset($roles) )
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td class="py-2 ps-3 "><h6 class="text-secondary">{{ $role}}</h6> </td>
                                            <td class="py-2">
                                                @if($role === 'admin')
                                                    <button class="btn btn-light disabled">default role</button>
                                                @else
                                                    <div class="dropdown">
                                                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                        </table>

                        <div class="d-flex flex-row">
                            <div class="dropdown">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdown_pageno" data-bs-toggle="dropdown" aria-expanded="false" >
                                    {{$currentPage}}
                                </a>

                                <ul class="dropdown-menu text-center" aria-labelledby="dropdown_pageno"  style="min-width:inherit;width:50px; ">
                                    @for($i=1;$i<=$totalPages;$i++ )
                                        <li class="dropdown-item" >
                                            <a href="?page={{$i}}" class="text-decoration-none" >
                                                {{$i}}
                                            </a>
                                        </li>
                                    @endfor
                                </ul>
                            </div>

                            <nav class="ms-auto float-right" aria-label="...">      
                                <ul class="pagination me-auto">
                                    @if ($totalPages > 1)
                                        <li class="page-item  {{ $currentPage == 1 ? 'disabled' : '' }}">
                                            <a class="page-link" href="?page={{ max(1, $currentPage - 1) }}" >&lt;</a>
                                        </li>
                                        <li class="page-item active">
                                            <span class="page-link">
                                                <?php echo $currentPage; ?>
                                                <span class="sr-only">(current)</span>
                                            </span>
                                        </li>
                                        <li class="page-item {{$currentPage == $totalPages? 'disabled' : ''}}" >
                                            <a class="page-link" href="?page={{$currentPage + 1}}"> &gt;</a>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>  
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                if ($(".alert-role-create-success").length) {
                    setTimeout(function() {
                        $(".alert-role-create-success").alert('close');
                    }, 100);
                }
            }, 100); // Small delay
        });

        document.addEventListener('DOMContentLoaded', function() {
            const userTitle = document.getElementById('role-title');
            const userLi = document.getElementById('role-li');
            const userList = document.getElementById('rolelist');
            const currentPath = window.location.pathname; // Get the current path

            if (currentPath === "/roles") {
                userTitle.style.color = '#0080FF';
                userLi.style.color = '#0080FF';
                userList.style.color = '#0080FF'; 
            }
        });
    
        
        document.addEventListener('DOMContentLoaded', function() 
        {
            const modal = document.getElementById('modalDashboard');
            const service = document.getElementById('service-userManage');
            const iconUser = document.getElementById('icon-userManage');
            modal.addEventListener('show.bs.modal', function() 
            {
            // Highlight the icon when the modal opens
            service.classList.add('active-service'); //adjust to the right Id to highlight
            iconUser.style.color = "#007bff";
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const expandSidebarButton = document.getElementById('sidebar-btn');
            const expandedSidebar = document.getElementById('expand-sidebar');
            const mainContent = document.getElementById('main-layout');
            const sidebar = document.getElementById("sidebar");
            const userCollap = document.getElementById('user-collap')
            const userIconDown = document.getElementById('user-collap-i-down');
            const collapseExample = document.getElementById('collapseExample');
            const roleCollap = document.getElementById('role-collap');
            const roleIconDown = document.getElementById('role-collap-i-down');
            const collapseRole = document.getElementById('collapseRole');

            expandSidebarButton.addEventListener('click', function() {
                if (expandedSidebar.style.display === 'none') {
                    expandedSidebar.style.display = 'flex';
                    mainContent.classList.remove('col-md-10');
                    mainContent.classList.add('col-md-7');
                    /* sidebar.classList.remove('col-md-1'); // Remove col-md-1 from original sidebar
                    sidebar.classList.add('col-md-1'); //Add col-md-1 back to original sidebar, but keep it the same.
                     */
                    expandSidebarButton.innerHTML = '<i class="fas fa-chevron-left"></i>';
                    /* expandSidebarButton.style.marginBottom='40px';
                    expandSidebarButton.style.marginLeft = '50px'; */
                    roleCollap.click();
                    
                    collapseRole.addEventListener('shown.bs.collapse', function() {
                        roleIconDown.classList.remove('fa-angle-down');
                        roleIconDown.classList.add('fa-angle-up');
                    });

                    collapseRole.addEventListener('hidden.bs.collapse', function() {
                        roleIconDown.classList.remove('fa-angle-up');
                        roleIconDown.classList.add('fa-angle-down');
                    });

                    collapseExample.addEventListener('shown.bs.collapse', function() {
                        userIconDown.classList.remove('fa-angle-down');
                        userIconDown.classList.add('fa-angle-up');
                    });

                    collapseExample.addEventListener('hidden.bs.collapse', function() {
                        userIconDown.classList.remove('fa-angle-up');
                        userIconDown.classList.add('fa-angle-down');
                    });
            
            } 
            else {
                expandedSidebar.style.display = 'none';
                mainContent.classList.remove('col-md-7');
                mainContent.classList.add('col-md-10');
                expandSidebarButton.innerHTML = '<i class="fas fa-chevron-right"></i>';
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const roleBtn = document.getElementById("role-icon");
        roleBtn;
    });

        
    </script>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     -->
    </body>
</html>