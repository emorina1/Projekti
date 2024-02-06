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


<div class="container">
    <div class="cover">
      <div class="front">
        <img src="images/page1.png" alt="">
        <div class="text">
          <span class="text-1">Together we can<br> Work hard</span>
          <span class="text-2">No pain,no gain</span>
        </div>
      </div>
    </div>

<div class="hero">
    <div class="login">
      <form method="post" id="loginForm">
      <?php
    if(isset($_POST['register'])){
        register($_POST['emri'],$_POST['email'],$_POST['username'],$_POST['fjalekalimi']);
    }

?>
    <div class="login-form">
        <p>Register</p>
        <div class="login-all-item">
             <div class="login-item">
                <label>Name</label>
               <input type="text" name="emri" id="fjalekalimi">
            </div>
            <div class="login-item">
                <label>Email</label>
               <input type="text" name="email" id="fjalekalimi">
            </div>
            <div class="login-item">
                <label>Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="login-item">
                <label>Password</label>
               <input type="password" name="fjalekalimi" id="fjalekalimi">
            </div>
        </div>
        <div class="account"><p><span>Already have an account? </span><a href="Login.php">Log in</a></p></div>
        <div class="btn-login">
            <input type="submit" name="register" value="Register">
        </div>
    </div>
    
    </form>
</div>
    
    </div>


    
</body>
</html> 



