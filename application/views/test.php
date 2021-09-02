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
<p>
          เลือกวันที่ต้องการจองคิว 
          <form method="post" action="../Main/tests">
          <div class="input" >
        
            <label for="Date_Of_Birth"></label>
            <input type="date" name="date"   onchange="javascript: if(this.value != '0') this.form.submit(); else alert('hello');" />
           
          
          </div>
        </p>
        </form>
          <?php
        
        foreach($DT as $row){
 ?>
          
          <div class="input" >
        
            <label for="Date_Of_Birth"></label>
            <input type="date" name="date"  value="<?php echo $row->date; ?>" />
            <input type="text" name="date"  value="<?php echo $row->time; ?>" />
          
          </div>
        </p>
        </form>
        <?php
         }
         ?>
        
         <?php
        
        foreach($DTS as $row){
 ?>
       <div class="input">
           <br /> <br /> <br />
           <b> <div class="radio-inline">
         <?php
        
        if( $row->time != '08:00:00')  {
           ?> 
  <label><input type="radio" name="time" value="08:00" checked>08:00</label>
  <?php
        } 
        ?>


          <?php
        if( $row->time != '08:30:00')  {
           ?> 
  <label><input type="radio" name="time" value="08:30" checked>08:30</label>
  <?php
        } 
        ?>

  <?php
        if( $row->time != '09:00:00')  {
           ?> 
  <label><input type="radio" name="time" value="09:00" checked>09:00</label>
  <?php
        } 
        ?>

  <?php
        if( $row->time != '09:30:00')  {
           ?> 
  <label><input type="radio" name="time" value="09:30" checked>09:30</label>
  <?php
        } 
        ?>
  <?php
        if( $row->time != '10:00:00')  {
           ?> 
  <label><input type="radio" name="time" value="10:00" checked>10:00</label>
  <?php
        } 
        ?>

  <?php
        if( $row->time != '10:30:00')  {
           ?> 
  <label><input type="radio" name="time" value="10:30" checked>10:30</label>
  <?php
        } 
        ?>
  <?php
        if( $row->time != '11:00:00')  {
           ?> 
  <label><input type="radio" name="time" value="11:00" checked>11:00</label>
  <?php
        } 
        ?>
  <?php
        if( $row->time != '11:30:00')  {
           ?> 
  <label><input type="radio" name="time" value="11:30" checked>11:30</label>
  <?php
        } 
        ?>
 
    
  <?php
        if( $row->time != '13:00:00')  {
           ?> 
  <label><input type="radio" name="time" value="13:00" checked>13:00</label>
  <?php
        } 
        ?>
  <?php
        if( $row->time != '13:30:00')  {
           ?> 
  <label><input type="radio" name="time" value="13:30" checked>13:30</label>
  <?php
        } 
        ?>

  <?php
        if( $row->time != '14:00:00')  {
           ?> 
  <label><input type="radio" name="time" value="14:00" checked>14:00</label>
  <?php
        } 
        ?>

  <?php
        if( $row->time != '14:30:00')  {
           ?> 
  <label><input type="radio" name="time" value="14:30" checked>14:30</label>
  <?php
        } 
        ?>


<?php
        if( $row->time != '15:00:00')  {
           ?> 
  <label><input type="radio" name="time" value="15:00" checked>15:00</label>
  <?php
        } 
        ?>

  <?php
        if( $row->time != '15:30:00')  {
           ?> 
  <label><input type="radio" name="time" value="15:30" checked>15:30</label>
  <?php
        } 
        ?>

  <?php
        if( $row->time != '16:00:00')  {
           ?> 
  <label><input type="radio" name="time" value="16:00" checked>16:00</label>
  <?php
        } 
        ?>

  <?php
        if( $row->time != '16:30:00')  {
           ?> 
  <label><input type="radio" name="time" value="16:30" checked>16:30</label>
  <?php
        } 
        ?>
</div></b>
</div>
    
  <?php
         }
         ?>

        
    </body>
    <script>
    function DoSubmit(sel)
{
     if(sel.val()!='0') this.form.submit();
}
</script>
</html>