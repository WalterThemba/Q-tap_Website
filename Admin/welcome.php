<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
	
	<link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .welcome-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #3498db;
            color: #fff;
        }

        .welcome-text {
            font-size: 36px;
            text-align: center;
        }

        .button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #2980b9;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .nav {
            background-color: #3498db;
            overflow: hidden;
        }

        .nav-logo {
            float: left;
            padding: 15px;
        }

        .nav-menu {
            float: right;
        }

        .nav-menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .nav-menu ul li {
            display: inline;
        }

        .nav-menu ul li a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .nav-menu ul li a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: transparent;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
	 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
			overflow-y: scroll;
        }

       .nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            color: #fff;
            transition: top 0.3s;
            z-index: 1;
        }

        .nav.hidden {
            top: -80px; /* Hide the nav bar by moving it above the viewport */
        }

        .nav-logo {
            padding: 10px;
            font-size: 24px;
        }

        .nav-menu {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav-menu ul {
            list-style-type: none;
            padding: 0;
        }

        .nav-menu li {
            display: inline;
            margin: 0 10px;
        }

        .link {
            text-decoration: none;
            color: black;
            font-size: 16px;
        }

        .link.active {
            font-weight: bold;
        }

        .nav-menu-btn {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        .dashboard-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-top: 140px;
        }

        .dashboard-wrapper {
            max-height: 400px;
            overflow-y: auto;
        }

        .dashboard-item {
            width: 30%;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            text-align: center;
            margin-top: 20px;
        }

        h2 {
            color: #333;
        }

        .dashboard-item a {
            text-decoration: none;
            color: #333;
        }

		.custom-button {
            position: relative;
            background: transparent;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .custom-button::before {
            content: '';
            width: 0;
            height: 3em;
            border-radius: 30em;
            position: absolute;
            top: 0;
            left: 0;
            background-image: linear-gradient(to right, white 0%, yellow 100%);
            transition: .5s ease;
            display: block;
            z-index: -1;
        }

        .custom-button:hover::before {
            width: 9em;
        }
    </style>
	<style>
:root {
    --primary: 237, 94%, 81%;
    --background: 266, 16%, 92%;
    --background-secondary: 256, 12%, 12%;
    --background-secondary-dark: 256, 10%, 10%;
    --background-secondary-light: 257, 11%, 16%;
    --text-primary: 0, 0%, 0%;
    /* Colors */
    --black: 0, 0%, 0%;
    --white: 0, 0%, 100%;
    --quite-gray: 0, 0%, 50%;
    --grooble: 10, 28%, 93%;
    /* Sizes */
    --heading-large: 5.6rem;
    --heading-medium: 3.6rem;
    --heading-small: 2.4rem;
    --paragraph: 1.11rem;
    --navbar-buttons: 2.4rem;
    /* misc */
    --transition-main: .175, .685, .32;
    /* Fonts */
    --font-main: "Poppins";
}

/* ===========
    Variabels
   =========== */

/* ===============
    Global Styles
   =============== */

*, *::before, *::after {
    box-sizing: inherit;
}
html, body {
    margin: 0;
    width: 100%;
    color: hsl(var(--text-primary));
    font-family: var(--font-main);
    background-color: hsl(var(--background));
    -webkit-font-smoothing: antialiased;
    scroll-behavior: smooth;
    box-sizing: border-box;
}

/* ============
    Typography
   ============ */

/* Headings */
h1, h2, h3, h4, h5, h6 {
    margin: 0;
}
/* Font Size */
h1 {
    font-size: var(--heading-large);
}
h2 {
    font-size: var(--heading-medium);
}
h3 {
    font-size: var(--heading-small);
}
h4 {
    font-size: calc(var(--heading-small) - .2rem);
}
h5 {
    font-size: calc(var(--heading-small) - .4rem);
}
h6 {
    font-size: calc(var(--heading-small) - .6rem);
}
/* Font Weight */
h1, h2 {
    font-weight: 900;
}
h3, h4, h5, h6 {
    font-weight: 800;
}
/* Paragraphs */
p {
    margin: 0;
    font-size: var(--paragraph);
}
/* Links */
a {
    color: hsla(var(--primary), 1);
    font-size: var(--paragraph);
    text-decoration: underline;
}
a:visited {
    color: hsla(var(--primary), .5);
}

/* =========
    Buttons
   ========= */

button {
    width: 9em;
		height: 3em;
		border-radius: 30em;
		font-size: 15px;
		font-family: inherit;
		border: none;
		position: relative;
		overflow: hidden;
		z-index: 1;
		box-shadow: 6px 6px 12px #c5c5c5,
		-6px -6px 12px white;
}
button:focus {
    box-shadow:
            0 0 0 2px hsl(var(--black)),
            0 0 0 3px hsl(var(--white));
    border: 1px solid transparent;
}

/* =======
    Lists
   ======= */

ul, ol {
    margin: 1em 0;
}

/* =======
    Forms
   ======= */

form {
    margin: 0;
}
fieldset {
    margin: 0;
    padding: .5em 0;
    border: none;
}
input {
    padding: .8em 1.2em;
    font-size: var(--paragraph);
    background-color: hsl(var(--grooble));
    border: 2px solid hsl(var(--grooble));
    outline: none;
}
textarea {
    padding: .8em 1.2em;
    font-size: var(--paragraph);
    font-family: var(--font-main);
    background-color: hsl(var(--grooble));
    border: 2px solid hsl(var(--grooble));
    outline: none;
}
input, textarea {
    transition: all .2s ease-in-out;
}
input:hover, input:focus, textarea:hover, textarea:focus {
    box-shadow:
            0 0 0 2px hsl(var(--black)),
            0 0 0 3px hsl(var(--white));
    border: 2px solid transparent;
}
select {
    padding: .8em 1.2em;
    border: 1px solid hsl(var(--black));
    font-size: var(--paragraph);
    outline: none;
}

/* =========
    Classes
   ========= */

/* ================
    Global classes
   ================ */

/* =========
    Flexbox
   ========= */

.flexbox {
    display: flex;
    justify-content: center;
    align-items: center;
}
.flexbox-left {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.flexbox-right {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
/* Columns */
.flexbox-col {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
.flexbox-col-left {
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
    align-items: flex-start;
}
.flexbox-col-left-ns {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: flex-start;
}
.flexbox-col-right {
    display: flex;
    justify-content: flex-end;
    flex-direction: column;
    align-items: flex-end;
}
.flexbox-col-start-center {
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
    align-items: center;
}
/* Spacings */
.flexbox-space-bet {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* =========
    Classes
   ========= */

.view-width {
    width: 70%;
}

/* ========
    Navbar
   ======== */

#navbar {
    top: 0;
    padding: 0;
    width: 5em;
    height: 100vh;
    position: fixed;
    background-color: hsl(var(--background-secondary));
    transition: width .35s cubic-bezier(var(--transition-main), 1);
    overflow-y: auto;
    overflow-x: hidden;
}
#navbar:hover {
    width: 16em;
}
#navbar::-webkit-scrollbar-track {
    background-color: hsl(var(--background-secondary));
}
#navbar::-webkit-scrollbar {
    width: 8px;
    background-color: hsl(var(--background-secondary));
}
#navbar::-webkit-scrollbar-thumb {
    background-color: hsl(var(--primary));
}
.navbar-items {
    margin: 0;
    padding: 0;
    list-style-type: none;
}
/* Navbar Logo */
.navbar-logo {
    margin: 0 0 2em 0;
    width: 100%;
    height: 5em;
    background: hsl(var(--background-secondary-dark));
}
.navbar-logo > .navbar-item-inner {
    width: calc(5rem - 8px);
}
.navbar-logo > .navbar-item-inner:hover {
    background-color: transparent;
}
.navbar-logo > .navbar-item-inner > svg {
    height: 2em;
    fill: hsl(var(--white));
}
/* Navbar Items */
.navbar-item {
    padding: 0 .5em;
    width: 100%;
    cursor: pointer;
}
.navbar-item-inner {
    padding: 1em 0;
    width: 100%;
    position: relative;
    color: hsl(var(--quite-gray));
    border-radius: .25em;
    text-decoration: none;
    transition: all .2s cubic-bezier(var(--transition-main), 1);
}
.navbar-item-inner:hover {
    color: hsl(var(--white));
    background: hsl(var(--background-secondary-light));
    box-shadow: 0 17px 30px -10px hsla(var(--black), .25);
}
.navbar-item-inner-icon-wrapper {
    width: calc(5rem - 1em - 8px);
    position: relative;
}
.navbar-item-inner-icon-wrapper ion-icon {
    position: absolute;
    font-size: calc(var(--navbar-buttons) - 1rem);
}
.link-text {
    margin: 0;
    width: 0;
    text-overflow: ellipsis;
    white-space: nowrap;
    transition: all .35s cubic-bezier(var(--transition-main), 1);
    overflow: hidden;
    opacity: 0;
}
#navbar:hover .link-text {
    width: calc(100% - calc(5rem - 8px));
    opacity: 1;
}

