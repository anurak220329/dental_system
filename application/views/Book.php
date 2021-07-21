<html>
    <head>
    <title>
    Book
  </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../../assets/css/regis.css" rel="stylesheet" />
</head>
    <body style="background-color: #013A6B;
  background-image: -webkit-linear-gradient(30deg, #013A6B 50%, #004E95 50%);
  min-height: 500px;">
    <?php
	include_once "header.php";
    
?>
 
   
    <form method="post" action="../Main/booking">
    <br></br><br></br><br></br>
      <div class="box3">
     <center> <h1>จองคิวทันตกรรม</h1> </center>
     <br /> <br />
            

        <p>
          เลือกประเภททันตกรรม
          <div class="input">
         <select class="form-select form-select-lg " name="dentalname" style="width: 42% ; "   >
  <option name="dentalname" value="จัดฟัน">จัดฟัน</option>
  <option name="dentalname" value="อุดฟัน">อุดฟัน</option>
  <option name="dentalname" value="ขูดหินปูน">ขูดหินปูน</option>
  <option name="dentalname" value="ฝอกสีฟัน">ฟอกสีฟัน</option>
</select>
          </div>
        </p><br><br>
        <p>
          เลือกวันที่ต้องการจองคิว 
          <div class="input">
            <label for="Date_Of_Birth"></label>
            <input type="date" name="date"/>
          </div>
        </p><br><br><br><br><br>
        <p>
          เลือกเวลาที่ต้องการจองคิว 
          </p>
          <div class="input">
           <br /> <br /> <br />
           <b> <div class="radio-inline">
  <label><input type="radio" name="time" value="08:00" checked>08:00</label>
  <label><input type="radio" name="time" value="08:30" checked>08:30</label>
  <label><input type="radio" name="time" value="09:00" checked>09:00</label>
  <label><input type="radio" name="time" value="09:30" checked>09:30</label>
  <label><input type="radio" name="time" value="10:00" checked>10:00</label>
  <label><input type="radio" name="time" value="10:30" checked>10:30</label>
  <label><input type="radio" name="time" value="11:00" checked>11:00</label>
  <label><input type="radio" name="time" value="11:30" checked>11:30</label>
  <label><input type="radio" name="time" value="12:00" checked>12:00</label>
  <label><input type="radio" name="time" value="12:30" checked>12:30</label>
  <label><input type="radio" name="time" value="13:00" checked>13:00</label>
  <label><input type="radio" name="time" value="13:30" checked>13:30</label>
  <label><input type="radio" name="time" value="14:00" checked>14:00</label>
  <label><input type="radio" name="time" value="14:30" checked>14:30</label>
  <label><input type="radio" name="time" value="15:00" checked>15:00</label>
  <label><input type="radio" name="time" value="15:30" checked>15:30</label>
  <label><input type="radio" name="time" value="16:00" checked>16:00</label>
  <label><input type="radio" name="time" value="16:30" checked>16:30</label>
</div></b>
</div>

        <br><br>
        <input type="text" name="idUser" value="<?php echo $this->session->userdata('idUser'); ?>" hidden/>
        <br></br>
      <center>  <button type="submit" class="btn btn-primary btn-round btn-lg">ยืนยันการจองคิว</button></center>
      </div>
      

    </body>
</html>