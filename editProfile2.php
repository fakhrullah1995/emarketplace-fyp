<?php
session_start();
include_once 'conn.php';
$freeId = $_SESSION['freeId'];
$result3=mysqli_query($con,"SELECT * FROM freelancer WHERE freeId=".$_SESSION['freeId']);
//$result2=mysqli_query($con, "SELECT * FROM clientartwork WHERE clientID=".$_SESSION['clientID']);
$fetched_row=mysqli_fetch_array($result3);
//$fetched_row1=mysqli_fetch_array($result2);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PROMatcher | Freelancer</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="plugins/iCheck/all.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pro</b>Client</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo $fetched_row['freeProfile']?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $fetched_row['freeName']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo $fetched_row['freeProfile']?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $fetched_row['freeName']; ?> - <?php echo $fetched_row['freeInterest']; ?>
                  
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile2.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout2.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $fetched_row['freeProfile']?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $fetched_row['freeName']; ?> </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
   <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="dashboard2.php"><i class="fa fa-fw fa-bar-chart"></i> <span>Dashboard</span></a></li>
        <li ><a href="home2.php"><i class="fa fa-fw fa-home"></i> <span>Home</span></a></li>
        <li><a href="acceptreject2.php"><i class="fa fa-fw fa-retweet"></i> <span>Accept/Reject</span></a></li>
        <li><a href="project2.php"><i class="fa fa-fw fa-black-tie"></i> <span>Project</span></a></li>
        <li><a href="payment2.php"><i class="fa fa-fw fa-money"></i> <span>Get Payment</span></a></li>
        <li class="active"><a href="profile2.php"><i class="fa fa-fw fa-user"></i> <span>Profile</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar 
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>This page may be view by other user</small>
      </h1>
     
    </section>

 

    <!-- Main content -->
    <section class="content">

    <div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Posting Form</h3>
  
    <form action="editProfile2db.php" method="post" enctype="multipart/form-data">
      
