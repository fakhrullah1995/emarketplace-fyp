
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ProMatcher | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     
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
        <a href="register1-1.php">
          <i class="fa fa-dashboard"></i> Register</a>
      </li>
      <li>
        <a href="advance register1a.php">Advance Register 1</a>

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
        <form action="advance-register2adb.php" method="post" enctype="multipart/form-data">
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
            <label class="col-md-12 col-sm-2 control-label">Income</label>
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
            <label class="col-md-12 col-sm-2 control-label">State</label>
            <div class="col-md-6 col-sm-3">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-fw fa-map"></i>
                </div>
            <select class="form-control select2" style="width: 100%;" id="freeState" name="freeState">
              <option selected="selected">Choose your current location</option>
              <option value="Johor">Johor</option>
              <option value="Melaka">Melaka</option>
              <option value="Negeri9">Negeri Sembilan</option>
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
          <label for="inputEmail3" class="col-md-12 col-sm-2 control-label">Skills</label>
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
                <label class="col-md-12 col-sm-2 control-label">Experience</label>
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
                  <select class="form-control select2" multiple="multiple" data-placeholder="Select type of payment you would accept" style="width: 100%;" id="freePaymentType" name="freePaymentType[]">
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
              <label for="inputEmail3" class="col-md-12 col-sm-2 control-label">Education Background</label>
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
              <textarea class="form-control" rows="4" placeholder="Enter your education background"  id="freeArtworkDescription" name="freeArtworkDescription3" ></textarea> 

                <p class="help-block" class="col-sm-2 control-label">Please attach 3 best artwork represent your skill</p></div>
              </div>


          <div class="box-footer">

               <div class="col-md-12 col-xs-4">
         <button id="submit" name="submit" class="btn btn-success" href="register-payment2.php">Sign Up</button>
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
<script>  $(document).ready(function(){
    $('#submit').click(function(){
        var image_name=$('#clientArtwork').val();
        if(image_name==''){
            alert("Please Select Image);
            return false
        }
        else{
            var extension =$('#clientArtwork).val().split('.').pop().tolowerCase();
            if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])==-1){
                alert('Invalid Image File');
                $('#clientArtwork').val('');
                return false;
            }
        }
    });
});
</script>

</body>
</html>
