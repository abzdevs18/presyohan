<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$email = $_POST["email"];
$pw = $_POST["pw"];
$flag = 'true';
//$query = $mysqli->query("SELECT email, pw from users");

$result = $mysqli->query('SELECT user_id,email,pw,fname,type from users order by user_id asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $email && $obj->pw === $pw && $obj->type === "user") {

      $_SESSION['email'] = $email;
      $_SESSION['type'] = $obj->type;
      $_SESSION['user_id'] = $obj->user_id;
      $_SESSION['fname'] = $obj->fname;
      $_SESSION['usermail'] = $email;
      header("location:user/products.php");
    } 
    elseif($obj->email === $email && $obj->pw === $pw && $obj->type === "admin") {

      $_SESSION['prod_id'] = $prod_id;
      $_SESSION['type'] = $obj->type;
      $_SESSION['user_id'] = $obj->user_id;
      $_SESSION['fname'] = $obj->fname;
      header("location:admin/admin-index.php");
    }
    elseif($obj->email === $email && $obj->pw === $pw && $obj->type === "store") {

      $_SESSION['email'] = $email;
      $_SESSION['type'] = $obj->type;
      $_SESSION['user_id'] = $obj->user_id;
      $_SESSION['fname'] = $obj->fname;
      header("location:store/products.php");
    }

    else {

        if($flag === 'true'){
          echo '<script>alert("INVALID USER! REDIRECTING!");window.location="login-page.php";</script>';
          $flag = 'false';
        }
    }
  }
}


?>
