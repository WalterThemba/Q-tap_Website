<!DOCTYPE html>
<html>
<head>
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
            background: #e0e0e0s;
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
	background-image: linear-gradient(to right, green 0%, yellow 100%);
	transition: .5s ease;
	display: block;
	z-index: -1;
}
button:hover::before{
	width: 9em;
}
.update-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 440px;
    height: 480px;
    padding: 30px;
    background: #fff;
    box-shadow: 0px 5px 10px 1px rgba(0, 0, 0, 0.05);
    border-radius: 15px;
  }

  .update-form label {
    font-size: 18px;
    margin-top: 10px;
  }

  .update-form input[type="text"],
  .update-form input[type="email"] {
    width: 100%;
    height: 40px;
    font-size: 16px;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .update-form input[type="checkbox"] {
    margin-top: 10px;
  }

  .update-form button {
    width: 100%;
    height: 40px;
    margin-top: 15px;
    font-size: 18px;
    background: black;
    color: beige;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
    </style>
  <!-- Include Firebase SDK scripts -->
  <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>

  <!-- Initialize Firebase -->
  <script>
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
    firebase.initializeApp(firebaseConfig);

    const auth = firebase.auth();
    const firestore = firebase.firestore();
  </script>
</head>
  <h1>Users</h1>
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Users </th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="user-table">
      <!-- User data will be displayed here -->
    </tbody>
  </table>

  <!-- Create User Form -->
  
  <script>
 // Function to delete a user
function deleteUser(userId) {
  // Get the current user's email from localStorage
  var admin_Email = localStorage.getItem('userSession');

  alert('Only admins Email . ' + admin_Email);
  // Check if the current user is an admin by querying Firestore
  firestore.collection('user').where('email', '==', admin_Email).get()
    .then((querySnapshot) => {
      if (querySnapshot.size > 0) {
        // User with the matching email found
        const currentUser = querySnapshot.docs[0].data();

        // Check if the current user is an admin (assuming isAdmin is a boolean field)
        const currentUserIsAdmin = currentUser.IsAdmin === true;

        if (!currentUserIsAdmin) {
          alert('Only admins can delete users.');
          return;
        }

        // Store the current admin's information in Firestore
        const adminInfo = {
          id: currentUser.id,
          name: currentUser.name,
          email: currentUser.email,
        };

        firestore.collection('Responsible').add(adminInfo)
          .then(() => {
            // Alert that the user is successfully deleted from the database
            alert('User successfully deleted from the database.');

            // Delete the user from Firestore
            firestore.collection('user').doc(userId).delete()
              .then(() => {
                // Also delete the user from Firebase Authentication if needed
                // Note: Be careful when deleting users from Firebase Authentication
                displayUsers();
              })
              .catch((error) => {
                console.error('Error deleting user from Firestore: ', error);
                // Handle the error here
                alert('Something went wrong while deleting the user.');
              });
          })
          .catch((error) => {
            console.error('Error storing admin data in Firestore: ', error);
            // Handle the error here
            alert('Something went wrong while storing admin data.');
          });
      } else {
        // User with the specified email not found
        alert('Current user not found.');
      }
    })
    .catch((error) => {
      console.error('Error querying Firestore: ', error);
      // Handle the error here
      alert('Something went wrong while checking admin status.');
    });
}



    // Function to display users in the table
    function displayUsers() {
      const userTable = document.getElementById('user-table');
      userTable.innerHTML = '';

      firestore.collection('user').get().then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
          const userData = doc.data();
          const userId = doc.id;
		   const isAdminText = userData.IsAdmin ? 'Admin' : 'Student'
          userTable.innerHTML += `
            <tr>
              <td>${userData.firstName}</td>
              <td>${userData.lastName}</td>
              <td>${userData.email}</td>
              <td>${isAdminText}</td>
              <td>
                <button onclick="updateUser('${userId}')">Update</button>
                <button onclick="deleteUser('${userId}')">Delete</button>
              </td>
            </tr>
          `;
        });
      });
    }

    // Function to create a user
    function createUser() {
      const newFirstName = document.getElementById('newFirstName').value;
      const newLastName = document.getElementById('newLastName').value;
      const newEmail = document.getElementById('newEmail').value;

      const newUser = {
        firstName: newFirstName,
        lastName: newLastName,
        email: newEmail,
      };

      firestore.collection('user').add(newUser).then(() => {
        displayUsers();
      });
    }

    

