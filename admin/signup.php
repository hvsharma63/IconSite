<?php include './include/header.php'?>
<?php
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        //this is for chack that if name is alrady axist in our data base or not
        // $quary = "SELECT `username` from user";
        // $result = mysqli_query($conn,$quary);
        // $a = 0;

        // while ($row = mysqli_fetch_array($result)) {
        //     if($row['username']==$username)
        //     {
        //         header("location:signup.php?axist");
                
        //     }
        //     else
        //     {
        //         $a = 1;
        //     }
        //   }
        //   //this is for insert new USER in database
        // if($a == 1)
        // {      
            $quary = "INSERT INTO user (name,email,username,password) VALUES ('$name','$email','$username','$password')";
            mysqli_query($conn,$quary);
    
            if(mysqli_query($conn,$quary)){
                //header("location:signup.php?success");
                echo '<script>alert("You Are Success Registared")</script>';
            }
            else{
                //header("location:signup.php?fail");
                echo '<script>alert("You Are Not Registered Pleles Try again")</script>';
            }
        //}

    }
?>
<div class="container">
    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" id="signUpForm">
        <form method="POST">
            <h2>Register Yourself.</h2>
            <div class="form-group">
                <label for="name">Enter Name:</label>
                <input type="text" class="form-control"  id="name" name="name" placeholder="John Doe" required>
            </div>
            <div class="form-group">
                <label for="email">Enter Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="user@email.something" required>
            </div>
            <div class="form-group">
                <label for="user">Enter Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="user@name" required>
            </div>
            <div class="form-group">
                <label for="password">Enter Password:</label>
                <input type="password" class="form-control"  id="password" name="password" placeholder="#########" required>
            </div>
            <!-- <p id="message"></p> -->
            <div class="form-group">
                <label for="confirm">Confirm Password:</label>
                <input type="password" class="form-control" onblur="validate()" name="confirm" id="confirm" required>
            </div>
            <span id="message"></span><br> 
            <div class="form-group">
                <button type="submit" id="submit" name="submit" class="btn btn-success" disabled="disabled">Sign Up</button>
                <a href="login.php" class="btn btn-primary">Login </a>
            </div>
        </form>
        <?php 
            
        ?>

    </div>
</div>
<?php include './include/footer.php'?>