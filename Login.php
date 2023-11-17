<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="css\style.css">
    <title>Q-Tap</title>
	<style>
	.ring{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  width:150px;
  height:150px;
  background:transparent;
  border:3px solid #3c3c3c;
  border-radius:50%;
  text-align:center;
  line-height:150px;
  font-family:sans-serif;
  font-size:20px;
  color:#fff000;
  letter-spacing:4px;
  text-transform:uppercase;
  text-shadow:0 0 10px #fff000;
  box-shadow:0 0 20px rgba(0,0,0,.5);
}
.ring:before
{
  content:'';
  position:absolute;
  top:-3px;
  left:-3px;
  width:100%;
  height:100%;
  border:3px solid transparent;
  border-top:3px solid #fff000;
  border-right:3px solid #fff000;
  border-radius:50%;
  animation:animateC 2s linear infinite;
}

.loading-text {
    animation: spinText 2s linear infinite;
}
@keyframes spinText {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
@keyframes animateC
{
  0%
  {
    transform:rotate(0deg);
  }
  100%
  {
    transform:rotate(360deg);
  }
}
@keyframes animate
{
  0%
  {
    transform:rotate(45deg);
  }
  100%
  {
    transform:rotate(405deg);
  }
}
	</style>
</head>
<body>

 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
           <img src="Student/css/pic__2_-removebg-preview.png" alt="Logo"  width="100" height="100">
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="#" class="link active">Home</a></li>
                <li><a href="#" class="link">Blog</a></li>
                <li><a href="#" class="link">Services</a></li>
                <li><a href="#" class="link">About</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn" href="Register.php">Sign Up</button>
        </div>
		
       
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->
<div class="ring" id="loadingRing">
    <span class="loading-text">Loading</span>
    <span></span>
</div>
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="Register.php" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
			
            <div class="input-box">
				<input type="text" class="input-field" id="loginEmail" placeholder="Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
               
				<input type="password" class="input-field" id="loginPassword" placeholder="Password">
     
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" onclick="loginUser()" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
			<div id="loadingContainer" style="display: none;">
                <div class="loading-spinner"></div>
            </div>
        </div>
		
</div>
</div>
</body>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>
<script> 
function showLoadingRing() {
  const loadingRing = document.getElementById("loadingRing");
  loadingRing.style.display = "block";
}

// Function to hide the loading ring
function hideLoadingRing() {
  const loadingRing = document.getElementById("loadingRing");
  loadingRing.style.display = "none";
}
hideLoadingRing()
// Example usage: Call showLoadingRing() when the login button is clicked
document.querySelector(".submit").addEventListener("click", function() {
  showLoadingRing();
  // Perform your login logic here (e.g., Firebase authentication)
  // Once the login is complete, call hideLoadingRing() to hide the loading ring
});
</script>
<script src="index.js">showLoadingRing()</script>


</script>
</html>