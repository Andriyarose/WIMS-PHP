<?php
 session_start();
require_once('connection.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        
        if(empty($email)|| empty($password))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select * from user_form where email='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['password'];
                if(password_verify($password,$db_password))
                {  
                    $_SESSION['email'] = $email;
                    header('location:index2.php');
                    exit();
                }
                else{
                    echo '<script>alert("Enter a proper password")</script>';
                }
            }
            else{
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Internship Portal</h2>
            </div>

        </div> 
        <div class="content">
            <h1><br><span>ELORA</span> <br>join us...</h1>
            <p class="par"><br>ELORA can be a useful tool for students who are looking for internships. We can help students<br>to find suitable internship opportunities, apply for them, and manage their internship experience.<br>We provide a list of available internship opportunities from various companies and organizations.<br>The students are able to filter the list based on their interests and track their internship progress.<br>Overall, ELORA can help students to have a more organized and effective internship experience.</p>

                <button class="cn"><a href="index1.php">Go Back</a></button>

                <div class="form">
                    <h2>LOGIN HERE</h2>
                    <form action="" method="post">
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <button class="btnn"><a href="web.php">Login</a></button>
                    </form>
                    <p class="link">Don't have an account<br>
                    <a href="index2.php">Sign up </a> here</p>
                    

                </div>
                    </div>
                </div>
        </div>
    </div>
    
</html>
