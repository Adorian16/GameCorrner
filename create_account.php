        <?php include 'header.php';
        include 'db_connection.php';
        ?>

<div class="sign-in">
    <p class="fs-2 fw-bold text-white text-center my-5">SING UP</p>
</div>
<?php 
        if(isset($_REQUEST['username'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone_number = $_POST['phone'];

        if (username_already_in_db($username)== TRUE || email_already_in_db($email)== TRUE) {
            // Show error message
            exit('<p class="fs-2 fw-bold text-white text-center my-5">You tried to inssert a username or email that is already taken.
            <br>Please choose a other one.<br><a class=""href="create_account.php">Go back</a></p>');}else{

        $query_register="INSERT INTO user (FirstName,LastName,Username,Email,PhoneNumber,Password) VALUES 
        ('$firstname','$lastname','$username','$email','$phone_number','".md5($password)."')";

        $account_result=$conn->query($query_register);
        }
        if($account_result)
        {
        echo "<div class='form'>
                        <h3>You are registered successfully.</h3><br/>
                        <p class='link'>Click here to <a href='account.php'>Login</a></p>
                        </div>";
        }
        else
        {
            "<div class='form'>
                        <h3>Required fields are missing.</h3><br/>
                        <p class='link'>Click here to <a href='create_account.php'>registration</a> again.</p>
                        </div>";
        } 

        }
        else{?>

<form acction="" method="post">
<div class="position-relative">
  <div class="position-absolute top-0 start-50 translate-middle-x">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">First Name</span>
            <input type="text" class="form-control" placeholder="Firstname"  aria-describedby="basic-addon1" name="firstname">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Last Name</span>
            <input type="text" class="form-control" placeholder="Lastname"  aria-describedby="basic-addon1" name="lastname">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Username</span>
            <input type="text" class="form-control" placeholder="username"  aria-describedby="basic-addon1" name="username" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email</span>
            <input type="text" class="form-control" placeholder="Email"  aria-describedby="basic-addon1" name="email"required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Phone</span>
            <input type="text" class="form-control" placeholder="Number" aria-describedby="basic-addon1" name="phone">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required>
        </div>

        <div class="mx-5">
        <button class="btn btn-primary btn-lg mx-5" type="submit">Sign In</button>
        </div>
        <div class="sign-up">
            <p class="fs-5 text-center ms-1">If you have an account, click <a href="account.php">Sign In</a></p>
    
        </div>
    </div>
    </div>
   
</form>

        <?php } ?>