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
  

      <form method="post" action="../Main/checkbooking">
      <div class="row">
   <p>
         เลือกวันที่ต้องการตรวจสอบ
         </p>
         </div>
         <br />
         <div class="row">
         <div class="col-3">
           <label for="Date_Of_Birth"></label>
           <input type="date" name="date"/>
         </div>
         <div class="col-6"> 
           <button type="submit" class="btn btn-primary">ตรวจสอบ</button>
        </div>
         </div>
         </form>
         <div class="row">
         <table class="table table-dark">
  <thead>
    <tr>
  
      <th scope="col">รายการทันตกรรม</th>
      <th scope="col">เวลาที่จอง</th>
    </tr>
  </thead>
  <tbody>
         <?php
        
        foreach($DT as $row){
 ?>
     
     <tr>
       <th scope="row"><?php echo $row->dentalname ?></th>  
       <td><?php echo $row->time ?></td>    
     </tr>
    
     
  </tbody>
  <?php
         }
         ?>
</table>

</div>
       
       <p>

      </div>
    
  </div>
</div>
      </div>
   

    </body>
</html>