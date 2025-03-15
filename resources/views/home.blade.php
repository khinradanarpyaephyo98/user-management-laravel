@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    
    <style>
            .sidebar{
                position: fixed;
                bottom: 0;
                left: 0;
                width: 70px; /* Adjust as needed */
                background-color: #f8f9fa; /* Light background */
                padding: 4px;
            }

            .pico-img{
                margin-top: 10px;
                margin-bottom: 10px;
                width:30px;
                height: 30px;
            }

            
            .modal-dialog{
                margin:auto;
            }

            .service-btn{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 10px;
                width: 100%;
                border-color:color-mix(in lch shorter hue, gray 20%, black 50%);
            }


            .nav-link.active-service {
                /* Optional: Add a subtle background */
                opacity: 1 !important;
            }

            .box-feature{
                width: 70px;
                height: 70px;
                background-color: white;
                box-shadow:  -2px 2px 6px 6px lightgray;
            }

            .icon-href{
                padding:20px 20px 20px 20px;
                display: inline-block;
            }

    </style>

    <title>User MANAGEMENT</title>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-auto bg-light sticky-top " >
                <div class="d-flex flex-sm-column flex-column flex-nowrap bg-white sticky-top  align-items-center sidebar">
                    <a  class="d-block p-3 link-dark text-decoration-none" title="" >
                        <img src="/images/pico.jpg" class="pico-img"/>
                    </a>
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-80 align-items-center">
                        <li class="nav-item">  
                            <a href="#"  class="nav-link py-3 px-2"  data-bs-toggle="modal" data-bs-target="#modalDashboard" id="service-userManage">
                                <i class="fa-solid fa-grip-vertical" style="color:gray" id="icon-userManage"></i>
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
                    <button type="button" class="btn btn-primary"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade justify-content-center" id="modalDashboard" tabindex="-1" aria-labelledby="modalDashboardLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title" id="modalDashboardLabel" style="margin-left: 30px;"> <b> All Apps</b></p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">  
                            <ul class="list-unstyled d-flex flex-wrap p-10" id="modal-ul">
                                <li class="col-2 mb-3 d-flex flex-column align-items-center" id="modal-li">
                                    <div class="box-feature">
                                        <a href={{ route('users.index')}} class="icon-href ">
                                            <i class="fa-solid fa-users fa-2xl text-secondary"  ></i>
                                        </a>
                                    </div>
                                    <p class="text-primary mt-2 " >User & Role</p>
                                </li>

                                <li class="col-2 mb-3 d-flex flex-column align-items-center"  id="modal-li">
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-solid fa-address-book  fa-2xl text-secondary" ></i>
                                        </a>
                                        <p class="text-primary mt-2 ">Contact</p>
                                    </div>
                                </li>

                                <li class="col-2 mb-3 d-flex flex-column align-items-center">
                                    <div class="box-feature text-center">
                                        <a href="" class="icon-href ">
                                         <i class="fa-brands fa-product-hunt fa-2xl text-secondary" ></i>
                                        </a>
                                    </div>
                                    <p class="text-primary mt-2">Product</p>
                                </li>
                                <li class="col-2 mb-3 d-flex flex-column align-items-center">
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-solid fa-cart-shopping fa-2xl text-secondary"></i>
                                        </a>
                                    </div>
                                        <p class="text-primary mt-2">Purchase</p>
                                </li>
                                <li class="col-2 mb-3 d-flex flex-column align-items-center">
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-duotone fa-solid fa-shop fa-2xl text-secondary"></i>
                                        </a>
                                    </div>
                                        <p class="text-primary mt-2">Sale</p>
                                </li>
                                <li class="col-2 mb-3 d-flex flex-column align-items-center">
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-solid fa-calculator fa-2xl text-secondary"></i>
                                        </a>
                                    </div>
                                        <p class="text-primary mt-2">POS</p>
                                </li>
                                <li class="col-2 mb-3 d-flex flex-column align-items-center" >
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-solid fa-address-book  fa-2xl text-secondary" ></i>
                                        </a>
                                    </div>
                                     <p class="text-primary mt-2">Inventory</p>
                                </li>
                                <li class="col-2 mb-3 d-flex flex-column align-items-center">
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-solid fa-address-book  fa-2xl text-secondary" ></i>
                                        </a>
                                    </div>
                                        <p class="text-primary mt-2">Reports</p>
                                </li>
                                <li class="col-2 mb-3 d-flex flex-column align-items-center">
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-solid fa-address-book fa-2xl text-secondary" ></i>
                                        </a>
                                    </div>
                                        <p class="text-primary mt-2">Cash&Payment</p>
                                </li>
                                <li class="col-2 mb-3 d-flex flex-column align-items-center">
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-solid fa-address-book  fa-2xl text-secondary" ></i>
                                        </a>
                                    </div>
                                        <p class="text-primary mt-2">Expense</p>
                                </li>
                                <li class="col-2 mb-3 d-flex flex-column align-items-center">
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-solid fa-address-book  fa-2xl text-secondary" ></i>
                                        </a>
                                    </div>
                                        <p class="text-primary mt-2">SMS</p>
                                </li>
                                <li class="col-2 mb-3 d-flex flex-column align-items-center">
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-solid fa-address-book  fa-2xl text-secondary" ></i>
                                        </a>
                                    </div>
                                        <p class="text-primary mt-2">Mail</p>
                                </li>
                                <li class="col-2 mb-3 d-flex flex-column align-items-center">
                                    <div class="box-feature">
                                        <a href="" class="icon-href ">
                                            <i class="fa-solid fa-address-book  fa-2xl text-secondary" ></i>
                                        </a>
                                    </div>
                                    <p class="text-primary mt-2">Invoice</p>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('modalDashboard');
        const service = document.getElementById('service-userManage');
        const iconUser = document.getElementById('icon-userManage');
        

        modal.addEventListener('show.bs.modal', function() {
        // Highlight the icon when the modal opens
        service.classList.add('active-service'); //adjust to the right Id to highlight
        iconUser.style.color = "#007bff";
         });

        

        modal.addEventListener('hidden.bs.modal', function() {
            // Remove the highlight when the modal closes
            service.classList.remove('active-service'); //adjust to the right Id to un-highlight
            iconUser.style.color = "gray";
        });
});

    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    </body>
</html>
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
