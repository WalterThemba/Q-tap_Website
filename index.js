// Import other necessary Firebase modules as needed
 
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

const auth = firebase.auth();
const database = firebase.database();
const firestore = firebase.firestore();
const databaseRef = database.ref(); // Add this line

function registerUser() {
    // Get user input values
    const firstName = document.getElementById("FirstName").value;
    const lastName = document.getElementById("Lastname").value;
    const email = document.getElementById("Email").value;
    const password = document.getElementById("Password").value;

    // Validate input fields
    if (!validate_email(email) || !validate_password(password) || !validate_field(firstName) || !validate_field(lastName)) {
        alert('Please fill in all fields correctly.');
        return;
    }

    // Create user in Firebase Authentication
    auth.createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // User registered successfully
            const user = userCredential.user;
            const userData = {
                email: email,
                firstName: firstName,
                lastName: lastName,
                IsAdmin: false // Set IsAdmin to false by default
            };
            
            // Store user data in Cloud Firestore
            // Replace 'your_collection_name' with the actual name of your Firestore collection
            firestore.collection('user').doc(user.uid).set(userData)
                .then(() => {
                    alert('User registered and data stored successfully.');
                    window.location.href = "Login.php";
                })
                .catch((error) => {
                    console.error('Error storing user data in Firestore: ', error);
                    // Handle the error here
					alert('Something is wrong with the database.');
                });
        })
        .catch((error) => {
            console.error('Error creating user in Firebase Authentication: ', error);
            // Handle the error here
        });
}


function loginUser() {
    const email = document.getElementById("loginEmail").value;
    const password = document.getElementById("loginPassword").value;
 showLoadingRing();
    // Validate input fields
    if (!validate_email(email) || !validate_password(password)) {
        alert('Please fill in all fields correctly.');
        return;
    }

    auth.signInWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // Signed in
            const user = userCredential.user;
	
	var userDocRef = firestore.collection("user").doc(user.uid);
            // Check the user's role in Firestore
            firestore.collection("user").doc(user.uid).get()
                .then((doc) => {
                    if (doc.exists) {
                        const userData = doc.data();
                        const isAdmin = userData.IsAdmin;
						
                        if (isAdmin !== undefined) {
                           
                            if (isAdmin) {
                                // Redirect an admin to the admin page
								// On the first page (JavaScript)
								localStorage.setItem('myValue', user.uid);
								localStorage.setItem('Name', user.firstName);
								// Store the value in localStorage
								localStorage.setItem('userSession', user.email);

								//localStorage.setItem('userSession', userData.Email);
								
								
                                window.location.href = "Admin/welcome.php";
                            } else {
                              // Redirect a regular user to their page and store user.uid in localStorage
								localStorage.setItem('myValue', user.uid);
								// Store the value in localStorage
								localStorage.setItem('userSession', user.email);
								
								window.location.href = "Student/welcome.php";

                            }
                        } else {
                            // Handle the case where isAdmin is not set
                            console.error("isAdmin field is not set.");
                            alert("Login failed. User data is incomplete.");
                        }
                    } else {
                        // Handle the case where user data is not found in Firestore
                        console.error("User data not found.");
                        alert("Login failed. User data not found.");
                    }
                })
                .catch((error) => {
                    // Handle errors when retrieving user data from Firestore
                    console.error("Error retrieving user data: ", error);
                    alert("Login failed. Please try again later.");
                }).finally(() => {
                    hideLoadingRing(); // Hide the loading ring after login process is complete
                });
        })
        .catch((error) => {
            // Error handling for sign-in
            console.error("Error logging in: ", error);
            alert("Login failed. Please check your credentials.");
        });
		hideLoadingRing()
}


function validate_email(email){
	expression = /^[^@]+@\w+(\.\w+)+\w$/
	if(expression.test(email) == true)
	{
		return true
	}
	else{
		return false
	}
}
function validate_password(password){
	if(password < 6){
		return false
	}
	else{
		return true
	}
}
function validate_field(field){
	if(field == null){
		return false
	}
	if(field.length <= 0){
		return false
	}
	else{
		return true
	}
}
function checkAdminAndRedirect(user) {
    const firestore = firebase.firestore();

    // Check if the user is an admin
    firestore.collection("users").doc(user.uid).get()
        .then((doc) => {
            if (doc.exists && doc.data().isAdmin) {
                // Redirect admin to admin page
                window.location.href = "Admin/LECTURER HAS TO ACCEPT OR REJECT.php";
            } else {
                // Redirect regular user to student page
                window.location.href = "Student/welcome.php";
            }
        })
        .catch((error) => {
            console.error("Error checking user data: ", error);
        });
}

