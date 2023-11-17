<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Include your Firebase scripts here -->
	<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>
	
    <!-- ... -->
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
            padding: 10px;
            border-radius: 10px;
			
        }
		h3 {
			color: #851616;
            text-align: center;
            font-size: 30px;
            font-style: italic;
            font-weight: bold;
            background: #E663E4F4;
            padding: 10px;
            border-radius: 10px;
		}
			

        table {
            width: 80%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid white;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        th {
            background: white;
            color: #EA0A0A;
            font-size: 15px;
            font-weight: bold;
            font-style: italic;
        }

        td {
            color: black;
            font-size: 15px;
            font-style: italic;
        }

        td.email {
            color: black;
            font-size: 15px;
            font-style: italic;
            text-decoration: underline;
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        caption {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            color: #6c757d;
            text-align: left;
            font-weight: bold;
            font-style: italic;
        }
    </style>
</head>
<body>
<nav class="nav">
   
</nav>
<div class="container">
 <h3>Status</h3>
     <table border="1">
        <thead>
            <tr>
                <th>Student No</th>
                <th>Subject matter</th>
                <th>Complaint/Explanation</th>
                <th>Complain response</th>
                <th>Complain Status</th>
            </tr>
        </thead>
        <tbody id="complaintsTable">
            <!-- Complaints will be displayed here -->
        </tbody>
    </table>

</div>
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
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  // Initialize Firebase
firebase.initializeApp(firebaseConfig);

        // Reference to the Firestore database
        const db = firebase.firestore();
        const complaintsTable = document.getElementById("complaintsTable");

        // Function to display complaints
function displayComplaints() {
    // Clear the existing table
    complaintsTable.innerHTML = "";
    var userSession = localStorage.getItem('userSession');

    // Get a reference to the "complaints" collection
    const complaintsRef = db.collection("complaints").where("Email", "==", userSession);

    // Query the complaints collection
    complaintsRef.get()
        .then((querySnapshot) => {
            querySnapshot.forEach((doc) => {
                // Data for each complaint
                const complaintData = doc.data();

                // Create a new row
                const row = document.createElement("tr");

                // Create cells for each field
                const studentNoCell = document.createElement("td");
                studentNoCell.textContent = complaintData.studentNo;

                const subjectCell = document.createElement("td");
                subjectCell.textContent = complaintData.subject;

                const complaintCell = document.createElement("td");
				complaintCell.textContent = complaintData.complaint;
				
				const adminResponseCell = document.createElement("td");
				if (complaintData.adminResponse) {
					adminResponseCell.textContent = complaintData.adminResponse;
				} else {
					adminResponseCell.textContent ="No Reponsed";
					adminResponseCell.style.color ="red";
				}
				
				const resolvedCell= document.createElement ("td")
			
			if (complaintData.resolved){
				
			  resolvedCell.textContent= "Complain Solved";
			  resolvedCell.style.color= "green";
			  }else{
			   resolvedCell.textContent= "Complain Still Pending";
			   resolvedCell.style.color= "red";	
			}

                // Append cells to the row
                row.appendChild(studentNoCell);
                row.appendChild(subjectCell);
                row.appendChild(complaintCell);
				row.appendChild(adminResponseCell);
				row.appendChild(resolvedCell);

                // Append the row to the table
               complaintsTable.appendChild(row);
           });
       })
       .catch((error) => {
           console.error("Error fetching complaints: ", error);
        });
}

        // Call the displayComplaints function to initially load complaints
        displayComplaints();
    </script>
</body>
</html>
