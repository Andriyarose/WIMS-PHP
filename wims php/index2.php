<?php

$conn=mysqli_connect('localhost','root','','internship');
if(!$conn)
{
   die("connection failed: " .mysqli_connect_error());
}

if(isset($_POST['submit']))
{

   $name =  $_POST['name'];
   $email =  $_POST['email'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   if($pass != $cpass)
      {
         $error[] = 'password not matched!';
      }
      else
      {
         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

         $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

         $result = mysqli_query($conn, $select);

         if(mysqli_num_rows($result) > 0)
         {

             $error[] = 'user already exist!';

         }
         else
         {
             $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
             mysqli_query($conn, $insert);
            header('location:index3.php');
            exit();
         }
   }

}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$errorMsg.'</span>';
         }
      }
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
      <option value="user">user</option>
       <option value="admin">ADMIN</option>
         
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="index3.html">login now</a></p>
   </form>

</div>

</body>
</html>