// Function to delete a user
function deleteUser(userId) {
  // Get the current user's email from localStorage
  var admin_Email = localStorage.getItem('userSession');

  // Check if the current user is an admin by querying Firestore
  firestore.collection('user').where('email', '==', admin_Email).get()
    .then((querySnapshot) => {
      if (querySnapshot.size > 0) {
        // User with the matching email found
        const currentUser = querySnapshot.docs[0].data();

        // Check if the current user is an admin (assuming isAdmin is a boolean field)
        const currentUserIsAdmin = currentUser && currentUser.IsAdmin === true;

        if (!currentUserIsAdmin) {
          alert('Only admins can delete users.');
          return;
        }

        // Store the current admin's information in Firestore
        const adminInfo = {
          email: currentUser.email,
          email: currentUser.email,
        };

        if (currentUser.name) {
          adminInfo.name = currentUser.name;
        }

        firestore.collection('Responsible').add(adminInfo)
          .then(() => {
            // Alert that the user is successfully deleted from the database
            

            // Delete the user from Firestore
            firestore.collection('user').doc(userId).delete()
              .then(() => {
                // Also delete the user from Firebase Authentication if needed
				alert('User successfully deleted from the database.');
                // Note: Be careful when deleting users from Firebase Authentication
                displayUsers();
              })
              .catch((error) => {
                console.error('Error deleting user from Firestore: ', error);
                // Handle the error here
                alert('Something went wrong while deleting the user.');
              });
          })
          .catch((error) => {
            console.error('Error storing admin data in Firestore: ', error);
            // Handle the error here
            alert('Something went wrong while storing admin data.');
          });
      } else {
        // User with the specified email not found
        alert('Current user not found.');
      }
    })
    .catch((error) => {
      console.error('Error querying Firestore to check admin status: ', error);
      // Log more details about the error
      alert('Something went wrong while checking admin status. Check console for details.');
    });
}

// Function to update a user
function updateUser(userId) {
  // Get the user data from Firestore using the userId
  firestore.collection('user').doc(userId).get()
    .then((doc) => {
      if (doc.exists) {
        const userData = doc.data();

        // Create a form to update user details
        const updateForm = document.createElement('form');
        updateForm.innerHTML = `
          <label for="updatedFirstName">First Name:</label>
          <input type="text" id="updatedFirstName" value="${userData.firstName}">
          <label for="updatedLastName">Last Name:</label>
          <input type="text" id="updatedLastName" value="${userData.lastName}">
          <label for "updatedEmail">Email:</label>
          <input type="email" id="updatedEmail" value="${userData.email}">
          <label for="updatedIsAdmin">Is Admin:</label>
          <input type="checkbox" id="updatedIsAdmin" ${
            userData.IsAdmin ? 'checked' : ''
          }>
          <button type="button" onclick="submitUpdate('${userId}')">Submit Update</button>
        `;

        // Append the form to the document
        document.body.appendChild(updateForm);
      } else {
        // User with the specified userId not found
        alert('User not found for update.');
      }
    })
    .catch((error) => {
      console.error('Error fetching user data for update: ', error);
      // Handle the error here
      alert('Something went wrong while fetching user data for update.');
    });
}

// Function to submit the updated user details
function submitUpdate(userId) {
  const updatedFirstName = document.getElementById('updatedFirstName').value;
  const updatedLastName = document.getElementById('updatedLastName').value;
  const updatedEmail = document.getElementById('updatedEmail').value;
  const updatedIsAdmin = document.getElementById('updatedIsAdmin').checked;

  // Update the user data in Firestore
  firestore.collection('user').doc(userId).update({
    firstName: updatedFirstName,
    lastName: updatedLastName,
    email: updatedEmail,
    IsAdmin: updatedIsAdmin,
  })
    .then(() => {
      // Remove the update form from the document
      const updateForm = document.querySelector('form');
      document.body.removeChild(updateForm);

      // Alert that the user is successfully updated
      alert('User successfully updated.');

      // Refresh the displayed users
      displayUsers();
    })
    .catch((error) => {
      console.error('Error updating user data in Firestore: ', error);
      // Handle the error here
      alert('Something went wrong while updating user data.');
    });
}

    // Display users on page load
    displayUsers();
  </script>
</body>
</html>
