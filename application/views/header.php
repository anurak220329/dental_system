<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Prompt:wght@200&display=swap" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
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
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="../Main/index2"  style="font-size : 24px;  font-family: 'Prompt', sans-serif; " rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" >
          จองคิวทันตกรรม
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
        <?php 
        // All users list
        if( $this->session->userdata('level') == 1)  {
            ?>
              <li class="nav-item">
            <a href="../Main/showadmin" class="nav-link" style="font-size : 20px; font-family: 'Prompt', sans-serif; "><i class="nc-icon nc-book-bookmark"></i> รายการจองคิว</a>
          </li>
        <li class="nav-item">
            <a href="../Main/books" class="nav-link" style="font-size : 20px; font-family: 'Prompt', sans-serif; "><i class="nc-icon nc-zoom-split"></i> ตรวจสอบการจองคิว</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link"  style="font-size : 20px; font-family: 'Prompt', sans-serif; "><i class="nc-icon nc-single-02"></i><?php echo $this->session->userdata('name'); ?></a>
          </li>
          <?php
        }
        ?>
        <?php 
        // All users list
        if( $this->session->userdata('level') == 2)  {
            ?>
           
          <li class="nav-item">
            <a href="../Main/tests" class="nav-link" style="font-size : 20px; font-family: 'Prompt', sans-serif; "><i class="nc-icon nc-time-alarm"></i> จองคิว</a>
          </li>
          <li class="nav-item">
            <a href="../Main/showbook"  class="nav-link"  style="font-size : 20px; font-family: 'Prompt', sans-serif; "><i class="nc-icon nc-book-bookmark"></i> รายการจอง</a>
          </li>
          <li class="nav-item">
            <a href="../Main/showhistory" class="nav-link"  style="font-size : 20px; font-family: 'Prompt', sans-serif; "><i class="nc-icon nc-layout-11"></i> ประวัติการจอง</a>
          </li>
          <li class="nav-item">
            <a href="../Main/profile" class="nav-link"  style="font-size : 20px; font-family: 'Prompt', sans-serif; "><i class="nc-icon nc-single-02"></i><?php echo $this->session->userdata('name'); ?></a>
          </li>
          <?php
        } 
        ?>
          <?php 
        // All users list
        if( $this->session->userdata('level') == 3)  {
            ?>
          <li class="nav-item">
            <a href="../Main/profile" class="nav-link"  style="font-size : 20px; font-family: 'Prompt', sans-serif; "><i class="nc-icon nc-single-02"></i><?php echo $this->session->userdata('name'); ?></a>
          </li>
          <?php
        } 
        ?>
      
          <li class="nav-item">
            <a href="../Main/logout" class="nav-link"  style="font-size : 20px; font-family: 'Prompt', sans-serif; ">ออกจากระบบ </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>