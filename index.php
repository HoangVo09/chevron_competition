<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php

                include("config.php");
                if(isset($_POST['submi'])){
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con,$_POST['password']);
                    $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);
                    if(is_array($row) && !empty($row)){
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['score'] = $row['Score'];
                        $_SESSION['id'] = $row['Id'];
                    }else{
                        echo "<div class='message'>
                                    <p>Wrong Email or Password</p>
                                </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Go Back</button>";
                    }
                    if(isset($_SESSION['valid'])){
                        header("Location: home.php");
                    }
                }else{
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field">
                    <input type="submi" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php }?>
    </div>
</body>
</html>