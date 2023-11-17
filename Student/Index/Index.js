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

// Check if a user is currently logged in
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    console.log("User is currently logged in");
    // You can access the user's information using 'user' object.
  } else {
    // No user is signed in.
    console.log("User is not currently logged in");
  }
});

/*function LoadComplain() {
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
}*/

function LodgeComplain() {
    // Get values from the form
    const studentNo = document.getElementById("StudentNo").value;
    const subject = document.getElementById("Subject").value;
    const complaint = document.getElementById("Complaint").value;
    var myValue = localStorage.getItem('myValue');
    // Retrieve the value from localStorage
    var userSession = localStorage.getItem('userSession');
    const now = new Date();

    // Get the current date components
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0'); // Months are 0-based, so add 1
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');

    // Create the formatted date-time string
    const formattedDateTime = `${year}-${month}-${day}T${hours}:${minutes}:${seconds}`;
    const TimeFormaet = `${hours}:${minutes}`;


    if (myValue !== null && userSession !== null) {
        // Create a new document with a unique ID in the "complaints" collection
        firestore.collection("complaints").add({
            studentNo: studentNo,
            Email: userSession,
            subject: subject,
            Date: formattedDateTime,
            Time: TimeFormaet,
            complaint: complaint
        })
        .then(function(docRef) {
            console.log("Complaint document written with ID: ", docRef.id);
            // Clear the form
            document.getElementById("StudentNo").value = "";
            document.getElementById("Subject").value = "";
            document.getElementById("Complaint").value = "";
            alert("Complaint lodged successfully!");
        })
        .catch(function(error) {
            console.error("Error adding document: ", error);
            alert("An error occurred while lodging the complaint.");
        });
    } else {
        window.history.back();
    }
}


// Add an event listener to the form
document.getElementById("bookingForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const studentNumber = document.getElementById("studentNumber").value;
    const date = document.getElementById("date").value;
    const time = document.getElementById("time").value;
    const module = document.getElementById("module").value;
    var myValue = localStorage.getItem('myValue');
    // Retrieve the value from localStorage
    var userSession = localStorage.getItem('userSession');
    if (myValue != null & userSession != null) {
        // Create a new document with a unique ID in the "bookings" collection
        firestore.collection("bookings").add({
            studentNumber: studentNumber,
            Email: userSession,
            date: date,
            time: time,
            module: module,
            statusClass: false
        })
        .then(function(docRef) {
            // Booking was successfully saved to Firestore
            const confirmationDiv = document.getElementById("confirmation");
            confirmationDiv.innerHTML = `Session booked successfully for ${studentNumber} on ${date} at ${time} for module ${module}. Wait for lecturer's response.`;
            window.location.href = "Booking_Status.php";
        })
        .catch(function(error) {
            // Handle errors
            console.error("Error adding document: ", error);
            const confirmationDiv = document.getElementById("confirmation");
            confirmationDiv.innerHTML = "An error occurred while booking the session.";
        });
    } else {
        window.history.back();
    }
});
