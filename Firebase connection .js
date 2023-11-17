<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.5.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.5.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDIbanOJPiWdmMZhqJB7xcNvOM_6-uFHqI",
    authDomain: "my-app-d904f.firebaseapp.com",
    databaseURL: "https://my-app-d904f-default-rtdb.firebaseio.com",
    projectId: "my-app-d904f",
    storageBucket: "my-app-d904f.appspot.com",
    messagingSenderId: "898558062375",
    appId: "1:898558062375:web:f97341bb35341763fc0302",
    measurementId: "G-ERVZP13N44"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>