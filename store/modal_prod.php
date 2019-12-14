 <?php

include 'update.php';

$id = $_POST['id'];

$sql = "SELECT * FROM products WHERE prod_id = '$id'";
$sq_stmnt = mysqli_query($con,$sql);
$nl = mysqli_fetch_assoc($sq_stmnt);

?>



<form class="modal-content animate" action="update.php" method="post">    
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h1 style="text-align:center">Update Product</h1>
    </div>

    <div class="container" >
      <input type="hidden" name="prod_id" value="<?php echo $nl['prod_id']?>">
      <input type="text" class=" " placeholder="Product Name" name="prod_name" required="" value="<?php echo $nl['prod_name']?>" style="width: 90%; padding: 12px 20px; margin: 8px 26px; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; font-size:16px;" >
      <input type="text" class=" " placeholder="Price" name="prod_price" required="" value="<?php echo $nl['prod_price']?>" style="width: 90%; padding: 12px 20px; margin: 8px 26px; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; font-size:16px;" >   
      <input type="text" class=" " placeholder="Category" name="prod_category" required="" value="<?php echo $nl['prod_category']?>" style="width: 90%; padding: 12px 20px; margin: 8px 26px; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; font-size:16px;" >       
      <button style="
    width: 90%;
    margin-left: 1.7rem;" type="submit" name="submit">Submit</button>
      
    </div>  
  </form>
