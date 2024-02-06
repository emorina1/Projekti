
<?php include("functions.php"); 
// Initialize variables
$emri = $phone = $email = $mbiemri = null;

// Check if the session variables are set and not null
if (
    isset($_SESSION['useri']['emri']) && 
    isset($_SESSION['useri']['email']) && 
    $_SESSION['useri']['emri'] !== null &&
    $_SESSION['useri']['email'] !== null 
) {
    // Assign values to variables only if they are not null
    $emri = $_SESSION['useri']['emri']; 
    $email = $_SESSION['useri']['email'];
}
?>
<link rel="stylesheet" href="Loginstyle.css">


<?php
if(isset($_POST['login'])){
    //echo $_POST['email'];
    login($_POST['username'],$_POST['fjalekalimi']);
}

?>







<div class="container">
    <div class="cover">
      <div class="front">
        <img src="images/page1.png" alt="">
        <div class="text">
          <span class="text-1">Don’t give up on your dreams, <br> or your dreams will give up on you</span>
          <span class="text-2">A feeble body weakens the mind.</span>
        </div>
      </div>
    </div>

<div class="hero">
    <div class="login">
      <form method="post" id="loginForm">
    <div class="login-form">
        <p>Login</p>
        <div class="login-all-item">
            <div class="login-item">
                <label>Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="login-item">
                <label>Password</label>
               <input type="password" name="fjalekalimi" id="fjalekalimi">
            </div>
        </div>
        <div class="account"><p><span>Don't have an account? </span><a href="signup.php">Sign Up</a></p></div>
        <div class="btn-login">
            <input type="submit" name="login" value="Login">
        </div>
    </div>
    
    </form>
</div>
    
    </div>

  
</body>
</html> 



