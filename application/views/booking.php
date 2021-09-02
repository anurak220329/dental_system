<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Update
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
  <script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../../assets/js/plugins/moment.min.js"></script>
  <script src="../../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
</head>
<body>
 <!-- Navbar -->
 
 <?php
	include_once "header.php";
    
?>
    <br /> <br /> <br />
             
    <?php
      foreach($data as $row){
    ?>
    <form  method="post" action="../Main/choose" >
      <div class="container">
        <tr>
          <td>
          <br></br> <br></br> 
          <h1>ตรวจสอบข้อมูลการจอง</h1>
          <br /> <br /> <br />
            <input type="text" hidden name="Std_ID"  value="<?php echo $row->idDental; ?>" </th><br>

           

            <th><a class="title">ประเภททันตกรรม </a>
              <input class="form-control" type="text" name="Company_Tel" value="<?php echo $row->dentalname; ?>" readonly/>
            </th><br>
            <th><a class="title">วันที่จอง </a>
              <input class="form-control" type="text" name="date" value="<?php echo $row->date; ?>"  readonly/>
            </th><br>
            <th><a class="title">เวลาที่จอง</a>
              <input class="form-control" type="text" name="time" value="<?php echo $row->time; ?>"  readonly/>
            </th><br>
            <th><a class="title">รายชื่อแพทย์ </a>

            <input class="form-control" type="text" name="Company_Tel" value="<?php echo $row->nameDoctor; ?>"  readonly/>
 


            </th><br>

            


          

          </td>
        </tr>
      </div>
      <?php
      }
      ?>
      <br>
      <center>
      <input type="submit" class="btn btn-success" value="เลือกทันตแพทย์"/>
      
      </center><br><br>
    </form>             
  
<!--script-->

</body>
</html>