<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your head content here -->
    <style>
body {
            font-family: Arial, sans-serif;
            background: url("css\img.png") no-repeat center center fixed;
            background-size: cover;
			background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            background: #f0f0f0;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
			margin-top: 100px
        }

        h1 {
            color: #851616;
            text-align: center;
            font-size: 30px;
            font-style: italic;
            font-weight: bold;
            background: #E663E4F4;
            padding: 50px;
            border-radius: 10px;
			margin-top: 40px;
        }

        table a:link {
	color: #666;
	font-weight: bold;
	text-decoration: none;
}

table a:visited {
	color: #999999;
	font-weight: bold;
	text-decoration: none;
}

table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration: underline;
}

table {
	width: 1200px;
	margin:10px auto;
	box-shadow: none;
	border:1px solid #E6E6E6;
	padding:0;
	background-color:#FFFFFF;
	box-sizing: border-box;
	display: table;
}

table th {
	text-align:center;
	background: #34495e;
	color:#FFF;
	text-shadow:0px 01px 0px #000;
	font-size:15px;
	height: 42px;
	border-radius: 0 !important;
	border-left: 1px solid whitesmoke;
	box-sizing:border-box;
}

table th:first-child {
	border-left: 0;
}


table tr {
	text-align: center;
}

table td:first-child {
	box-sizing: border-box;
	border-left: 0;
}

table td {
	padding: 9px;
	border-top: 1px solid #ffffff;
	border-bottom: 1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	background: white;
}

table tr:nth-child(odd) td {
	background: #fcfaf5;
}

table tr:last-child td {
	border-bottom: 0;
}

table tr:hover td {
	background: #fffcf5;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
        .pending {
            color: red;
        }

        .approved {
            color: green;
        }
    </style>
</head>

<body>

    <div class="container">
        <caption>Availability Schedule</caption>
        <h2>Bookings</h2>
        <table>
            <thead>
                <tr>
                    <th>Student Number</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Module</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="bookingsTableBody">
                <!-- Booking details will be added here -->
            </tbody>
        </table>
    </div>
	<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
    <script>
        // Initialize Firebase with your project's config
		  var firebaseConfig = {
		  apiKey: "AIzaSyCO8fn0WHMHaxgI1a8UVnCV2IMpPLl9Q5M",
		  authDomain: "q-tap-4f925.firebaseapp.com",
		  databaseURL: "https://q-tap-4f925-default-rtdb.firebaseio.com",
		  projectId: "q-tap-4f925",
		  storageBucket: "q-tap-4f925.appspot.com",
		  messagingSenderId: "1049260146769",
		  appId: "1:1049260146769:web:c67fe70c4810127b37f870",
		  measurementId: "G-G01GK2WKDG"
		  };
		  
		  // Initialize Firebase only once
        if (!firebase.apps.length) {
            firebase.initializeApp(firebaseConfig);
        }
		var userSession = localStorage.getItem('userSession');

        const firestore = firebase.firestore();
        // Listen for changes in the "bookings" collection and update the table
        const bookingsTableBody = document.getElementById("bookingsTableBody");

        firestore.collection("bookings").where("Email", "==", userSession).onSnapshot((querySnapshot) => {
            bookingsTableBody.innerHTML = ""; // Clear the table

            querySnapshot.forEach((doc) => {
                const booking = doc.data();
                const row = document.createElement("tr");
                // Check the statusClass and apply appropriate class for styling
                const statusClass = booking.statusClass === true ? "approved" : "pending";
                row.innerHTML = `
                    <td>${booking.studentNumber}</td>
                    <td>${booking.date}</td>
                    <td>${booking.time}</td>
                    <td>${booking.module}</td>
                    <td class="${statusClass}">${booking.statusClass === true ? 'approved' : 'pending'}</td>
                `;
                bookingsTableBody.appendChild(row);
            });
        });
    </script>
</body>

</html>
