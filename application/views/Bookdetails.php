<html>
    <head>
    <title>
    Bookdetail
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
      <div class="box1" >
     <center> <h1>รายการจองคิวทันตกรรม</h1> </center>
     <br /> <br />
     <table class="table table-striped table-dark">
  <thead>
    <tr>
    <th scope="col">รหัสการจอง</th>
      
      <th scope="col">วันที่จอง</th>
      <th scope="col">เวลาที่จอง</th>
      <th scope="col">เลือกรายการทันตกรรมและแพทย์</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
       
       foreach($DT as $row){

    
    echo "<tr>";
  

  echo "<td>".$row->idDental."</td>";
  echo "<td>".$row->date."</td>";
  echo "<td>".$row->time."</td>";
  
 
  
  echo "<td><a type='button' class='btn btn-success btn-round' href='testt?idDental=".$row->idDental."'>เลือก</a></td>";
  echo "</tr>";
}
?>
  </tbody>
  
       
</table>



       
        
      </div>
      

    </body>
</html>