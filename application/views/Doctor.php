
<!--
=========================================================
 Paper Kit 2 - v2.2.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-kit-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-kit-2/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>

<html lang="en">

<head>
<title>
    Doctor
  </title>
</head>

<body class="profile-page sidebar-collapse">
<?php
	include_once "header.php";
    
?>
 
  <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('../../assets/img/headeradmin.png');">
    <div class="filter"></div>
  </div>
  <center> <h1>รายการจองคิวทันตกรรม</h1> </center>
     <br /> <br />
	 <div class="container">
     <table class="table table-striped table-dark">
  <thead>
    <tr>
	<th scope="col">ชื่อผู้จอง</th>
	<th scope="col">นามสกุลผู้จอง</th>
      <th scope="col">รายการทันตกรรม</th>
      <th scope="col">วันที่จอง</th>
      <th scope="col">เวลาที่จอง</th>
      
      
	 
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($DT as $row){
?>
    <tr>
    <th scope="row"><?php echo $row->name ?></th>
    <th scope="row"><?php echo $row->lname ?></th>
      <th scope="row"><?php echo $row->dentalname ?></th>
      <td><?php echo $row->date ?></td>
      <td><?php echo $row->time ?></td>
    
    </tr>
 <?php
  }
   ?>
</table>
</div>
  <footer class="footer    ">
    
  </footer>
  <!--   Core JS Files   -->
 
</body>

</html>
