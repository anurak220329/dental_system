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
 <br></br><br></br><br></br>
 <div class="box3">
          <h1>ตรวจสอบการจองคิว</h1>
<br>
      <form method="post" action="../Main/checkbooking">
      <div class="row">
   <p>
         กรอกรหัสการจองคิวทันตกรรม
         </p>
         </div>
         <br />
         <div class="row">
         <div class="col-3">
           <label for="Date_Of_Birth"></label>
           <input type="text" name="idDental" />
         </div>
         <div class="col-6"> 
           <button type="submit" class="btn btn-primary">ค้นหา</button>
        </div>
         </div>
         </form>
         <div class="row">
         <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">รหัสทันตกรรม</th>
      <th scope="col">รายการทันตกรรม</th>
      <th scope="col">วันที่จอง</th>
      <th scope="col">เวลาที่จอง</th>
      <th scope="col">ชื่อแพทย์</th>
      <th scope="col">สถานะ</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
        
     <?php
       
       foreach($DT as $row){

    
    echo "<tr>";
  

  echo "<td>".$row->idDental."</td>";
  echo "<td>".$row->dentalname."</td>";
  echo "<td>".$row->date."</td>";
  echo "<td>".$row->time."</td>";
  echo "<td>".$row->nameDoctor."</td>";
  echo "<td>".$row->status."</td>";
  echo "<td><a type='button' 
  style ='padding-top: 8px; margin-top: 3px;'
 class='btn btn-warning btn-round' href='finishcheck?idDental=".$row->idDental."'>แก้ไข</a></td>";
  echo "</tr>";
}
?>
     
  </tbody>

</table>

</div>
       
       <p>

      </div>
    
  </div>
</div>
      </div>
   

    </body>
</html>