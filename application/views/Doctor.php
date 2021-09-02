
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
  <style>
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

  </style>
  <script>
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
  </script>
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
     <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'ALL')">รายการทันตกรรมทั้งหมด</button>
  <button class="tablinks" onclick="openCity(event, 'TODAY')">รายการทันตกรรมวันนี้</button>

</div>
<!-- Tab content -->
<div id="ALL" class="tabcontent">
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

<div id="TODAY" class="tabcontent">
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
    <?php
        $today = date("20y-m-d");
        if( $row->date == $today ) {
           ?> 
    <th scope="row"><?php echo $row->name ?></th>
    <th scope="row"><?php echo $row->lname ?></th>
      <th scope="row"><?php echo $row->dentalname ?></th>
      <td><?php echo $row->date ?></td>
      <td><?php echo $row->time ?></td>
    <?php
        }
        ?>
    </tr>
 <?php
  }
   ?>
</table>
</div>

	
    
</div>

  <footer class="footer    ">
    
  </footer>
  <!--   Core JS Files   -->
 
</body>

</html>
