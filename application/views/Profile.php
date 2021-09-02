
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
        Profile
    </title>
 
</head>

<body class="profile-page sidebar-collapse">
<?php
	include_once "header.php";
    
?>
  <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('../../assets/img/fabio-mangione.jpg');">
    <div class="filter"></div>
  </div>
  <div class="section profile-content">
    <div class="container">
      <div class="owner">
        <div class="avatar">
          <img src="../../assets/img/faces/face.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
        </div>
        <div class="name">
          <h4 class="title"><a class="button btn btn-primary" href="../Main/edit">เเก้ไขข้อมูลส่วนตัว</a>
            <br />
          </h4>
          <?php
  foreach($DT as $row){
  ?>
          <div class="row">
          <div class="col-6">
          <label style="font-size : 20px; font-family: 'Prompt', sans-serif; ">ชื่อ</label>
          <h4> <?=$row->name;?></h4>
          </div>
          <div class="col-6">
          <label style="font-size : 20px; font-family: 'Prompt', sans-serif; ">นามสกุล</label>
          <h4> <?=$row->lname;?></h4>
          </div>
          </div>
          <br />
            <hr/>
          <div class="row">
          <div class="col-6">
          <label style="font-size : 20px; font-family: 'Prompt', sans-serif; ">เบอร์โทรศัพท์</label>
          <h4> <?=$row->phone;?></h4>
          </div>
          <div class="col-6">
          <label style="font-size : 20px; font-family: 'Prompt', sans-serif; ">เพศ</label>
          <h4> <?=$row->gender;?></h4>
          </div>
          </div>
          <br />
            <hr/>

          <div class="row">
          <div class="col-6">
          <label style="font-size : 20px; font-family: 'Prompt', sans-serif; ">โรคประจำตัว</label>
          <h4> <?=$row->congenitaldisease;?></h4>
          </div>
          <div class="col-6">
          <label style="font-size : 20px; font-family: 'Prompt', sans-serif; ">ยาที่แพ้</label>
          <h4> <?=$row->allergic;?></h4>
          </div>
          </div>
          <br />
            <hr/>

          <div class="row">
          <div class="col-6">
          <label style="font-size : 20px; font-family: 'Prompt', sans-serif; ">กรุ๊ปเลือด</label>
          <h4> <?=$row->blood;?></h4>
          </div>
          <div class="col-6">
          <label style="font-size : 20px; font-family: 'Prompt', sans-serif; ">อีเมล</label>
          <h4> <?=$row->email;?></h4>
          </div>
          </div>
          <br />
            <hr/>

          <div class="row">
          <div class="col-6">
          <label style="font-size : 20px; font-family: 'Prompt', sans-serif; ">ผู้ติดต่อฉุกเฉิน</label>
          <h4> <?=$row->emergencycontract;?></h4>
          </div>
          <div class="col-6">
          <label style="font-size : 20px; font-family: 'Prompt', sans-serif; ">เบอร์ผู้ติดต่อฉุกเฉิน</label>
          <h4> <?=$row->emergencyphone;?></h4>
          </div>
          </div>
         <?php
  }
  ?>
  <footer class="footer    ">
    
  </footer>
 
</body>

</html>
