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
 
  <link href="../../assets/css/regis.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 
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
<body style="background-color: #013A6B;
  background-image: -webkit-linear-gradient(30deg, #013A6B 50%, #004E95 50%);
  min-height: 500px;">
 <!-- Navbar -->
 
   
    <br /> <br /> <br />
    <div class="box3">
    <?php
      foreach($data as $row){
    ?>
    <form  method="post" action="../Main/backup" >
      <div class="container">
        <tr>
          <td>
        
          <h1>ตรวจสอบข้อมูล</h1>
         
            <input type="text" hidden name="idDental"  value="<?php echo $row->idDental; ?>" </th>

            <input type="text" hidden name="idUser"  value="<?php echo $row->idUser; ?>" </th><br>
            

            <th><p >ประเภททันตกรรม </p>
              <input class="form-control" type="text" name="dentalname" value="<?php echo $row->dentalname; ?>" readonly/>
            </th><br>
            <th><p >วันที่จอง </p>
              <input class="form-control" type="text" name="date" value="<?php echo $row->date; ?>"  readonly/>
            </th><br>
            <th><p >เวลาที่จอง</p>
              <input class="form-control" type="text" name="time" value="<?php echo $row->time; ?>"  readonly/>
            </th><br>
            <th><p>ชื่อแพทย์ </p>
            <input class="form-control" type="text" name="nameDoctor" value="<?php echo $row->nameDoctor; ?>"  readonly/>
            
            </th><br>

            


            <th><p>สถานะ </p>
             
              <select class="form-control" id="status" style="font-size : 17px; color: #000000;" name="status" >
          
         
        <option id="status" name="status" value="สำเร็จแล้ว">สำเร็จแล้ว</option>
        <option id="status" name="status" value="ยกเลิกการจอง">ยกเลิกการจอง</option>
  
  
</select>
            </th><br>

          </td>
        </tr>
      </div>
      <?php
      }
      ?>
      <br>
      <center>
      <input type="submit" name="updates" class="btn btn-success" value="ยืนยัน"/>
      <a type="button" href="../Main/showadmin" class="btn btn-warning">ย้อนกลับ</a>
      </center><br><br>
    </form>             
    </div>
<!--script-->

</body>
</html>