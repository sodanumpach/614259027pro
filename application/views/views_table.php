<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
body {
  background-image: url('https://a-static.besthdwallpaper.com/turquoise-sea-at-sunset-wallpaper-2048x1536-36499_26.jpg');
}
</style>
<body>
    
    <div class="container">
    <br></br>
    <br></br>
    
    <h1>ตารางรถไฟ</h1>
    <br></br>
    <table class="table table-dark">
  <tr>
  <th></th>
  <th></th><th></th>
   
    <th>ต้นทาง</th>
    <th></th>
    <th>ห้วยราช</th>
    <th></th>
    <th>ปลายทาง</th>
   
    
  </tr>
  <tr><th></th>
     <th></th>
     <th>ขบวน</th>
    <th>สถานี</th>
    <th>เวลาออก</th>
    <th>ถึง</th>
    <th>ออก</th>
    <th>สถานี</th>
    <th>ถึงเวลา</th>
    <th>หมายเหตุ</th>
    <th></th>
  </tr>
<?php
        foreach($tm as $row){
?>
<tr>
            <td></td>
            <td></td>
    <td><center><?=$row->id;?></center></td>
    <td><center><?=$row->d_station;?></center></td>
    <td><center><?=$row->d_timeout; ?></center></td>
    <td><center><?=$row->c_timeto; ?></center></td>
    <td><center><?=$row->c_timeout; ?></center></td>
    <td><center><?=$row->t_station; ?></center></td>
    <td><center><?=$row->t_timeto; ?></center></td>
    <td><center><?=$row->train; ?></center></td>
    <td></td>
  </tr>
  <?php
         }

    ?>
    </table>
    <a class="btn btn-primary" href="../Welcome/addData" role="button">เพิ่มข้อมูล</a>
    
    </div>
  
</body>
</html>