/* ======
    Main
   ====== */

#main {
    margin: 0 0 0 5em;
    min-height: 150vh;
}
#main > h2 {
    width: 80%;
    max-width: 80%;
}
#main > p {
    width: 80%;
    max-width: 80%;
}

/* =============
    ::Selectors
   ============= */

/* Selection */
::selection {
    color: hsl(var(--white));
    background: hsla(var(--primary), .33);
}
/* Scrollbar */
::-webkit-scrollbar-track {
    background-color: hsl(var(--background));
}
::-webkit-scrollbar {
    width: 8px;
    background-color: hsl(var(--background));
}
::-webkit-scrollbar-thumb {
    background-color: hsl(var(--primary));
}

/* ===============
    5. @keyframes
   =============== */

/* ==============
    @media rules
   ============== */

@media only screen and (max-width: 1660px) {
    :root {
        /* Sizes */
        --heading-large: 5.4rem;
        --heading-medium: 3.4rem;
        --heading-small: 2.2rem;
    }
}
@media only screen and (max-width: 1456px) {
    :root {
        /* Sizes */
        --heading-large: 5.2rem;
        --heading-medium: 3.2rem;
        --heading-small: 2rem;
    }
    .view-width {
        width: 80%;
    }
}
@media only screen and (max-width: 1220px) {
    .view-width {
        width: 70%;
    }
}
@media only screen and (max-width: 1024px) {
    :root {
        /* Sizes */
        --heading-large: 5rem;
        --heading-medium: 3rem;
        --heading-small: 1.8rem;
    }
    .view-width {
        width: 75%;
    }
}
@media only screen and (max-width: 756px) {
    :root {
        /* Sizes */
        --heading-large: 4rem;
        --heading-medium: 2.6rem;
        --heading-small: 1.6rem;
        --paragraph: 1rem;
        --navbar-buttons: 2.2rem;
    }
    .view-width {
        width: calc(100% - 5em);
    }
}
@media only screen and (max-width: 576px) {
    .view-width {
        width: calc(100% - 3em);
    }
}
@media only screen and (max-width: 496px) {

}

