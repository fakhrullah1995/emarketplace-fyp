<?php
//call file connection
include_once 'conn.php';
//check for any value posted
if(isset($_POST['submit'])){

  //declare variable for input data
  //TABLE clientPayment
  $clientCardNo=$_POST['clientCardNo'];
  $clientCardName=$_POST['clientCardName'];
  $clientCardExpired=$_POST['clientCardExpired'];
  $clientCCV=$_POST['clientCCV'];

  //insert query
  $query="UPDATE clientpayment SET clientCardNo='$clientCardNo', clientCardName='$clientCardName',clientCardExpired='$clientCardExpired', clientCCV='$clientCCV' ";

  $result=mysqli_query($con,$query);
  if($result)
  {
    echo "<script> alert('register success!');</script>";
    header ("Location: login1.php");
    exit();
  }
  else
  {
    echo "<script>alert ('failed to register, please try again');</script>";
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ProMatcher | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body style="background-color: #d5f4e6;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      ProMatcher
      <small>This information secure by third-party getaway only</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="register1-1.html">
          <i class="fa fa-dashboard"></i> Register</a>
      </li>
      <li>
        <a href="advance register1a.html">Advance Register 1</a>
      
    </ol>
  </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Register Payment Form</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action=register-payment1.php method="post">
        <div class="form-group">
          <label for="clientCardNo" class="col-md-12 col-sm-2 control-label">Card Number:</label>
          <div class="col-md-6 col-sm-3">
            <div class="input-group">
              <div class="input-group-addon">
                <i class=" fa fa-fw fa-credit-card"></i>
              </div>
              <input id="clientCardNo" name="clientCardNo" type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
            </div>
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form group -->
              <div class="form-group">
                <label for="clientCardName" class="col-md-12 col-sm-2 control-label">Name on Card</label>
              
                <div class="col-md-6 col-sm-3">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class=" fa fa-fw fa-user-plus"></i>
                      </div>
                  <input id="clientCardName" name="clientCardName" type="text" class="form-control" >
                </div>
                </div>
              </div>
  <!-- /.form group -->
                <div class="box-body">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label for="clientCardExpired" class="col-md-12 col-sm-2 control-label">Expired Date</label>
                <div class="col-md-6 col-sm-3">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input id="clientCardExpired" name="clientCardExpired" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div></div>
                    <!-- /.input group -->
                  </div>
  <!-- /.form group -->
    <div class="form-group">
      <label for="clientCCV" class="col-md-12 col-sm-2 control-label">CCV /CVV</label>
    
      <div class="col-md-6 col-sm-3">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-fw fa-cc-diners-club"></i>
          </div>
          <input id="clientCCV" name="clientCCV" type="text" class="form-control" >
        </div>
      </div>
    </div>
    </div>
      <!-- /.form group -->
         
          <!-- /.box-body -->
          <!-- footer -->
       <div class="box-footer">

               <div class="col-md-12 col-xs-4">
         <button id="submit" name="submit" class="btn btn-success" href="login1.php">Sign Up</button>
        </div>
          </div>
          <!-- /.box-footer -->
        
        </form>
      
          </div>
          <!-- /.box -->

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
<!-- Page script -->

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
