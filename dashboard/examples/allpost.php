<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="../assets/img/apple-icon.png">
  <link rel="icon" href="../assets/img/favicon.png">
  <title>
    TEAM FORUM
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../assets/css/material-dashboard.css?v=2.0.1">
  <!-- Documentation extras -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/assets-for-demo/demo.css" rel="stylesheet" />
  <!-- iframe removal -->
</head>

<body class="">
 
  <div class="wrapper">
    <div class="sidebar" id='sidebar' data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          LB
        </a>
        <a href="#" class="simple-text logo-normal">
          LUNATIC BYTE
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="../assets/img/faces/avatar.jpg" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                Tania Andrew
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> MP </span>
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> EP </span>
                    <span class="sidebar-normal"> Edit Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S </span>
                    <span class="sidebar-normal"> Settings </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <!-- Dashboard -->
          <li class="nav-item ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <!-- All Posts -->
          <li class="nav-item active">
            <a class="nav-link" href="allpost.html">
              <i class="fa fa-telegram"></i>
              <p> ALL POSTS </p>
            </a>
          </li>   
          <!-- CREATE Posts -->
          <li class="nav-item ">
            <a class="nav-link" href="./createpost.html">
              <i class="fa fa-plus"></i>
              <p> CREATE POST </p>
            </a>
          </li> 
          <!-- My Posts -->
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
              <i class="material-icons">content_paste</i>
              <p> MY POSTS
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="formsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="assignedposts.html">
                    <span class="sidebar-mini"> AP </span>
                    <span class="sidebar-normal"> ASSIGNED POSTS </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="uploadedposts.html">
                    <span class="sidebar-mini"> UP </span>
                    <span class="sidebar-normal"> Uploaded Posts </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!-- Members -->
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#menbers">
              <i class="fa fa-users"></i>
              <p> MEMBERS
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="menbers">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="./forms/regular.html">
                    <span class="sidebar-mini"> 1 </span>
                    <span class="sidebar-normal"> Member 1 </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./forms/extended.html">
                    <span class="sidebar-mini"> 2 </span>
                    <span class="sidebar-normal"> Member 2 </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./forms/validation.html">
                    <span class="sidebar-mini"> 3 </span>
                    <span class="sidebar-normal"> Member 3 </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./forms/wizard.html">
                    <span class="sidebar-mini"> 4 </span>
                    <span class="sidebar-normal"> Member 4 </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!--LOGOUT-->
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
              <i class="material-icons">logout</i>
              <p>LOGOUT   
            </div>
          </li>
        </div>


    <div class="main-panel row-fluid">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">ALL POST</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions
                      <b class="caret"></b>
                    </span>

                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#pablo">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#pablo">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#pablo">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#pablo">Another Notification</a>
                  <a class="dropdown-item" href="#pablo">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>    
    <br><br><br>

    <div class="container row-fluid">
      	<table  style = "width:100;" class="table">
  			<thead class="thead-dark row-fluid ">
    			<tr>
      				<th class='span12' scope="col">Query</th>
      				<th class='span6' scope="col">Date Created</th>
      				<th class='span6' scope="col">Created By</th>
      				<th class='span4' scope="col">Assigned To</th>
    			</tr>
  			</thead>
  		    <tbody>
    			<tr>
      				<th scope="row">What is meant by HTML?  
						<a class="btn btn-link pull-right" data-toggle="modal" data-target="#Details">Details ></a>

 						 <!-- The Modal -->
 						 <div class="modal" id="Details">
   							 <div class="modal-dialog">
      					<div class="modal-content">
      
       					 <!-- Modal Header -->
       					 <div class="modal-header">
          					<h4 class="modal-title">Query details</h4>
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
       					 </div>
        
        				<!-- Modal body -->
        					<div class="modal-body">
         				 query 
         				</br>
         				 posted by
         				 </br>
         				 views
         				 </br>
        				</div>
        
       						 <!-- Modal footer -->
        				<div class="modal-footer">
         				 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        				</div>
        
     					 </div>
    </div>
  </div>
  
</div></th>
      				<td>27-02-2020</td>
      				<td>Ram</td>
      				<td>Sanjay</td>
    			</tr>
 			</tbody>
		</table>
      </div>
      </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="../assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
<!-- Plugins for presentation and navigation  -->
<script src="../assets/assets-for-demo/js/modernizr.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="../assets/js/material-dashboard.js?v=2.0.1"></script>
<!-- Dashboard scripts -->
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../assets/js/plugins/jquery.validate.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../assets/js/plugins/jquery-jvectormap.js"></script>
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../assets/js/plugins/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="../assets/js/plugins/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="../assets/js/plugins/sweetalert2.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../assets/js/plugins/fullcalendar.min.js"></script>
<!-- demo init -->
<script src="../assets/js/plugins/demo.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

    //init wizard

    demo.initMaterialWizard();

    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

    demo.initCharts();

  });
</script>
<script type="text/javascript">
  $(document).ready(function() {

    demo.initVectorMap();
  });
</script>

</html>
