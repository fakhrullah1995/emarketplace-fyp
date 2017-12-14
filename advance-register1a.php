<?php
//call file connection
include_once 'conn.php';
//check for any value posted
if(isset($_POST['submit'])){
  //declare variable for input data

  //TABLE CLIENT
  $ClientPhoneNumber=$_POST['ClientPhoneNumber'];
  $ClientIncome=$_POST['ClientIncome'];
  $ClientState=$_POST['ClientState'];
  $clientEx=$_POST['clientEx'];
  $clientEdu=$_POST['clientEdu'];
  $clientAddress=$_POST['clientAddress'];
  //TABLE PAYMENT 
  $clientPayType=$_POST['clientPayType'];
  //TABLE PROJECT  
  $clientInterested=$_POST['clientInterested'];
  //TABLE SKILL
  $clientSkillType=$_POST['clientSkillType'];
  //TABLE ARTWORK
  $clientArtwork=$_POST['clientArtwokr'];
 
 
  //insert query1
  $query1="INSERT INTO client (ClientPhoneNumber, ClientIncome, ClientState, clientEx, clientEdu, clientAddress ) VALUES ('$ClientPhoneNumber', '$ClientIncome','$ClientState', '$clientEx','$clientEdu', '$clientAddress')";
  //insert query2
  $query2="INSERT INTO clientpayment(paymentType) values ('$paymentType')";
  //insert query3
  $query3="INSERT INTO interestproject(projectType) values('$projectType')";
  //insert query4
  $query4="INSERT INTO clientskill (clientSkillType) values ('$clientSkillType')";
  //insert query5
  $query5="INSERT INTO clientartwork (clientArtwork, clientArtworkDescription) values ('$clientArtwork','$clientArtworkDescription')";

      $result1 = mysqli_query($con,$query1);
      $result2 = mysqli_query($con,$query2);
      $result3 = mysqli_query($con,$query3);
      $result4 = mysqli_query($con,$query4);
      $result5 = mysqli_query($con,$query5);

      if($result1&&$result2&&$result3&&$result4&&$result5)
      {
        echo "<script>alert ('register success!');</script>";
        header ("Location: register-payment1.php");
        exit();
      }
      else
      {
        echo "<script>alert ('failed to register. please try again!');</script>";
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
      <small>Some of this information will display to other user</small>
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
   
        <!-- left column -->
        
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Advance Register Form</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="advance-register1a.php" method="post">  
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Phone Number:</label>
            <div class="col-sm-3">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </div>
                <input  class="form-control" id="clientPhoneNumber" name="clientPhoneNumber" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask type="text">
              </div>
              </div>
              <!-- /.input group -->
            </div>
            
            <!-- /.form group -->
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Income</label>
            <div class="col-sm-3">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fw fa-dollar"></i>
                  </div>
              <select class="form-control" id="ClientIncome" name="ClientIncome">
                <option value="noIncome">No income</option>
                <option value="below1000">Below RM1,000</option>
                <option value="below2000"> RM1,000 - RM2,000 </option>
                <option value="below3000">RM2,000 - RM3,000</option>
                <option value="above3000">Above RM3,000</option>
              </select>
            </div>
          </div>
          </div>
          
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">State</label>
            <div class="col-sm-3">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fw fa-map"></i>
                </div>
            <select class="form-control select2" style="width: 100%;" id="ClientState" name="ClientState">
              <option selected="selected">Choose your current location</option>
              <option value="johor">Johor</option>
              <option value="melaka">Melaka</option>
              <option value="negeri9">Negeri Sembilan</option>
              <option value="selangor">Selangor</option>
              <option value="perak">Perak</option>
              <option value="pahang">Pahang</option>
              <option value="kedah">Kedah</option>
              <option value="pulauPinang">Pulau Pinang</option>
              <option value="kedah">Kedah</option>
              <option value="perlis">Perlis</option>
              <option value="kelantan">Kelantan</option>
              <option value="sabah">Sabah</option>
              <option value="serawak">Serawak</option>
            </select>
          </div>
            </div>
          </div>
          

          <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Skills</label>
          <div class="col-sm-3">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-fw fa-wrench"></i>
                  </div>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select which you familiar" style="width: 100%;" id="clientSkillType" name="clientSkillType">
              <option value="HTML">HTML</option>
              <option value="CSS">CSS</option>
              <option value="PHP">PHP</option>
              <option value="Java">Java Script</option>
           
            </select>
          </div>
          </div>
          </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Experience</label>
                <div class="col-sm-3">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-fw fa-briefcase"></i>
                    </div>
                  <select class="form-control select2" style="width: 100%;" id="clientEx" name="clientEx">
                    <option selected="selected">Choose your Experience level</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="expert">Expert</option>
                  </select>
                </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Payment type</label>
                <div class="col-sm-3">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-fw fa-bank"></i>
                    </div>
                  <select class="form-control select2" multiple="multiple" data-placeholder="Select type of payment you would accept" style="width: 100%;" id="paymentType" name="paymentType">
                    <option value="payperhour">Payment Per Hour</option>
                    <option value="payperjob">Payment Per Job</option>
                  </select>
                </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Project you interested</label>
                <div class="col-sm-3">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-fw fa-trophy"></i>
                          </div>
                  <select class="form-control select2" multiple="multiple" data-placeholder="Select type of project you interested" style="width: 100%;" id="projectType" name="projectType">
                    <option value="designer">Designer</option>
                    <option value="webApps">Web Application Development</option>
                    <option value="mobileApps">Mobile Application Development</option>
                  </select>
                </div>
              </div>
              </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Education Background</label>
              <div class="col-sm-3">
                <textarea class="form-control" rows="4" placeholder="Enter your education background" id="clientEdu" name="clientEdu"></textarea>
              </div>
            </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-3">
                  <textarea class="form-control" rows="4" placeholder="Enter your current address" id="clientAddress" name="clientAddress"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputFile" class="col-sm-2 control-label">Artwork</label>
                <div class="col-sm-3">
                <input type="file" id="clientArtwork" name="clientArtwork">
                <textarea class="form-control" rows="4" placeholder="Enter your education background"  id="clientArtworkDescription" name="clientArtworkDescription" ></textarea>
                <br>
                
                <input type="file" id="clientArtwork" name="clientArtwork">
               <textarea class="form-control" rows="4" placeholder="Enter your education background"  id="clientArtworkDescription" name="clientArtworkDescription" ></textarea>

                <br>
                <input type="file"  id="clientArtwork" name="clientArtwork">
              <textarea class="form-control" rows="4" placeholder="Enter your education background"  id="clientArtworkDescription" name="clientArtworkDescription" ></textarea>  
              
                <p class="help-block" class="col-sm-2 control-label">Please attach 3 best artwork represent your skill</p></div>
              </div>
              
        
          <div class="box-footer">
        
               <div class="col-xs-4">
         <button id="submit" name="submit" class="btn btn-success" href="advance register1a.html">Sign Up</button>
        </div>
          </div>
          
        
        </form>
      
          </div>
        </section>

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
