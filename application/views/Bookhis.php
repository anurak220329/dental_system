<html>
    <head>
    <!-- CSS only -->
    <title>
    History
  </title>
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
      <div class="box1" >
     <center> <h1>ประวัติการจองคิวทันตกรรม</h1> </center>
     <br /> <br />
     <table class="table table-dark">
  <thead>
    <tr>
  
      <th scope="col">รายการทันตกรรม</th>
      <th scope="col">วันที่จอง</th>
      <th scope="col">เวลาที่จอง</th>
      <th scope="col">ชื่อแพทย์</th>
      <th scope="col">สถานะการจอง</th>
    </tr>
  </thead>
  <tbody>
  <?php
       
       foreach($DT as $row){
?>
    <tr>
      <th scope="row"><?php echo $row->dentalname ?></th>
      <td><?php echo $row->date ?></td>
      <td><?php echo $row->time ?></td>
      <td><?php echo $row->idDoctor ?></td>
      <td><?php echo $row->status ?></td>
    </tr>
   
  </tbody>
  <?php
        }
        ?>
</table>



       
        
      </div>
      

    </body>
</html>