<div class="form-group">
      <label  class="col-md-12 col-sm-2 control-label">Name</label>
      <div class="col-md-6 col-sm-5">
        <input class="form-control" id="freeName" name="freeName"  placeholder="Full name"  type="text"  required>
      
      </div></div>

      <div class="form-group">
              <label for="exampleInputFile" class="col-md-12 col-sm-2 control-label">Profile Picture</label>
              <div class="col-md-6 col-sm-5">
                <input type="file" id="freeProfile" name="freeProfile">
                <br>
              </div>
            </div>

              <div class="form-group">
              <label  class="col-md-12 col-sm-2  control-label">Phone Number:</label>
            <div class="col-md-6 col-sm-3">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </div>
                <input  class="form-control" id="freePhoneNumber" name="freePhoneNumber" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask type="text">
              </div>
              </div>
              <!-- /.input group -->
            </div>

            <!-- /.form group -->
          <div class="form-group">
            <label for="inputEmail3" class="col-md-12 col-sm-2 control-label">Income</label>
            <div class="col-md-6 col-sm-3">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fw fa-dollar"></i>
                  </div>
              <select class="form-control" id="freeIncome" name="freeIncome">
                <option value="No Income">No income</option>
                <option value="Below RM1000">Below RM1,000</option>
                <option value="Below RM2000"> RM1,000 - RM2,000 </option>
                <option value="Below RM3000">RM2,000 - RM3,000</option>
                <option value="Above RM3000">Above RM3,000</option>
              </select>
            </div>
          </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-md-12 col-sm-2 control-label">State</label>
            <div class="col-md-6 col-sm-3">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fw fa-map"></i>
                </div>
            <select class="form-control select2" style="width: 100%;" id="freeState" name="freeState">
              <option selected="selected">Choose your current location</option>
              <option value="Johor">Johor</option>
              <option value="Melaka">Melaka</option>
              <option value="Negeri Sembilan">Negeri Sembilan</option>
              <option value="Selangor">Selangor</option>
              <option value="Perak">Perak</option>
              <option value="Pahang">Pahang</option>
              <option value="Kedah">Kedah</option>
              <option value="Pulau Pinang">Pulau Pinang</option>
              <option value="Kedah">Kedah</option>
              <option value="Perlis">Perlis</option>
              <option value="Kelantan">Kelantan</option>
              <option value="Sabah">Sabah</option>
              <option value="Serawak">Serawak</option>
            </select>
          </div>
            </div>
          </div>


          <div class="form-group">
          <label  class="col-md-12 col-sm-2 control-label">Skills</label>
          <div class="col-md-6 col-sm-3">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-fw fa-wrench"></i>
                  </div>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select which you familiar" style="width: 100%;" id="freeSkillType" name="freeSkillType[]">
              <option value="HTML">HTML</option>
              <option value="CSS">CSS</option>
              <option value="PHP">PHP</option>
              <option value="Java">Java Script</option>

            </select>
          </div>
          </div>
          </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-md-12 col-sm-2 control-label">Experience</label>
                <div class="col-md-6 col-sm-3">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-fw fa-briefcase"></i>
                    </div>
                  <select class="form-control select2" style="width: 100%;" id="freeExp" name="freeExp">
                    <option selected="selected">Choose your Experience level</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Expert">Expert</option>
                  </select>
                </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-12 col-sm-2 control-label">Payment type</label>
                <div class="col-md-6 col-sm-3">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-fw fa-bank"></i>
                    </div>
                  <select class="form-control select2" multiple="multiple" data-placeholder="Select type of payment you would accept" style="width: 100%;" id="freepaymentType" name="freePaymentType[]">
                    <option value="Payment Per Hour">Payment Per Hour</option>
                    <option value="Payment Per Job">Payment Per Job</option>
                  </select>
                </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12 col-sm-2 control-label">Project you interested</label>
                <div class="col-md-6 col-sm-3">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-fw fa-trophy"></i>
                          </div>
                  <select class="form-control select2" multiple="multiple" data-placeholder="Select type of project you interested" style="width: 100%;" id="freeInterest" name="freeInterest[]">
                    <option value="Designer">Designer</option>
                    <option value="Web Application">Web Application Development</option>
                    <option value="Mobilr Application">Mobile Application Development</option>
                  </select>
                </div>
              </div>
              </div>

            <div class="form-group">
              <label  class="col-md-12 col-sm-2 control-label">Education Background</label>
              <div class="col-md-6 col-sm-3">
                <textarea class="form-control" rows="4" placeholder="Enter your education background" id="freeEdu" name="freeEdu"></textarea>
              </div>
            </div>

               <div class="form-group">
                <label for="inputEmail3" class="col-md-12 col-sm-2 control-label">Address</label>
                <div class="col-md-6 col-sm-3">
                  <textarea class="form-control" rows="4" placeholder="Enter your current address" id="freeAddress" name="freeAddress"></textarea>
                </div>
              </div>

             <div class="form-group">
                <label for="exampleInputFile" class="col-md-12 col-sm-2 control-label">Artwork</label>
                <div class="col-md-6 col-sm-3">
                <input type="file" id="freeArtwork1" name="freeArtwork1">
                <textarea class="form-control" rows="4" placeholder="Enter your education background"  id="freeArtworkDescription1" name="freeArtworkDescription1" ></textarea>
                <br>

                <input type="file" id="freeArtwork2" name="freeArtwork2">
               <textarea class="form-control" rows="4" placeholder="Enter your education background"  id="freeArtworkDescription2" name="freeArtworkDescription2" ></textarea>

                <br>
                <input type="file"  id="freeArtwork3" name="freeArtwork3">
              <textarea class="form-control" rows="4" placeholder="Enter your education background"  id="freeArtworkDescription3" name="freeArtworkDescription3" ></textarea> 

                <p class="help-block" class="col-sm-2 control-label">Please attach 3 best artwork represent your skill</p></div>
              </div>


    
        <div class="col-md-12 col-xs-4">
         <button type="submit" class="btn btn-success" name="submit">Edit</button>
        </div>  </div> 
        <!-- /.col -->
    
    </form>
  </div></div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Freelancer Account
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">ProClient Sdn Bhd</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
</div>>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
  $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      })

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
</script>
</body>
</html>