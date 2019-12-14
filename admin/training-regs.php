<?php 
session_start(); 
include '../config.php';
$con=mysqli_connect("localhost","root","root","sad");
$sql="SELECT * FROM trainapps";
$result=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/fawesome/all.css">
  <link rel="stylesheet" type="text/css" href="../css/style-index.css">
  <link rel="stylesheet" type="text/css" href="../css/footer.css">  
  <link rel="stylesheet" type="text/css" href="../css/nav.css">  
  <link rel="stylesheet" type="text/css" href="../admin/style.css">  
<link rel="stylesheet" type="text/css" href="../css/modal.css">


  <style type="text/css">
    table{
      text-align: center;
    }
  </style>

</head>
<body>

<?php include ("header.php");  ?>
<br><br><br>
<div class="container">
  <br><br><br>
   <table id="users" style="text-align: center; margin:0 auto;">
    <thead>
      <tr>
        <th>Training</th>
        <th>Location</th>  
        <th>Date</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($rows=mysqli_fetch_array($result)) { ?>
      <tr>
        <td><?php echo $rows['train']; ?></td>
        <td><?php echo $rows['location']; ?></td>
        <td><?php echo $rows['date']; ?></td>
        <td><?php echo $rows['time']; ?></td>  
        <td><?php echo '<a href="register.php"><button>Register</button></a>'; ?></td>
      </tr>
      <?php
      }

        mysqli_close($con);
      ?>
    </tbody>
  </table>


</div>


<br>
<script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }

    function show(){
    var Digital=new Date()
    var hours=Digital.getHours()
    var minutes=Digital.getMinutes()
    var seconds=Digital.getSeconds()
    var dn="AM" 
    if (hours>12){
    dn="PM"
    hours=hours-12
    }
    if (hours==0)
    hours=12
    if (minutes<=9)
    minutes="0"+minutes
    if (seconds<=9)
    seconds="0"+seconds
    document.Tick.Clock.value=hours+":"+minutes+":"
    +seconds+" "+dn
    setTimeout("show()",1000)
    }
    show()

</script>




<?php include("footer.php"); ?>

</body>
</html>