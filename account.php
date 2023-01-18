<?php include 'header.php';
include 'db_connection.php';
?>
<?php 

if(isset($_POST['username'])){session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $querry_login="SELECT * FROM user WHERE Username='$username' AND Password='".md5($password)."'";
    $login_result=$conn->query($querry_login); 
    
    $rows=mysqli_num_rows($login_result);
    
    if($rows==1){
            $_SESSION['username']=$username;
            header("Location: index.php");
    }else {
                echo "<div class='form'>
                      <h3>Incorrect Username/password.</h3><br/>
                      <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                      </div>";
            }
        } else {?>
<div class="sign-in">
    <p class="fs-2 fw-bold text-white text-center my-5">SING IN</p>
</div>

<form acction="sing_in" method="POST">
<div class="position-relative">
    <div class="position-absolute top-0 start-50 translate-middle-x">

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Username</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password">
        </div>

        <div class="sign-up">
            <p class="fs-5 text-center ms-1">Don't have an account , click <a href="create_account.php">Create account</a></p>
    
        </div>
        <div class="mx-5">
        <button class="btn btn-primary btn-lg mx-5" type="submit">Sign Up</button>
        </div>
    </div>
</div>
</form>

<?php } ?>