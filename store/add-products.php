<?php
  session_start();
  $_SESSION['message'] = '';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/fa/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/style-reg.css">

<style type="text/css">
  textarea{
    height: 4rem;
  }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="user">

    <header class="user__header">
        <h1 class="user__title">ADD PRODUCT</h1>
        <?php $_SESSION['message'] ?>        
    </header>
    
    <form class="form" action="add-prod.php" method="post" enctype="multipart/form-data"> 
        <div class="form__group">
            <input type="text" placeholder="Product Name" class="form__input" name="prod_name" />
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Price" class="form__input" name="prod_price" />
        </div>
        
        <div class="form__group">
            <!--<input type="text" placeholder="Category" class="form__input" name="prod_category" />-->

            <select name="prod_category" class="form__input">
              <option value="" disabled selected hidden>Category</option>
              <option value="Mens Apparel">Mens Apparel</option>
              <option value="Womens Apparel">Womens Apparel</option>
              <option value="Mens Shoes">Mens Shoes</option>
              <option value="Womens Shoes">Womens Shoes</option>
              <option value="Health and Personal Care">Health and Personal Care</option>
              <option value="Appliances">Appliances</option>
            </select>
        </div>
        <div class="form__group">
            <input style="
    height: 4rem; padding-top: 5px;padding-bottom: : 5px;" type="textarea" placeholder="Description" class="form__input" name="description" />
        </div>

        <div class="upload-btn-wrapper">
            <label for="file-upload" class="custom-file-upload">
              Product Image  <i class="fa fa-image"></i> 
            </label>
              <input id="file-upload" accept="images/products/**" type="file" name="prod_img" multiple/>
            
            <!-- <input type="text" placeholder="Store Location" class="form__input" name="store_location" /> -->
          </div>   
        <div class="form__group">          
          <button class="btn" type="submit" name="submit">ADD</button>
        </div>
         
        
    </form>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>

</body>
</html>
