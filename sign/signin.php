

 <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<title>Sign In</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <script src="https://kit.fontawesome.com/9f1e537989.js"></script>
    </head>
    <body style="background-color: #ff4c68;">
        <section>
          <div class="center">
            
                <div class="text">Login Form</div>
                    <form action="" method="post">
                        <div class="data">
                            <label>Email</label>
                            <input type="text" name="email" required />
                        </div>
                        <div class="data">
                            <label>Password</label>
                            <input type="password" name="password" required />
                        </div>
                        <!-- <div class="forgot-pass">
                            <a href="#">Forgot Password?</a>
                            </div> -->
                        <div class="btn" align="center">
                            <div class="inner"></div>
                            <button type="submit" name="login">Login</button>
                        </div>
                            <div class="signup-link">
                            Not a member? <a href="signup.php">Signup now</a>
                        </div>
                    </form>
                </div>
            </div>
      </section>
    </body>

    <?php 
        session_start();
        if(isset($_POST['login'])){
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,"vehicle");
            $query = "select * from user_details where EMAIL = '$_POST[email]'";
            $query_run = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($query_run)) {
                if($row['EMAIL'] == $_POST['email']){
                    if($row['PASSWORD'] == $_POST['password']){
                        $_SESSION['name'] =  $row['NAME'];
                        $_SESSION['email'] =  $row['EMAIL'];
                        $_SESSION['userid'] =  $row['USERID'];
                        header("Location: ../dashboard/dashboard.php");
                    }
                    else{
                        ?>
                        <script>
                            alert("Wrong details,Try again");
                            window.location="signin.php";
                        </script>
                        <?php
                    }
                }
            }
        }

    ?>
</html>