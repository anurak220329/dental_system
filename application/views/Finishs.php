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
   
<h1>รายการเลือกทันตแพทย์</h1>
<form  method="post" action="../Main/testt" >
<th><p >ประเภททันตกรรม </p>
            <select class="form-select" name="dentalname" aria-label="Default select example" onchange="javascript: if(this.value != '0') this.form.submit(); else alert('hello');">
  <option  value="อุดฟัน" name="dentalname">อุดฟัน</option>
  <option value="จัดฟัน" name="dentalname">จัดฟัน</option>
  <option value="ฟอกสีฟัน" name="dentalname">ฟอกสีฟัน</option>
  <option value="ขัดหินปูน" name="dentalname">ขัดหินปูน</option>
  <option selected  value="ขัดหินปูน" name="dentalname"></option>
</select>
  </form>
    <form  method="post" action="../Main/testtt" >
      <div class="container">
        <tr>
          <td>
        
          <?php
      foreach($data as $row){
    ?>
         
          <input type="text" name="idDental"  value="<?php echo $row->idDental; ?>" hidden/> <br>
        <br>
         <?php
      }
      ?>
            <th><p>แพทย์ </p>
         <div class="form-group">
   
   <select multiple class="form-control" id="nameDoctor" name="nameDoctor">
   <?php
      foreach($data as $row){
    ?>
    
     <option id="nameDoctor" name="nameDoctor"  value="<?php echo $row->named; ?>"><?php echo $row->named; ?>
       </option>
       <?php
      }
      ?>
   </select>
   
   <?php
      foreach($data as $row){
    ?>
    
    <div class="input">
   <input id="nameDoctor" name="namelist"  value="<?php echo $row->namelist; ?>" hidden />
   </div>
   <?php
      }
      ?>
 </div>
           
          
           
          
            </th><br>

            


           
            

          </td>
        </tr>
      </div>
     
      <br>
      <center>
      <input type="submit" name="updat" class="btn btn-success" value="ยืนยันการจอง"/>
     
      </center><br><br>
    </form>             
    </div>
<!--script-->

</body>
</html>