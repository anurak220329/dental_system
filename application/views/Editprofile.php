<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Editprofile
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
 
   
    <br /> <br /> <br />
             
    <?php
      foreach($DT as $row){
    ?>
    <form  method="post" action="../Main/edit_profile">
      <div class="container">
        <tr>
          <td>
          <br></br> <br></br> 
          <h1>อัพเดทข้อมูลส่วนตัว</h1>
          <br /> <br /> <br />
            <input type="text" hidden name="idUser"  value="<?php echo $row->idUser; ?>" </th><br>

           

            <th><a class="title">ชื่อ </a>
              <input class="form-control" type="text" name="name" value="<?php echo $row->name; ?>" />
            </th><br>
            <th><a class="title">นามสกุล </a>
              <input class="form-control" type="text" name="lname" value="<?php echo $row->lname; ?>" />
            </th><br>
            <th><a class="title">เบอร์โทรศัพท์</a>
              <input class="form-control" type="text" name="phone" value="<?php echo $row->phone; ?>"  />
            </th><br>
            <th><a class="title">เพศ</a>
              <input class="form-control" type="text" name="gender" value="<?php echo $row->gender; ?>"  />
            </th><br>
            <th><a class="title">โรคประจำตัว</a>
              <input class="form-control" type="text" name="congenitaldisease" value="<?php echo $row->congenitaldisease; ?>"  />
            </th><br>
            <th><a class="title">ยาที่แพ้</a>
              <input class="form-control" type="text" name="allergic" value="<?php echo $row->allergic; ?>"  />
            </th><br>
            <th><a class="title">กรุ๊ปเลือด</a>
              <input class="form-control" type="text" name="blood" value="<?php echo $row->blood; ?>"  />
            </th><br>
            <th><a class="title">อีเมล</a>
              <input class="form-control" type="text" name="email" value="<?php echo $row->email; ?>"  />
            </th><br>
            <th><a class="title">ผู้ติดต่อฉุกเฉิน</a>
              <input class="form-control" type="text" name="emergencycontract" value="<?php echo $row->emergencycontract; ?>"  />
            </th><br>
            <th><a class="title">เบอร์ผู้ติดต่อแุกเฉิน</a>
              <input class="form-control" type="text" name="emergencyphone" value="<?php echo $row->emergencyphone; ?>"  />
            </th><br>

            


            

          </td>
        </tr>
      </div>
      <?php
      }
      ?>
      <br>
      <center>
      <input type="submit"  class="btn btn-success" value="อัพเดท"/>
      <a type="button" href="../Main/profile" class="btn btn-warning">ย้อนกลับ</a>
      </center><br><br>
    </form>             
  
<!--script-->

</body>
</html>