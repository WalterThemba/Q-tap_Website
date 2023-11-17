<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positions</title>
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

		button{
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

button::before {
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
button:hover::before{
	width: 9em;
}
    </style>
</head>
<body>
<div class="dashboard-container">
        <div class="dashboard-item">
            <h2>Manager</h2>
            <p>Manager Details info.</p>
            <button href="STUDENT FORM FOR BOOKINGS.php" onclick="navigateBookNow()">Manager Details</button>
        </div>
		<div class="dashboard-item">
            <h2>IT SUPPORT</h2>
            <p>Know where to get help from IT SUPPORT.</p>
            <button href="STUDENT FORM FOR BOOKINGS.php" onclick="IT_Support()">Details</button>
        </div>
		<div class="dashboard-item">
            <h2>Program Manager</h2>
            <p>Program Manager Of the Cumpus.</p>
            <button href="STUDENT FORM FOR BOOKINGS.php" onclick="navigateLecturerAvailability()">Program Manager</button>
        </div>
		<div class="dashboard-item">
            <h2>Program Coordinator</h2>
            <p>Program Coordinator .</p>
            <button href="STUDENT FORM FOR BOOKINGS.php" onclick="ProgramManagers()">Program Coordinator</button>
        </div>
        <div class="dashboard-item">
            <h2>SRC</h2>
            <p>Check SRC availability.</p>
            <button href="lecturer_availability.php" onclick="SRC()">SRC</button>
        </div>

        <div class="dashboard-item">
            <h2>CLIENT SERVICES</h2>
            <p>CLIENT SERVICES.</p>
            <button href="contact_lecturer.php"  onclick="ClientServices()">Work Force</button>
        </div>
    </div>
	<script>
       

        function navigateBookNow() {
            // You can add navigation logic here, for example:
            window.location.href = "Managers.php";
        }
		
		function navigateLecturerAvailability() {
            // You can add navigation logic here, for example:
            window.location.href = "Lecturer Availability.php";
        }
		
		function IT_Support() {
            // You can add navigation logic here, for example:
            window.location.href = "IT_Support.php";
        }
		
		function SRC() {
            // You can add navigation logic here, for example:
            window.location.href = "SRC.php";
        }
		function ClientServices() {
            // You can add navigation logic here, for example:
            window.location.href = "ClientServices.php";
        }
		function ProgramManagers() {
            // You can add navigation logic here, for example:
            window.location.href = "ProgramManagers.php";
        }

       //
    </script>
</body>
</html>