</style>
</head>

<body>
    <nav class="nav">
        <div class="nav-logo">
            <img src="css/pic__2_-removebg-preview.png" alt="Logo"  width="70" height="70">
        </div>
        <div class="nav-menu">
            <ul>
                <li class="dropdown">
                    <a href="#" class="link">Our Campuses</a>
                    <div class="dropdown-content">
                        <a href="#" onclick="showCampus('Pietermaritzburg')">Pietermaritzburg</a>
                        <a href="#" onclick="showCampus('Durban')">Durban</a>
                        <a href="#" onclick="showCampus('PretoriaSunnyside')">Pretoria Sunnyside</a>
                        <a href="#" onclick="showCampus('PretoriaCBD')">Pretoria CBD</a>
                        <a href="#" onclick="showCampus('Bloemfontein')">Bloemfontein</a>
                        <a href="#" onclick="showCampus('Braamfontein')">Braamfontein</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
	
	<nav id="navbar">
  <ul class="navbar-items flexbox-col">
    <li class="navbar-logo flexbox-left">
      <a class="navbar-item-inner flexbox">
        <img src="css/pic__2_-removebg-preview.png" alt="Logo"  width="100" height="100">
      </a>
    </li>
     <li class="navbar-item flexbox-left">
                <a class="navbar-item-inner flexbox-left" onclick="navigateTo('dashboard')">
                    <div class="navbar-item-inner-icon-wrapper flexbox">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>
                    <span class="link-text">Dashboard</span>
                </a>
            </li>
            <li class="navbar-item flexbox-left">
                <a class="navbar-item-inner flexbox-left" onclick="navigateTo('services')">
                    <div class="navbar-item-inner-icon-wrapper flexbox">
                        <ion-icon name="home-outline"></ion-icon>
                    </div>
                    <span class="link-text">Services</span>
                </a>
            </li>
            <li class="navbar-item flexbox-left">
                <a class="navbar-item-inner flexbox-left" onclick="navigateTo('about')">
                    <div class="navbar-item-inner-icon-wrapper flexbox">
                        <ion-icon name="folder-open-outline"></ion-icon>
                    </div>
                    <span class="link-text">About</span>
                </a>
            </li>
            <li class="navbar-item flexbox-left">
                <a class="navbar-item-inner flexbox-left" onclick="confirmLogout()">
                    <div class="navbar-item-inner-icon-wrapper flexbox">
                        <ion-icon name="pie-chart-outline"></ion-icon>
                    </div>
                    <span class="link-text">Log out</span>
                </a>
            </li>
  </ul>
