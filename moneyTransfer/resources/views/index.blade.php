<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Money Transfer</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('vendor/datatables/css/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .tdstyle{
            float: right;
            margin-right: 20px;
        }
    </style>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <header class="align-items-start app-header flex-column flex-md-row navbar navbar-expand-md navbar-light">
        <div class="align-items-baseline d-flex flex-row navbar-brand p-lg-3 pl-3 pr-3 pt-3">
            <a class="" href="#">Money Transfer System</a>
            <button class="collapsed ml-auto navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#side-menu-wrapper" aria-controls="side-menu" aria-expanded="false"
                    aria-label="Toggle navigation" style="
">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <ul class="nav navbar-nav ml-md-auto flex-row navbar-top-links">
        
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-user">
                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>
    <div class="d-md-flex">
        <div class="sidebar" role="navigation" style="background: #FFFF !important;">
            <div class="sidebar-nav collapse navbar-collapse show" id="side-menu-wrapper">
                <ul class="nav navbar-nav navbar-collapse flex-column side-nav list-group" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-white" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li class="list-group-item">
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Your Transaction account(s)</a>
                    </li>
                     <li class="list-group-item">
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Your Contact List</a>
                    </li>
                    <li class="list-group-item">
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Send Money</a>
                    </li>
                    <li class="list-group-item">
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Your Transactions</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>

        <div id="page-wrapper" class="p-4">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
         
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                         <!-- create contact form  -->
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header" style="text-align: center !important;">Create your Transaction Account(s)</div>
                                    <div class="card-body">
                                        <table style="width: 100%;">
                                            <tr>
                                                <td class="tdstyle">Account Name</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <input class="form-control" style="display: inline !important;">
                                         </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tdstyle">Account Type</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <select class="form-control" style="display: inline !important;">
                                            <option>Select Account Type</option>
                                            <option>Mobile Money</option>
                                            <option>Bank Account</option>
                                        </select>
                                         </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tdstyle">Account Number</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <input class="form-control" style="display: inline !important;">
                                         </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><button type="button" class="btn btn-primary btn-lg">Create Account</button></td>
                                            </tr>
                                        </table>
                                         
                                         
                                         
                                       </div>
                                  </div>
                             </div>
                            <!-- /create account form  -->

                    <!--  create contact form  -->
                     <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header" style="text-align: center !important;">Create your Contact</div>
                                    <div class="card-body">
                                        <table style="width: 100%;">
                                            <tr>
                                                <td class="tdstyle">First Name</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <input class="form-control" style="display: inline !important;">
                                         </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tdstyle">Last Name</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <input class="form-control" style="display: inline !important;">
                                         </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tdstyle">Phone Number</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <input class="form-control" style="display: inline !important;">
                                         </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tdstyle">Country</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <select class="form-control" style="display: inline !important;">
                                            <option>Select Country</option>
                                            <option>Mobile Money</option>
                                            <option>Bank Account</option>
                                        </select>
                                         </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tdstyle">Email (optional)</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <input class="form-control" style="display: inline !important;">
                                         </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><button type="button" class="btn btn-primary btn-lg">Add Contact</button></td>
                                            </tr>
                                        </table>
                                         
                                         
                                         
                                       </div>
                                  </div>
                             </div>
                         <!-- / create contact form  -->

                         <!-- Send money form  -->
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header" style="text-align: center !important;">Send Money</div>
                                    <div class="card-body">
                                        <table style="width: 100%;">
                                            <tr>
                                                <td class="tdstyle">Sender Account</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <select class="form-control" style="display: inline !important;">
                                            <option>Select account your sending from</option>
                                            <option>Mobile Money</option>
                                            <option>Bank Account</option>
                                        </select>
                                         </div>
                                                </td>
                                            </tr>
                                          
                                            <tr>
                                                <td class="tdstyle">Reciever Account</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <input class="form-control" style="display: inline !important;">
                                         </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tdstyle">Enter Account</td>
                                                <td>
                                                    <div class="form-group"> 
                                        <input class="form-control" style="display: inline !important;">
                                         </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><button type="button" class="btn btn-primary btn-lg">Send Money</button></td>
                                            </tr>
                                        </table>
                                         
                                                        
                                       </div>
                                  </div>
                             </div>
                            <!-- /Send money form  -->


                            <!-- Contact list table-->
               



                            <!--/ Contact list table -->

                        
                        </div> 
                   </div> 

               </div>
            <!-- /.row -->
            
           </div>
        <!-- /#page-wrapper -->
    </div>

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('vendor/popper/popper.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ URL::asset('vendor/metisMenu/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ URL::asset('vendor/raphael/raphael.min.js') }}"></script>
<script src="{{ URL::asset('vendor/morrisjs/morris.min.js') }}"></script>
<script src="{{ URL::asset('data/morris-data.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('dist/js/sb-admin-2.js') }}"></script>

<script src="{{ URL::asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables-responsive/dataTables.responsive.js') }}"></script>


<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true,
            drawCallback: function () {
                $('#dataTables-example_wrapper .row:last-child').addClass('mb-1 align-items-baseline');
            }
        });
    });
</script>


</body>

</html>
