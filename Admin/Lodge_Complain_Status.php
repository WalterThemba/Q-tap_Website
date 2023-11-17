<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .complaint {
            background-color: #fff;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
        }

        .resolved {
            background-color: #d4edda; /* Light green */
        }

        .unsolved {
            background-color: #f2dede; /* Light red */
        }

        .new {
            background-color: #fcf8e3; /* Light yellow */
        }

        .filter-buttons {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Complaints</h1>
        <div class="filter-buttons">
            <button id="allBtn">All Complaints</button>
            <button id="newBtn">New Complaints</button>
            <button id="unsolvedBtn">Unsolved Complaints</button>
            <button id="resolvedBtn">Resolved Complaints</button>
        </div>
        <div id="complaintsList"></div>
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

        const firestore = firebase.firestore();
        const complaintsList = document.getElementById('complaintsList');
        const allBtn = document.getElementById('allBtn');
        const newBtn = document.getElementById('newBtn');
        const unsolvedBtn = document.getElementById('unsolvedBtn');
        const resolvedBtn = document.getElementById('resolvedBtn');

        firestore.collection("complaints").onSnapshot((querySnapshot) => {
            const complaints = querySnapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
            displayComplaints(complaints, '', '', '', true);
			allBtn.addEventListener('click', () => displayComplaints(complaints, '', '', '', true));
			newBtn.addEventListener('click', () => displayComplaints(complaints.filter(complaint => !complaint.resolved), '', '', '#fcf8e3', true));
			unsolvedBtn.addEventListener('click', () => displayComplaints(complaints.filter(complaint => !complaint.resolved), '', '#f2dede', '', true));
			resolvedBtn.addEventListener('click', () => displayComplaints(complaints.filter(complaint => complaint.resolved), '#d4edda', '', '', true));
        });

        function displayComplaints(complaintsData, resolvedColor, unsolvedColor, newColor, showResolvedButton) {
            complaintsList.innerHTML = '';
            complaintsData.forEach(complaint => {
                const complaintItem = document.createElement('div');
                complaintItem.className = 'complaint';
                if (complaint.resolved) {
                    complaintItem.classList.add('resolved');
                    complaintItem.style.backgroundColor = resolvedColor;
                } else if (!complaint.resolved) {
                    if (complaintItem.classList.contains('new')) {
                        complaintItem.classList.remove('new');
                    }
					
                    complaintItem.classList.add('unsolved');
                    complaintItem.style.backgroundColor = unsolvedColor;

                    
                } else {
                    if (complaintItem.classList.contains('unsolved')) {
                        complaintItem.classList.remove('unsolved');
                    }
                    complaintItem.classList.add('new');
                    complaintItem.style.backgroundColor = newColor;
                }
                complaintItem.innerHTML += `
                    <p><strong>Student Number:</strong> ${complaint.studentNo}</p>
                    <p><strong>Email:</strong> ${complaint.Email}</p>
                    <p><strong>Subject:</strong> ${complaint.subject}</p>
                    <p><strong>Date:</strong> ${complaint.Date}</p>
                    <p><strong>Time:</strong> ${complaint.Time}</p>
                    <p><strong>Complaint:</strong> ${complaint.complaint}</p>
					<!--// Add admin response text field--> 
                    
					<div class="admin-response">
                            <label for="adminResponse${complaint.id}">Admin Response:</label>
                            <textarea id="adminResponse${complaint.id}" rows="4" cols="50"></textarea>
                            <button onclick="submitAdminResponse('${complaint.id}')">Submit Response</button>
                        </div>
                `;
                if (!complaint.resolved && showResolvedButton) {
                    complaintItem.innerHTML += `<button onclick="markResolved('${complaint.id}')">Mark Resolved</button>`;
                }
                complaintsList.appendChild(complaintItem);
            });
        }

		

			// Show all complaints by default
            displayComplaints(complaints, '', '', '', true);

        function markResolved(id) {
            firestore.collection("complaints").doc(id).update({ resolved: true })
                .then(() => {
                    alert(`Complaint ID ${id} marked resolved.`);
                })
                .catch(error => {
                    console.error("Error updating document: ", error);
                });
        }

        function submitAdminResponse(id) {
            const adminResponse = document.getElementById(`adminResponse${id}`).value;
            if (adminResponse.trim() !== '') {
                firestore.collection("complaints").doc(id).update({ adminResponse: adminResponse })
                    .then(() => {
                        alert(`Admin response submitted for Complaint ID ${id}.`);
                    })
                    .catch(error => {
                        console.error("Error updating document: ", error);
                    });
            } else {
                alert("Please enter a valid admin response.");
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
    </script>
</body>
</html>