</nav>
 <div class="welcome-container" id="welcome-container">
        <h1 class="welcome-text">Welcome to Our Website Admin</h1>
        <p class="welcome-text">Explore and Enjoy</p>
        <button onclick="startDashboard()">Get Started</button>

    </div>
<main id="main" class="flexbox-col">
        <div id="dashboard-content" class="content">
          <div class="dashboard-container">
        <div class="dashboard-item">
            <h3>Student </h3>
			<br/>
            <p>View Student Users.</p>
			<br/>
            <button class="custom-button" href="Users.php" onclick="navigateBookNow()">User</button>
        </div>
		<div class="dashboard-item">
            <h3>Lodge Complain</h3>
			<br/>
            <p>Lodge Complain From Student.</p>
			<br/>
            <button class="custom-button" href="Lodge_Complain_Status.php" onclick="Lodge_Complain()">Lodge Complain</button>
        </div>
        <div class="dashboard-item">
            <h3>Lecturer Availability</h3>
			<br/>
            <p>Check lecturer availability.</p>
			<br/>
            <button class="custom-button" href="lecturer_availability.php" onclick="navigateLecturerAvailability()">Check Availability</button>
        </div>
    </div>
        </div>
        </div>
        <div id="services-content" class="content">
            <h2>Services</h2>
            <!--<p>Services content goes here fhbdrber ihihe rh hc  eh  chhchhcuhuh chuhcuh  cuceh c cehcchehh r hehuh hrhe hchechehcuheu cehchhhe c .</p>
			<br/>
            <p>Services content goes here fhbdrber ihihe rh hc  eh  chhchhcuhuh chuhcuh  cuceh c cehcchehh r hehuh hrhe hchechehcuheu cehchhhe c .</p>
			<br/>
            <p>Services content goes here fhbdrber ihihe rh hc  eh  chhchhcuhuh chuhcuh  cuceh c cehcchehh r hehuh hrhe hchechehcuheu cehchhhe c .</p>
			<br/>
            <p>Services content goes here fhbdrber ihihe rh hc  eh  chhchhcuhuh chuhcuh  cuceh c cehcchehh r hehuh hrhe hchechehcuheu cehchhhe c .</p>
			-->
        </div>
        <div id="about-content" class="content">
            <h2>About</h2>
            <p>About content goes here.</p>
        </div>
    </main>

    <footer id="footer">
        <!-- Footer content goes here -->
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>
    
    <script>
        function showCampus(campus) {
            // Handle the campus selection logic here
            console.log("Selected campus: " + campus);
        }
