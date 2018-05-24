<?php include './include/header.php'?>
<?php
    
    if(isset($_POST['submit']))
    {
        if(empty($_POST['username']) || empty($_POST['password']))
        {
            echo "You did not fill out the required fields.";
        }
        else
        {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $query = "SELECT * FROM user WHERE username = '$username'";
            
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);     
            
            if($result)
            {
                $uname = $row['username'];
                $upass = $row['password'];
            
                if($username == $uname)
                {	
                    if($password == $upass)
                    {
                        setcookie($username, $cookie_value, time() + (86400));
                        $_SESSION['user']=$username;
                        
                        header("location:dashboard.php");
                    }
                    else
                    {
                        header("location:login.php?1");
                    }
                }
                else
                {
                    header("location:login.php?1");
                }
            }
            else
            {
                header("location:login.php?1");
            }  
        }       
    }
?>
<div class="container">
    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" id="loginForm">
        <form method="POST">
            <div class="form-group">
                <label for="user">Enter Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="password">Enter Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="#########" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success">Login</button>
            </div>
            <p><?php 
            if(isset($_GET['1'])){
                echo "
                <div>
                    Login Id or Password are invalid
                </div>";                
            }
    ?> </p>
            
        </form>
    </div>
    
</div>
<?php include './include/footer.php'?>