function startDashboard() {
    // Hide the welcome-container
    const welcomeContainer = document.getElementById("welcome-container");
    welcomeContainer.style.display = "none";

    // Show the dashboard-content
    const dashboardContent = document.getElementById("dashboard-content");
    dashboardContent.style.display = "block";

    // Additional actions related to starting the dashboard can be added here
}
const dashboardContent = document.getElementById("dashboard-content");
    dashboardContent.style.display = "none";
    </script>
	<style>
    .content {
        display: none; /* Hide all content sections initially */
    }

    #dashboard-content {
        display: block; /* Show the "Dashboard" content initially */
    }

    #main {
	
        margin-top: -200px; /* Add a top margin to move the content up */
    }

    /* Add CSS styles for the header and footer as needed */
    #header {
		background-color: #333;
        color: #fff;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center-right;
    }
    #footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
    }
	.welcome-text {
            font-size: 36px;
            text-align: center;
        }

  .custom-button {
        position: relative;
        background: transparent;
        color: black; /* Set text color to black */
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: color 0.3s; /* Add a transition for the text color */
    }

    .custom-button::before {
        content: '';
        width: 0;
        height: 3em;
        border-radius: 30em;
        position: absolute;
        top: 0;
        left: 0;
        background-image: linear-gradient(to right, white 0%, yellow 100%);
        transition: .5s ease;
        display: block;
        z-index: -1;
    }

    .custom-button:hover {
        color: black; /* Change text color to black on hover */
    }

    .custom-button:hover::before {
        width: 9em;
    }
</style>
	<script>
    function navigateTo(page) {
        const contents = document.querySelectorAll('.content');

        contents.forEach(content => {
            content.style.display = 'none';
        });

        const selectedContent = document.getElementById(`${page}-content`);
        if (selectedContent) {
            selectedContent.style.display = 'block';
        }

        // Collapse the sidebar
        const navbar = document.getElementById('navbar');
        navbar.classList.remove('sidebar-is-reduced');
    }

    function confirmLogout() {
        if (confirm('Are you sure you want to log out?')) {
            // Perform logout action here
			localStorage.removeItem('myValue');
			localStorage.removeItem('userSession');
			
			window.history.back();
            navigateTo('dashboard'); // Redirect to the dashboard after logging out
        }
    }
	function checkUserSignIn() {
	var user = localStorage.getItem('myValue');
        if (user != null) {
            // User is signed in
            // You can update the UI or perform actions for an authenticated user here
			// On the second page (JavaScript)
			var myValue = localStorage.getItem('myValue');
			// Retrieve the value from localStorage
			var userSession = localStorage.getItem('userSession');
			if (myValue != null & userSession != null) {
				//window.history.back(); // Go back to the previous page
				}
				else{
					window.history.back();
					window.location.href = "Login.php";
				}
            // Example: Show a "Sign Out" button and hide the "Sign In" button
            
        } else {
            // User is signed out
            // You can update the UI or perform actions for a signed-out user here
			window.history.back(); // Go back to the previous page
			window.location.href = "Login.php";
            console.log("User is signed out");
            // Example: Show a "Sign In" button and hide the "Sign Out" button
            document.getElementById("signOutButton").style.display = "none";
            document.getElementById("signInButton").style.display = "block";
        }
}
// Call the checkUserSignIn function to check the user's sign-in status
checkUserSignIn();
function navigateBookNow() {
	window.location.href = "Users.php";
}
function Lodge_Complain() {
	window.location.href = "Lodge_Complain_Status.php";
}
</script>
</body>

</html>